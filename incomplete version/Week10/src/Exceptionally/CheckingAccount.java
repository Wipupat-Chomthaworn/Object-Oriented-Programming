package Exceptionally;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
/**
 *
 * @author Owen
 */
public class CheckingAccount extends Account {

    private double credit;

    public CheckingAccount() {
        super(0, "");
    }

    public CheckingAccount(double balance, String name, double credit) {
        super(balance, name);
        setBalance(balance);
        setName(name);
        setCredit(credit);
    }

    public void setCredit(double credit) {
        if (credit > 0) {
            this.credit = credit;
        } else {
            System.out.println("Input number must be a positive integer.");
        }
    }

    public double getCredit() {
        return credit;
    }

    @Override
    public void withdraw(double amount) throws WithdrawException {
        if (amount > 0 && (balance - amount) >= 0) {
            balance -= amount;
            System.out.println(amount + " baht is withdrawn from " + name + " and your credit balance is " + credit + ".");
        } else if (amount > 0 && (balance - amount) + credit >= 0) {
            setCredit(getCredit() + (balance - amount));
            setBalance(0);
            System.out.println(amount + " baht is withdrawn from " + name + " and your credit balance is " + credit + ".");
        } else {
            throw new WithdrawException("Account " + getName() + " has not enough money.");
        }
    }

    public void withdraw(String a) throws WithdrawException {
        withdraw(Double.parseDouble(a));
    }

    @Override
    public String toString() {
        return ("The " + getName() + " account has " + balance + " baht and " + credit + " credits.");
    }
}
