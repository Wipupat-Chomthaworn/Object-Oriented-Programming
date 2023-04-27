/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author E4ARE3H
 */
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.io.*;

public class StudentView extends JFrame implements ActionListener, WindowListener {

    public JFrame jf1;
    public JPanel p1, p2;
    public JLabel lid, lname, lmoney;
    public JTextField tf1, tf2, tf3;
    public JButton b1, b2;
    public Student s1;

    public StudentView() {
        jf1 = new JFrame();
        lid = new JLabel("  ID:");
        lname = new JLabel("  Name:");
        lmoney = new JLabel("  Money:");
        p1 = new JPanel(new GridLayout(3, 2));
        p2 = new JPanel(new FlowLayout());

        tf1 = new JTextField();
        tf2 = new JTextField();
        tf3 = new JTextField("0");
        tf3.setEditable(false);
        b1 = new JButton("Deposit");
        b2 = new JButton("Withdraw");
        b1.addActionListener(this);
        b2.addActionListener(this);

        p1.add(lid);
        p1.add(tf1);
        p1.add(lname);
        p1.add(tf2);
        p1.add(lmoney);
        p1.add(tf3);
        p2.add(b1);
        p2.add(b2);
        jf1.add(p1, BorderLayout.NORTH);
        jf1.add(p2);
        jf1.setDefaultCloseOperation(jf1.EXIT_ON_CLOSE);
        jf1.setSize(200, 150);
        jf1.addWindowListener(this);
        jf1.setVisible(true);

    }

    public static void main(String[] args) {
        new StudentView();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String check = e.getActionCommand();
        if (check.equals("Deposit")) {
            s1.setMoney(s1.getMoney() + 100);
            tf3.setText("" + s1.getMoney());
            System.out.println("ID : " + s1.getID() + "\nNAME : " + s1.getName() + "\nMONEY : " + s1.getMoney());
        } else {
            if (s1.getMoney() - 100 < 0) {
                System.out.println("You don't have enough money");
            } else {
                s1.setMoney(s1.getMoney() - 100);
                tf3.setText("" + s1.getMoney());
                System.out.println("ID : " + s1.getID() + "\nNAME : " + s1.getName() + "\nMONEY : " + s1.getMoney());
            }
        }
    }

    @Override
    public void windowClosing(WindowEvent e) {
        int ID = Integer.parseInt(tf1.getText());
        String Name = tf2.getText();
        int Money = Integer.parseInt(tf3.getText());
        s1 = new Student(Name, ID, Money);
        try {
            FileOutputStream Fileout = new FileOutputStream("StudentM.dat");
            ObjectOutputStream objectOut = new ObjectOutputStream(Fileout);
            objectOut.writeObject(s1);
        } catch (IOException i) {
            System.out.println("Cannot write file...");
        }
        System.out.println("File saved!");
        System.exit(0);
    }

    @Override
    public void windowOpened(WindowEvent e) {
        try {
            FileInputStream fr = new FileInputStream("StudentM.dat");
            ObjectInputStream oi = new ObjectInputStream(fr);
            s1 = (Student) oi.readObject();
            tf1.setText("" + s1.getID());
            tf2.setText("" + s1.getName());
            tf3.setText("" + s1.getMoney());
        } catch (FileNotFoundException ex) {
            System.out.println("File not found");
        } catch (IOException ex) {
            System.out.println("Error initializing stream");
        } catch (ClassNotFoundException ex) {
            ex.printStackTrace();
        }
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
