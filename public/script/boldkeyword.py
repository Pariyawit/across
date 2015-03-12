from nltk.stem.snowball import SnowballStemmer
from nltk import WordPunctTokenizer
import sys,json,os

# en_stem = SnowballStemmer("english")
wpt = WordPunctTokenizer()
# stopwords_list = []
# stopwords_list.extend(stopwords.words('english')) 
# stopwords_list.extend(punctuation)

# topic = ['cleanliness','comfort','location','staff','value']

topic = sys.argv[1];
sentence = sys.argv[2];


script_dir = os.path.dirname(__file__)
json_data=open(script_dir+'/keywords.json')
# json_data=open('keywords.json')
keywords = json.load(json_data)
json_data.close()

tokens = wpt.tokenize(sentence)
for token in tokens:
	if(token in keywords[topic]):
		# print token
		sentence = sentence.replace(token,"<strong>"+token+"</strong>");
# stem = en_stem.stem(token)
print sentence
