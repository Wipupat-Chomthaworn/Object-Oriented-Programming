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
        // double sb = 0;

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

        if (age > 21 && age < 30) {
            salary = (wday * 300) - (abday * 50);
        } else if (age > 31 && age < 40) {
            salary = (wday * 500) - (abday * 50);
        } else if (age > 41 && age < 50) {
            salary = (wday * 1000) - (abday * 50);
        } else if (age > 51 && age < 60) {
            salary = (wday * 3000);
        }

        System.out.println("Hi, " + name);
        System.out.println("Your salary is " + salary + " Baht");

        if (we >= 10 && we <= 60) {
            salary += 5000;
        } else if (we >= 61 && we <= 90) {
            salary = salary + (5000 - ((we - 60) * 10));
        } else {
            salary = salary;
        }
        System.out.println("Your salary and bonus is " + salary + "Baht");
    }
}
