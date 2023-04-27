
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.*;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
/**
 *
 * @author Owen
 */
public class Poring implements ActionListener, MouseListener {

    private int numCount;
    private JFrame jf;
    private JLabel lb;
    private JButton add;
    public JFrame jf1;
    public JPanel p1;
    public JLabel num,por;
    public JTextField tf1, tf2, tf3;
    public JButton b1, b2;
    private ImageIcon icon;
//    private po ;

    public Poring() {
        numCount += 1;
        icon = new ImageIcon("C:\\Users\\Owen\\OneDrive\\Documents\\NetBeansProjects\\week12\\src\\poring.jpg");
//        Image image = icon.getImage();
        jf1 = new JFrame();
        p1 = new JPanel(new FlowLayout());
        por = new JLabel(icon);

        p1.add(por);
        p1.add(num);
        jf1.add(p1);
//        jf1.add(p1, BorderLayout.NORTH);
//        jf1.add(p2);
        jf1.setDefaultCloseOperation(jf1.EXIT_ON_CLOSE);
//        jf1.setResizable(false);
////        jf1.setSize(200, 150);
        jf1.addMouseListener(this);
        jf1.setResizable(false);
        jf1.setVisible(true);

    }

    @Override
    public void actionPerformed(ActionEvent e) {
        
    }


    public void windowClosing(WindowEvent e) {
      
    }


    public void windowOpened(WindowEvent e) {
//        try {
//            FileInputStream fr = new FileInputStream("StudentM.dat");
//            ObjectInputStream oi = new ObjectInputStream(fr);
//            s1 = (Student) oi.readObject();
//            tf1.setText("" + s1.getID());
//            tf2.setText("" + s1.getName());
//            tf3.setText("" + s1.getMoney());
//        } catch (FileNotFoundException ex) {
//            System.out.println("File not found");
//        } catch (IOException ex) {
//            System.out.println("Error initializing stream");
//        } catch (ClassNotFoundException ex) {
//            ex.printStackTrace();
//        }
    }


    @Override
    public void mouseClicked(MouseEvent e) {
        throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    }

    @Override
    public void mousePressed(MouseEvent e) {
        throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    }

    @Override
    public void mouseReleased(MouseEvent e) {
        throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    }

    @Override
    public void mouseEntered(MouseEvent e) {
        throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    }

    @Override
    public void mouseExited(MouseEvent e) {
        throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    }
}
