# Import the necessary libraries
from google.cloud import translate_v2 as translate
import os
from gtts import gTTS

# Set your Google Cloud Platform project ID
os.environ["GOOGLE_CLOUD_PROJECT"] = "your-project-id"

# Create a translate client
translate_client = translate.Client()

# Set the text to translate and the target language
text = "hello"
target = "fr"  # French

# Translate the text and print the result
translation = translate_client.translate(text, target_language=target)
print(translation["translatedText"])

# Generate an audio version of the translated text
tts = gTTS(translation["translatedText"])

# Save the audio file
tts.save("hello.mp3")

# Play the audio file
os.system("hello.mp3")


# pip install google-cloud
# pip install gTTS


