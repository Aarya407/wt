import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize, sent_tokenize
from nltk.probability import FreqDist
import matplotlib.pyplot as plt
from wordcloud import WordCloud

# Download the stopwords corpus
nltk.download('stopwords')

# Define the text paragraph
text = """Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique ante et velit 
vestibulum, vel pharetra orci aculis. Nulla mattis risus quis augue tincidunt rutrum rhoncus. 
Morbi varius, arcu vitae scelerisque laoreet, magna est imperdiet quam, sit amet ultrices lectus 
justo id enim. Sed dictum suscipit commodo. Sed maximus consequat risus, nec pharetra nibh interdum 
quis. Etiam eget quam vel augue dictum dignissim sit amet nec elit. Nunc at sapien dolor. Nulla vitae 
iaculis lorem. Suspendisse potenti. Sed non ante turpis. Morbi consectetur, arcu vestibulum suscipit, 
mauris eros convalis nibh, nec feugiat tortor etiam sit amet enim. Aliquam erat volutpat. Etiam vel nisi 
id neque viverra dapibus non non lectus."""

# Tokenize the paragraph to extract words and sentences
words = word_tokenize(text.lower())
sentences = sent_tokenize(text)

# Remove the stopwords from the extracted words using a normal for-loop
stop_words = set(stopwords.words('english'))
filtered_words = []
for word in words:
    if word.casefold() not in stop_words:
        filtered_words.append(word)

# Calculate the word frequency distribution and plot the frequencies using matplotlib
fdist = FreqDist(filtered_words)
fdist.plot(30, cumulative=False)
plt.show()

# Plot the word cloud of the text using WordCloud
wordcloud = WordCloud(width=800, height=800,
                       background_color='white',
                       stopwords=stop_words,
                       min_font_size=10).generate(text)

# Plot the WordCloud image
plt.figure(figsize=(8, 8), facecolor=None)
plt.imshow(wordcloud)
plt.axis("off")
plt.show()
