import numpy as np
import matplotlib.pyplot as plt
from matplotlib.animation import FuncAnimation

# Set up figure and 3D axis
fig = plt.figure()
ax = plt.axes(projection='3d')

# Define the mountain shape as a parametric equation
def mountain(u, v):
    x = u
    y = v
    z = np.sin(np.sqrt(u**2 + v**2))
    return x, y, z

# Generate data for the mountain
u = np.linspace(-5, 5, 100)
v = np.linspace(-5, 5, 100)
u, v = np.meshgrid(u, v)
x, y, z = mountain(u, v)

# Plot the initial mountain
mountain_plot = ax.plot_surface(x, y, z, cmap='viridis')

# Define the animation function
def animate(i):
    # Rotate the mountain by a small amount around the y-axis
    x, y, z = mountain(u, v + i / 50)
    mountain_plot.set_array(None)
    mountain_plot.set_xdata(x)
    mountain_plot.set_ydata(y)
    mountain_plot.set_3d_properties(z)

# Create the animation using matplotlib's FuncAnimation function
animation = FuncAnimation(fig, animate, frames=range(100), interval=20)

plt.show()
