import os
import random
import time
from signal import signal, SIGINT

# List of quotes
quotes = [
    "Life is like riding a bicycle. To keep your balance, you must keep moving.",
    "The only way to do great work is to love what you do.",
    "Believe you can and you're halfway there.",
    "Don't watch the clock; do what it does. Keep going.",
    "If you want to live a happy life, tie it to a goal, not to people or things.",
    "The only way to do great work is to love what you do.",
    "Success is not final, failure is not fatal: It is the courage to continue that counts.",
    "Success consists of going from failure to failure without loss of enthusiasm."
    
]


def insert_tab_and_newline(string):
    return string.replace(",", ",\t\n")


# Display a loading screen with a spinning dots animation for 5 seconds
dots = [".", "..", "...", "...."]
print("Loading quotes", end="")
for i in range(5):
    print(dots[i % len(dots)])
    # print(dots[i % len(dots)], end="\r")

    time.sleep(0.5)
    os.system("cls")
# Display a random quote every 2 seconds
while True:
    # Get a random quote from the quotes array
    quote = random.choice(quotes)

    # Clear the console and print the quote
    # print("\033[2J")  # clear the screen
    # print(chr(27) + "[2J")  # clear the screen
    os.system("cls")  # clear the screen
    new_string = insert_tab_and_newline(quote)
    print(new_string + "/n")
    

# print(quote"/n")
# print("/tHappy New Year!!!")

# Start a 2-second countdown timer
for i in range(2, 0, -1):
    print(f"{i} seconds remaining")
    time.sleep(1)

# Stop displaying quotes when the user closes the command prompt


def handler(signal_received, frame):
    # Handle any cleanup here
    print('SIGINT or CTRL-C detected. Exiting gracefully')
    exit(0)


signal(SIGINT, handler)


# while True:
#   # Prompt the user to enter a command
#   command = input("Enter a command: ")

#   if command == "P":
#     # If the user entered "P", pause the program
#     print("Pausing the program. Press enter to continue.")
#     input()
#   else:
#     # If the user entered something other than "P", print a message
#     print("Invalid command. Please try again.")
