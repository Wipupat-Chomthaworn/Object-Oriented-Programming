/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Owen
 */
import java.util.*;
public class oop3_11 {

    public static void main(String[] args) {
        Scanner tube = new Scanner(System.in);
        Scanner tube2 = new Scanner(System.in);

        System.out.print("Input your money : ");
        int money = tube.nextInt();
        System.out.print("Input your account type(Please type A B C or X in uppercase) : ");
        String type = tube2.nextLine();
        double tm = 0;
        if (type.equals("A")) {
            tm = money * 1.015;
        } else if (type.equals("B")) {
            tm = money * 1.02;
        } else if (type.equals("C")) {
            tm = money * 1.015;
        } else if (type.equals("X")) {
            tm = money * 1.05;
        }
//        else {
//            tm = money;
//        }
        System.out.println("Your total money in one year = " + tm);

    }

}
