/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package exam;

//import java.io.IOException;
import java.io.*;
import java.util.*;

/**
 *
 * @author Owen
 */
public class BookModel {

    private ArrayList bookArrayList = new ArrayList();
    private Book book = new Book("", 0, "");

    public BookModel() {
        bookArrayList.add(this.book);
    }

    public void addBook(Book book) {
        if (!bookArrayList.contains(book)) {
            bookArrayList.add(book);
        }
    }

    public ArrayList getBookArrayList() {
        return bookArrayList;
    }

    public void setBookArrayList(ArrayList bookArrayList) {
        this.bookArrayList = bookArrayList;
    }

    public Book getBook() {
        return book;
    }

    public void setBook(Book book) {
        this.book = book;
    }

    public void loadFile() {
        try ( FileInputStream fin = new FileInputStream("Book.dat");  ObjectInputStream in = new ObjectInputStream(fin);) {
            try {
                setBookArrayList((ArrayList) in.readObject());
            }
            catch (Exception e){
                System.out.println("cArray");
            }
            System.out.println("loadedsaved");
        } catch (IOException e) {
            System.out.println("IO Can't");
            
        }
    }
        public void saveFile() {
        try ( FileOutputStream fout = new FileOutputStream("Book.dat");  ObjectOutputStream out = new ObjectOutputStream(fout);) {
            try {
                out.writeObject((ArrayList) getBookArrayList());
            }
            catch (Exception e){
                System.out.println("cArray");
            }
            System.out.println("saved");
        } catch (IOException e) {
            System.out.println("IO Can't");
            
        }
    }
}
