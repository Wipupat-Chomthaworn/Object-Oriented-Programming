import numpy as np
import matplotlib.pyplot as plt
from matplotlib.animation import FuncAnimation

# Set up figure and 3D axis
fig = plt.figure()
ax = plt.axes(projection='3d')

# Define the donut shape as a parametric equation
def donut(u, v):
    x = (1 + 0.5 * np.cos(v)) * np.cos(u)
    y = (1 + 0.5 * np.cos(v)) * np.sin(u)
    z = 0.5 * np.sin(v)
    return x, y, z

# Generate data for the donut
u = np.linspace(0, 2 * np.pi, 100)
v = np.linspace(0, 2 * np.pi, 100)
u, v = np.meshgrid(u, v)
x, y, z = donut(u, v)

# Plot the initial donut
donut_plot = ax.plot_surface(x, y, z, cmap='viridis')

# Define the animation function
def animate(i):
    # Rotate the donut by a small amount around the y-axis
    x, y, z = donut(u, v + i / 50)
    donut_plot.set_array(None)
    donut_plot.set_xdata(x)
    donut_plot.set_ydata(y)
    donut_plot.set_3d_properties(z)

# Create the animation using matplotlib's FuncAnimation function
animation = FuncAnimation(fig, animate, frames=range(100), interval=20)

plt.show()
