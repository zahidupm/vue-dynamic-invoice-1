<?php
class Animal {
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo! Moo!";
    }
}

function main() {
    $dog = new Dog();
    $cat = new Cat();
    $cow = new Cow();

    $animals = [$dog, $cat, $cow];

    foreach ($animals as $animal) {
        echo get_class($animal) . ": " . $animal->makeSound() . "\n";
    }
}

main();
