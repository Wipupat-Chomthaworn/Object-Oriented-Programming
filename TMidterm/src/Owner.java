/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Owen
 */
public class Owner {

    protected final String name;
    protected Animal animal;

    public Owner() {
        name = "";
        animal = null;

    }

    public Owner(String name) {
        this.name = name;
        animal = null;

    }

    public Owner(Animal animal) {
        name = "";
        this.animal = animal;

    }

    public Owner(String name, Animal animal) {
        this.name = name;
        this.animal = animal;
    }

    public String getName() {
        return name;

    }

    public void setAnimal(Animal animal) {
        this.animal = animal;
    }

    public Animal getAnimal() {
        return animal;
    }

    public void feedFood(Food f) {
//        animal.setPower(f.getPower());
        animal.eat(f);
    }

    @Override
    public String toString() {
        return "Owner : name = " + getName() + ", Animal : name = " + animal.getName() + ", power = " + animal.getPower() + ", age = " + animal.getAge();
    }

    public void protectOwnerFrom(Animal a) {
        if (a instanceof Dog) {
            ((Dog) a).kick(a);
        } 
        else if (a instanceof Pigeous pigeous) {
            pigeous.wingAttack(a);
        }

//class Simple1{  
// public static void main(String args[]){  
// Simple1 s=new Simple1();  
// System.out.println(s instanceof Simple1);//true  
// }  
//}  
    }

}
