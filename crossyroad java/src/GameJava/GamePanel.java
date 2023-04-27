/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package GameJava;

import entity.Player;
import java.awt.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.*;
import tile.TileManager;

/**
 *
 * @author ACER
 */
public class GamePanel extends JPanel implements Runnable {

    // SCREEN SETTINGS
    final int originalTileSize = 16; // 16x16 tile;
    final int scale = 3;

    public final int tileSize = originalTileSize * scale; // 48x48 tile
    public final int maxScreenCol = 16;
    public final int maxScreenRow = 12;
    public final int screenWidth = tileSize * maxScreenCol; // 48x16 = 768 pixels
    public final int screenHeight = tileSize * maxScreenRow; // 48x12 = 576 pixels
//    public Car car1;

    //FPS
    int FPS = 60;

    TileManager tileM = new TileManager(this);
    KeyHandler keyH = new KeyHandler();
    Thread gameThread;
    Player player = new Player(this, keyH);

    public GamePanel() {
        this.setPreferredSize(new Dimension(screenWidth, screenHeight)); //Set the size of this class(JPanel)
        this.setBackground(Color.black);
        // if set to true, all the drawing from this component will be done in an offscreen painting buffer
        this.setDoubleBuffered(true);
        this.addKeyListener(keyH);
        this.setFocusable(true);//With this, this GamePanel can be "focused" to receive key input.
    }

    public void startGameThread() {
        gameThread = new Thread(this);
        gameThread.start();
    }

    @Override
    //create game Loop
    public void run() {

        double drawInterval = 1000000000 / FPS;// 0.01666 seconds
        double delta = 0;
        long lastTime = System.nanoTime();
        long currentTime;
        long timer = 0;
        int drawCount = 0;

        while (gameThread != null) {
            currentTime = System.nanoTime();
            delta += (currentTime - lastTime) / drawInterval;
            timer += (currentTime - lastTime);
            lastTime = currentTime;

            if (delta >= 1) {
                // 1 UPDATE: update information such as character positions
                update();
                // 2 DRAW: draw the screen with the updated information
                repaint();
                delta--;
                drawCount++;
                System.out.println("x: " + player.getWorldX() + ",Y: " + player.getWorldY());

                // Create two cars moving in opposite directions
                Car car1 = new Car(-60, 28, 1, "left");
//                Car car2 = new Car(-60, 28, 1, "left");

                CarThread thread1 = new CarThread(car1);
                thread1.start();
//                CarThread thread2 = new CarThread(car2);
            }

            if (timer >= 1000000000) {
                System.out.println("FPS:" + drawCount);
                drawCount = 0;
                timer = 0;
            }
        }
//        if ()
    }

    public void update() {
        player.update();
    }

    // Graphics = A class that has many functions to draw objects on the screen.
    public void paintComponent(Graphics g) {
        super.paintComponent(g);// parent is JPanel

        /* Graphics2D class extends the Graphics class to provide more sophisticated control over geometry,
        coordinate transformations, color management, and text layout. */
        Graphics2D g2 = (Graphics2D) g;
        // Dispose of this graphics context and release any system resources that it is using.
        tileM.draw(g2);
        player.draw(g2);
        g2.dispose();
    }
}
