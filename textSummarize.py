import re
import nltk
from heapq import nlargest

# Sample paragraph
text = """Natural language processing (NLP) is a subfield of linguistics, computer science, 
information engineering, and artificial intelligence concerned with the interactions between 
computers and human languages, in particular how to program computers to process and analyze 
large amounts of natural language data. Challenges in natural language processing frequently 
involve speech recognition, natural language understanding, and natural language generation. 
The history of natural language processing generally started in the 1950s, although work can 
be found from earlier periods."""

# Step 1: Clean the text (remove special characters)
text = re.sub(r'[^a-zA-Z\s]', '', text)

# Step 2: Tokenize the text into sentences
sentences = nltk.sent_tokenize(text)

# Step 3: Count word frequencies
word_freq = nltk.FreqDist(text.lower().split())

# Step 4: Score each sentence based on word frequency
sentence_scores = {}
for sentence in sentences:
    score = sum(word_freq[word] for word in sentence.lower().split())
    sentence_scores[sentence] = score

# Step 5: Get the top 3 sentences with highest scores
summary = ' '.join(nlargest(3, sentence_scores, key=sentence_scores.get))

# Print the summary
print(summary)
