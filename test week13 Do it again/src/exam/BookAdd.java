/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package exam;

import java.awt.*;
import javax.swing.*;

/**
 *
 * @author Owen
 */
public class BookAdd {

    private JFrame jf;
    private JPanel jp, jpbut;
    private JTextField tfn, tfn2, tfp, tfp2, tft, mid;
    private JComboBox cb;
    private JButton insert;

    public BookAdd() {
        jf = new JFrame("book");
        jp = new JPanel();

        jpbut = new JPanel();

        tfn = new JTextField("Name");
        tfp = new JTextField("Price");

        tfp2 = new JTextField();
        tfn2 = new JTextField();
        tft = new JTextField("Type");
        mid = new JTextField();
        mid.setColumns(3);

        tfp.setEditable(false);
        tfn.setEditable(false);
        tft.setEditable(false);

        insert = new JButton("Insert");

        cb = new JComboBox();
        cb.addItem("General");
        cb.addItem("Computer");
        cb.addItem("Math&Sci");
        cb.addItem("Photo");

        jp.setLayout(new GridLayout(3, 2));
        jp.add(tfn);
        jp.add(tfn2);
        jp.add(tfp);
        jp.add(tfp2);
        jp.add(tft);
        jp.add(cb);
        jpbut.add(insert);

        jf.add(jp, BorderLayout.NORTH);
        jf.add(jpbut, BorderLayout.SOUTH);

        jf.pack();
        jf.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        jf.setLocationRelativeTo(null);
        jf.setVisible(true);
    }
    
//    public static void main(String[] args) {
//        new BookAdd();
//    }

    public JFrame getJf() {
        return jf;
    }

    public void setJf(JFrame jf) {
        this.jf = jf;
    }

    public JPanel getJp() {
        return jp;
    }

    public void setJp(JPanel jp) {
        this.jp = jp;
    }

    public JPanel getJpbut() {
        return jpbut;
    }

    public void setJpbut(JPanel jpbut) {
        this.jpbut = jpbut;
    }

    public JTextField getTfn() {
        return tfn;
    }

    public void setTfn(JTextField tfn) {
        this.tfn = tfn;
    }

    public JTextField getTfn2() {
        return tfn2;
    }

    public void setTfn2(JTextField tfn2) {
        this.tfn2 = tfn2;
    }

    public JTextField getTfp() {
        return tfp;
    }

    public void setTfp(JTextField tfp) {
        this.tfp = tfp;
    }

    public JTextField getTfp2() {
        return tfp2;
    }

    public void setTfp2(JTextField tfp2) {
        this.tfp2 = tfp2;
    }

    public JTextField getTft() {
        return tft;
    }

    public void setTft(JTextField tft) {
        this.tft = tft;
    }

    public JTextField getMid() {
        return mid;
    }

    public void setMid(JTextField mid) {
        this.mid = mid;
    }

    public JComboBox getCb() {
        return cb;
    }

    public void setCb(JComboBox cb) {
        this.cb = cb;
    }

    public JButton getInsert() {
        return insert;
    }

    public void setInsert(JButton insert) {
        this.insert = insert;
    }
}
