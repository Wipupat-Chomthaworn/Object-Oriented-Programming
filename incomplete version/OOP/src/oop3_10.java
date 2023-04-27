/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Owen
 */
import java.util.*;

public class oop3_10 {

    public static void main(String[] args) {
        double salary = 0;
        double sb = 0;

        Scanner tube = new Scanner(System.in);

        System.out.print("Please insert your name : ");
        String name = tube.nextLine();
        System.out.print("Please insert your age : ");
        int age = tube.nextInt();
        System.out.print("Please insert number of working days : ");
        int wday = tube.nextInt();

        System.out.print("Please insert number of absent days : ");
        int abday = tube.nextInt();

        System.out.print("Please insert your body weight : ");
        int we = tube.nextInt();

        System.out.println("Hi, " + name);
        System.out.println("Your salary is " + salary + " Baht");
        System.out.println("Your salary and bonus is " + sb + "Baht");
    }
}
