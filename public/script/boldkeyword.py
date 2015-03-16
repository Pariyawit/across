from nltk.stem.snowball import SnowballStemmer
from nltk import WordPunctTokenizer
import sys,json,os

en_stem = SnowballStemmer("english")
wpt = WordPunctTokenizer()
# stopwords_list = []
# stopwords_list.extend(stopwords.words('english')) 
# stopwords_list.extend(punctuation)

# topic = ['cleanliness','comfort','location','staff','value']

#except_word = ['so far','besides']

# topic = sys.argv[1];

data = json.loads(sys.argv[1]);



script_dir = os.path.dirname(__file__)
json_data=open(script_dir+'/stem_keywords.json')
# json_data=open('stem_keywords.json')
keywords = json.load(json_data)
json_data.close()

output = dict();
for topic in data:
	output[topic] = list()
	for sentence in data[topic]:
		tokens = wpt.tokenize(sentence)
		for token in tokens:
			if(en_stem.stem(token) in keywords[topic]):
				sentence = sentence.replace(token,"<strong>"+token+"</strong>");
		output[topic].append(sentence)

print json.dumps(output);

