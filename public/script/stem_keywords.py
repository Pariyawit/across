from nltk.stem.snowball import SnowballStemmer
from nltk import WordPunctTokenizer
import sys,json,os

en_stem = SnowballStemmer("english")
wpt = WordPunctTokenizer()


script_dir = os.path.dirname(__file__)
json_data=open(script_dir+'/keywords.json')
keywords = json.load(json_data)
json_data.close()

stem_keywords = dict()
for topic in keywords:
	stem_keywords[topic]=list()
	for word in keywords[topic]:
		stem_keywords[topic].append(en_stem.stem(word))

with open("stem_keywords.json","w") as fp:
	json.dump(stem_keywords,fp,indent=4)