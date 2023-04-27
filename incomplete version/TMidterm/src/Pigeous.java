/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Owen
 */
public class Pigeous extends Bird {

    public Pigeous() {
//        setName("");
//        setAge(0);
//        setPower(150);
        super("", 0);

    }

    public Pigeous(String name, int age) {
//        setName(name);
//        setAge(age);
//        setPower(150);
        super(name, age);

    }

    @Override
    public void wingAttack(Animal a) {
        a.setPower(a.getPower() - 5);

    }

    public void wingAttack(Animal a, int times) {
        for (int i = 0; i < times; i++) {
            a.setPower(a.getPower() - 5);

        }

    }

    @Override
    public void eat(Food f) {
        setPower(f.getPower() + f.getPower());
    }

    @Override
    public void fly() {
        System.out.println(getName() + " fly fly ....");
    }
}
