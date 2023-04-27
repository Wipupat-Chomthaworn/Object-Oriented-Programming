



import GameJava.*;
import entity.Entity;
import java.io.*;
import javax.imageio.ImageIO;


public class Car extends Entity{
    GamePanel gp;
    // The current position of the car
//
//    private int positionX,positionY;
//
//    // The current velocity of the car
//    private int speed;
//
//    // The direction the car is facing (in radians)
//    private double direction;
//
//    // The amount of time that has passed since the last update
//    private double timeDelta;
//
//    // The image to use for the car
//    private Image carImage;

    // Creates a new car with the specified position, velocity, and direction
    public Car(int worldX,int worldY, int speed, String direction) {
//        this.position = position;
//        this.velocity = velocity;
        this.direction = direction;

        // Load the image for the car
        try {
            carImageL1 = ImageIO.read(getClass().getResourceAsStream("/tiles/car.png"));
        } catch (IOException e) {
            // Handle the error
        }
    }

    // Updates the car's position and direction based on its current velocity
    public void move() {
        if (direction.equals("left")){
            worldX += speed;
        }
        else if (direction.equals("right")){
            worldX -= speed;
        }
        // Update the position of the car based on its current velocity and direction
        
//        position.y += speed.y * delta;

        // Update the direction of the car based on its current velocity
//        direction += speed.length * timeDelta;
    }

    // Draws the car on the specified graphics context
    public void draw(GamePanel gp) {
        // Save the current transform
        AffineTransform oldTransform = g.getTransform();

        // Rotate the graphics context to match the direction of the car
        g.rotate(direction, position.x, position.y);

        // Draw the car image centered at the car's position
        g.drawImage(carImage, position.x - carImage.getWidth() / 2, position.y - carImage.getHeight() / 2, null);

        // Restore the old transform
        g.setTransform(oldTransform);
    }
}



// Create two cars moving in opposite directions



