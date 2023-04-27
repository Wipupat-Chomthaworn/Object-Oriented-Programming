
import java.awt.event.*;
import java.awt.*;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.*;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Owen
 */
public class PoringConstructor implements ActionListener, WindowListener{

    private JFrame jf;
    private JPanel jp;
    private JLabel lb;
    private JButton addbtn;

    public PoringConstructor() {
        jf = new JFrame();
        addbtn = new JButton("ADD");
        
        addbtn.addActionListener(this);
        
        jp.add(addbtn);
        jf.add(jf);
        jf.setDefaultCloseOperation(jf.EXIT_ON_CLOSE);
        jf.pack();
        jf.setVisible(true);
    }
    
     @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getActionCommand().equals("ADD")){
            Poring poring = new Poring();
        }
    }

    @Override
    public void windowOpened(WindowEvent e) {
    }

    @Override
    public void windowClosing(WindowEvent e) {
    }

    @Override
    public void windowClosed(WindowEvent e) {
    }

    @Override
    public void windowIconified(WindowEvent e) {
    }

    @Override
    public void windowDeiconified(WindowEvent e) {
    }

    @Override
    public void windowActivated(WindowEvent e) {
    }

    @Override
    public void windowDeactivated(WindowEvent e) {
    }
}
