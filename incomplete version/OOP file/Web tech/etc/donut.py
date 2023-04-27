import time
import math
import os

# Set up the dimensions of the console
width = 40
height = 20

# Create a list of frames for the animation
frames = []
for i in range(360):
    # Create a blank frame as a list of lists
    frame = [[" " for _ in range(width)] for _ in range(height)]

    # Calculate the x and y coordinates of the donut
    x = int(math.sin(math.radians(i)) * 10 + 20)
    y = int(math.cos(math.radians(i)) * 10 + 10)

    # Clamp the x and y values to the dimensions of the console
    x = max(0, min(x, width - 1))
    y = max(0, min(y, height - 1))

    # Draw the donut onto the frame using "1" characters
    frame[y - 1][x - 1] = "1"
    frame[y - 1][x] = "1"
    frame[y - 1][x + 1] = "1"
    frame[y][x - 1] = "1"
    frame[y][x] = "1"
    frame[y][x + 1] = "1"
    frame[y + 0][x - 1] = "1"
    frame[y + 0][x] = "1"
    frame[y + 0][x + 1] = "1"

    # Add the frame to the list of frames
    frames.append(frame)

# Display the frames of the animation on a loop
while True:
    for frame in frames:
        # Convert the frame to a string
        frame_str = "\n".join("".join(row) for row in frame)

        # Clear the console and print the frame
        os.system("cls")
        print(frame_str)
        time.sleep(0.1)
