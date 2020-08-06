# Notes 

Natural Language Processing(NLP)

* The 'Natural language' in Natural Language Processing - refers to a language that is used for everyday communication e.g. English, French
etc
* NLP can an be described as any kind of computer manipulation of natural language
to process large amounts of natural language corpora
* Helps to understand a set of abstract rules from text and the relationship that language has with another
* Some examples of technologies that are based on NLP include:  predictive text, machine translation 
* In academia, NLP is commonly known as computational linguistics

### Natural Language Processing Techniques

**Lemmatisation** - the grouping of inflected forms of words to be analysed as a single item
* lemma - is the base form of a word that is used to represent all its other possible forms, the base form under which the word is entered in a dictionary e.g.
run is the lemma - and run runs, running and ran are forms of the same lexeme
* The lemmatised form is simply a convenient representation of the headword lemma

**Stemming** - the process of removing the suffix from a word and reducing it to its root word
e.g flying - suffix is ing - if the suffix is removed, we are left with the stem - fly
Stems stemming stemmed stemtization are all based on the word (lemma) stem

Stemming is used to reduce the inflectional forms of each word into a common base word or root word or stem word
(Inflection is a process of word formation, in which a word is modified to express different grammatical categories such as tense, case, voice, aspect, person, number, gender, mood, animacy and definitness)

* An example of a stemmer is the Lancaster Stemm, which we used for ubb 

**Parsing** -  the analysis of a string of words resulting in a parse tree revealing the syntactic relationships between words which can contain semantics

However, a drawback of parsing is that when and what is parsed is entirely dependant on the user as any paragraph can be phrased any way they choose from individual characters to whole sentences


**Sentiment analysis** -  is the extraction of the interpretation or subjective meaning of a word from a document or set of documents to determine the attitude of a specific word or set of words
One of the greatest uses of it is in social media: e.g. Twitter Facebook, to identify trends of public opinion, how often a word appears in a specific tonal context and interpreting the tone of group fo words

NLP serves a lot of use cases when dealing with a lot of unstructured data

When dealing with unstructured data: need to featurize e.g. we have two documents


“Brown cat”
“white cat"

A feature based on word count:

“Brown cat” => (brown, white, cat) => (1, 0, 1)
“White cat”  -> (brown, white, cat) => (0, 1, 1)

'brown cat' is transformed into a vectorised word count

### A Bag of words
A document represented as a vector of word counts is called a Bag of Words

“Brown cat” -> (brown, white, cat) -> (1, 0,1)
“White cat -> (brown, white, cat) -> (0, 1,1)

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

The Natural Language Toolkit (NLTK) library can be used to built NLP programmes for the purpose of text analysis

It provides basic classes for representing data relevant to natural language processing - standard interfaces for performing tasks such as part of speech tagging, syntactic analysis, text classification