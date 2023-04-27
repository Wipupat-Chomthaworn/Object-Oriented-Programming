/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package tile;

import GameJava.GamePanel;
import java.awt.Graphics2D;
import java.io.IOException;
import javax.imageio.ImageIO;

/**
 *
 * @author ACER
 */
public class TileManager {
    GamePanel gp;
    Tile[] tile;
    
    public TileManager(GamePanel gp){
        this.gp = gp;
        
        tile = new Tile[10];
        
        getTileImage();
    }
    
    public void getTileImage(){
        try{
            tile[0] = new Tile();
            tile[0].image = ImageIO.read(getClass().getResourceAsStream("/tiles/wall.png"));
            
            tile[1] = new Tile();
            tile[1].image = ImageIO.read(getClass().getResourceAsStream("/tiles/car_green.png"));
            
            tile[2] = new Tile();
            tile[2].image = ImageIO.read(getClass().getResourceAsStream("/tiles/car_gray.png"));
            
            tile[3] = new Tile();
            tile[3].image = ImageIO.read(getClass().getResourceAsStream("/tiles/road.png"));
            
            tile[4] = new Tile();
            tile[4].image = ImageIO.read(getClass().getResourceAsStream("/tiles/car.png"));
            
        }catch(IOException e){
            e.printStackTrace();
        }
    }
    
    public void draw(Graphics2D g2){
        g2.drawImage(tile[3].image, 0, 0, gp.screenWidth, gp.screenHeight, null);
        g2.drawImage(tile[4].image, 0, 22, gp.tileSize, gp.tileSize, null);
        g2.drawImage(tile[2].image, 1, 200, gp.tileSize, gp.tileSize/2, null);
        g2.drawImage(tile[1].image, 0, 100, gp.tileSize, gp.tileSize, null);
    }
}
