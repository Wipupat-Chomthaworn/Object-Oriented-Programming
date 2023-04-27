/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Owen
 */
public abstract class Bird extends Animal implements Flyable {

    public Bird(String name, int age) {
        setName(name);
        setAge(age);
        setPower(150);
//        super(name,150,age);


    }

    public abstract void wingAttack(Animal a);
}
