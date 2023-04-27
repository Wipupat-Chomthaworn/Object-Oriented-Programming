/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Owen
 */
public abstract class Animal {

    private String name;
    private int power;
    private int age;

    public Animal() {
        name = "";
        power = 0;
        age = 0;

    }

    public Animal(String name, int power, int age) {
        this.name = name;
        this.power = power;
        this.age = age;

    }

    public void setName(String name) {
        this.name = name;
    }

    public void setPower(int power) {
        this.power = power;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public String getName() {
        return name;
    }

    public int getPower() {
        return power;
    }

    public int getAge() {
        return age;
    }

    public boolean equals(Animal a) {
        return (name.equals(a.name) && age == a.age);

    }

    public String toSting() {
        return "Animal : name = " + name + ", power = " + power + ", age = " + age;

    }

    public abstract void eat(Food f);
}
