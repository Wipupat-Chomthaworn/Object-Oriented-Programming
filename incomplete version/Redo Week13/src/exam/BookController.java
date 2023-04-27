/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package exam;

/**
 *
 * @author Owen
 */
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class BookController implements ActionListener, WindowListener {

    private BookView view;
    private BookModel model;
    private BookAdd bookAdd;
    private Book book;
    private int index=0;

    public BookController() {
        view = new BookView();
        model = new BookModel();
        index = Integer.parseInt(view.getMid().getText());

        view.getAdd().addActionListener(this);
        view.getUpdate().addActionListener(this);
        view.getDel().addActionListener(this);
        view.getLeft().addActionListener(this);
        view.getRight().addActionListener(this);
        view.getJf().addWindowListener(this);
//        bookAdd = new BookAdd();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getActionCommand().equals("Add")) {
            bookAdd = new BookAdd();
            bookAdd.getInsert().addActionListener(this);
            System.out.println("add");

        } else if (e.getActionCommand().equals("Update") && index != 0) {
            model.getBookArrayList().set(index, new Book((String) view.getTfn2().getText(), Double.parseDouble(view.getTfp2().getText()), (String) view.getCb().getSelectedItem()));
            System.out.println("up");
            JOptionPane.showMessageDialog(null, "done It", "update Command", JOptionPane.PLAIN_MESSAGE);

        } else if (e.getActionCommand().equals("Delete") && index != 0) {
            model.getBookArrayList().remove(index);
            index--;
            if (index == 0) {
                view.getTfn2().setText("");
                view.getTfp2().setText("");
                view.getMid().setText(index + "");
                view.getCb().setSelectedItem("General");
            } else {
                view.getTfn2().setText(((Book) (model.getBookArrayList().get(index))).getName());
                view.getTfp2().setText(((Book) (model.getBookArrayList().get(index))).getPrice() + "");
                view.getCb().setSelectedItem(((Book) (model.getBookArrayList().get(index))).getType());
                view.getMid().setText(index + "");
            }

            System.out.println("del");
            JOptionPane.showMessageDialog(null, "done It", "del Command", JOptionPane.PLAIN_MESSAGE);

        } else if (e.getActionCommand().equals("<<<") && index > 0) {
            index--;
            if (index == 0) {
                view.getTfn2().setText("");
                view.getTfp2().setText("");
                view.getMid().setText(index + "");
                view.getCb().setSelectedItem("General");
            } else {
                view.getTfn2().setText(((Book) (model.getBookArrayList().get(index))).getName());
                view.getTfp2().setText(((Book) (model.getBookArrayList().get(index))).getPrice() + "");
                view.getCb().setSelectedItem(((Book) (model.getBookArrayList().get(index))).getType());
                view.getMid().setText(index + "");
            }
            System.out.println("<");

        } else if (e.getActionCommand().equals(">>>") && index+1 < model.getBookArrayList().size()) {
            index++;
            view.getTfn2().setText(((Book) (model.getBookArrayList().get(index))).getName());
            view.getTfp2().setText(((Book) (model.getBookArrayList().get(index))).getPrice() + "");
            view.getCb().setSelectedItem(((Book) (model.getBookArrayList().get(index))).getType());
            view.getMid().setText(index + "");
            System.out.println(">");

        } else if (e.getActionCommand().equals("Insert")) {
            book = new Book(bookAdd.getTfn2().getText(), Double.parseDouble(bookAdd.getTfp2().getText()), (String)(bookAdd.getCb().getSelectedItem()));
            model.addBook(book);
            JOptionPane.showMessageDialog(null, "done It", "Insert Command", JOptionPane.PLAIN_MESSAGE);
            bookAdd.getJf().dispose();
            System.out.println("ins");

        }

    }

    @Override
    public void windowOpened(WindowEvent e) {
        model.loadFile();
    }

    @Override
    public void windowClosing(WindowEvent e) {
        model.saveFile();
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
