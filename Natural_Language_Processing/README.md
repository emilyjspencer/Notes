# Notes 

Natural Language Processing(NLP)

* The 'Natural language' in Natural Language Processing - refers to a language that is used for everyday communication e.g. English, French
etc
* NLP can an be described as any kind of computer manipulation of natural language to process and analyze large amounts of natural language corpora
* Helps to understand a set of abstract rules from text and the relationship that language has with another
* Some examples of technologies that are based on NLP include:  predictive text, machine translation 
* In academia, NLP is commonly known as computational linguistics

### NLP Use cases

NLP serves a lot of use cases when dealing with a lot of unstructured data
e.g 
* sentiment analysis is the extraction of the interpretation or subjective meaning of a word from a document or set of documents to determine the attitude of a specific word or set of words
One of the greatest uses of it is in social media: e.g. Twitter Facebook, to identify trends of public opinion, how often a word appears in a specific tonal context and interpreting the tone of group of words to analyze the general sentiment of tweets for example
* customer reviews - analyse customers' sentiments about a product through feedback processing
* Spam detection -  to classify emails as spam
* speech recognition
* smart assistants such as Siri, Alexa etc - convert people's words into text, analyze the words
* fake news detection
* document summarization
* autocompletion
* machine translation
* predictive typing

### Natural Language pre-processing Techniques

NTLK - the Natural Language Toolkit contains a suite of text processing libraries for classification, stemming, lemmatization, parsing, tokenization, tagging etc

**Tokenization** - the process of splitting string input into a list of tokens (parts of a word). The Natural Language Tooklit(NLTK) - a suite of text processing libraries, provides a method called tokenize() - more speficially word_tokenize() to tokenize words and sent_tokenize() to tokenize sentences
sent_tokenize splits a chunk of text into separate sentences
word_tokzenize splits sentences into separate words - or arrays of individual words

**Text lemmatization and stemming**

The goal of both lemmatization and stemming is to reduce inflectional forms of a word to a common base form e.g.
am are - be
flower flowers flower's flowers' - flower

**Stemming** - the process of removing the inflectional forms of a word or the suffix from a word and reducing it to its root/base word/stem 
e.g flying - suffix is ing - if the suffix is removed, we are left with the stem - fly
Stems stemming stemmed stemmatization are all based on the lemma - stem
* Tends to be more crude than lemmatization because oftentimes the deriviational affixes will be removed resulting in a stem that has no meaning e.g. negligen

* Stemmers operate wihtout knowing the context of the word - thus can't understand the difference between words whose meanings depends on their use in the setence/depend on parts of speech
* An example of a stemmer is the Lancaster Stemmer, which we used for ubb

**Lemmatisation** - removes the inflectional endings only and returns the base word - normally aiming to remove the inflectional endings only and returning the base or dictionary form of a word - known as a lemma.
Therefore, unlike with stemming - the remainin words has a meaning - less crude
* lemma - is the base form of a word that is used to represent all its other possible forms, the base form under which the word is entered in a dictionary e.g.
run is the lemma - and run runs, running and ran are forms of the same lexeme


With Lemmatization and Stemming, the tokens need to be converted into lowercase characters and the stopwords must be removed. 
**Stopwords** refer to the most common words in a language, and which don't add much meaning to a sentence. They can be ignored without comprimising the meaning of the sentence i.e. is, at, the etc

**Parsing** -  the analysis of a string of words resulting in a parse tree revealing the syntactic relationships between words which can contain semantics

However, a drawback of parsing is that when and what is parsed is entirely dependant on the user as any paragraph can be phrased any way they choose from individual characters to whole sentences

**Parts of speech tagging**: tagging each word according to is type:
run - verb
on - preposition
cat - noun

**Bag-of-words model** - is a feature extraction technique used to convert text input into vectors of numbers. This conversion of text into vectors of numbers is called feature extraction.
Outputs the occurrence of each word

“Brown cat”
“white cat"

A feature based on word count:

“Brown cat” => (brown, white, cat) => (1, 0, 1)
“White cat”  -> (brown, white, cat) => (0, 1, 1)

'brown cat' is transformed into a vectorised word count

Cosine similarity can be used on the vectors to determine similarity

![cosinesimilarity](cosinesimiliarity.png)

Each document is treated as a vector of features, allowing for mathematical operations such as the cosine similarity to be performed on it

Taking their dot products and dividing it by the multiplication of their magnitudes or other similarity metrics in order to figure out how similar two text documents are

A bag of words can be improved by adjusting the word counts based on their frequency in the corpus 

Tf-idf - term frequency - inverse document frequency


Term frequency - importance of the term within that document

TF(d, t) = number of occurrences of term t in document d
Inverse document fréquence - importance of the term in the corpus

IDF(t_ = log(D/t) where
D = Total number of documents
T = number of documents with the term


Mathematically, TF-IDF can be expressed as:

[!tfidf](tfidf.png)

We do this so that we can get some sort of word count and also notation on how important a word is relative to the entire corpus


### Natural Language Toolkit - NLTK

installation:
```html

pip install nltk

or
pip3 install nltk

```

