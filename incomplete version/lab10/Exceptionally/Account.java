package Exceptionally;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author E4ARE3H
 */
public class Account {
    protected double balance;
    protected String name;
    
    
    public Account(double balance, String name) {
        this.balance = balance;
        this.name = name;
    }
    public void deposit(double a){
        if (a > 0){
            this.balance += a;
            System.out.println(a+" baht is deposited to "+this.name+".");
        }
    }
    public void withdraw(double amount) throws WithdrawException{
        if (amount < 0){
            System.out.println("Input number must be a positive integer.");    
        }
        else if ((this.balance - amount) < 0){
            throw new WithdrawException("Account "+getName()+" has not enough money.");
        }
        else {
            this.balance -= amount;
            System.out.println(amount+" baht is withdrawn from "+this.name+".");
        }
    }
    public void setName(String name){
        this.name = name;
    }
    public String getName(){
        return this.name;
    }
    public void setBalance(double balance){
        this.balance = balance;
    }
    public double getBalance(){
        return this.balance;
    }
    public void showAccount(){
        System.out.println(this.name+" account has "+this.balance+" baht.");
    }
}
