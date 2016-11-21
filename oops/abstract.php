<?php
abstract class Animal
{
    public $hungry = 'hell yeah.';

    abstract public function eat($food);
    public function bark($sound)
    {
        echo 'Bhow Bhwo ' . $sound . ' Bhow Bhow';
    }
}

abstract class Dog extends Animal
{
    // function eat($food)
    // {
    //     if ($food == 'cookie') {
    //         $this->hungry = 'not so much.';
    //     } else {
    //         echo 'barf, I only like cookies!';
    //     }
    // }
    public function run() {
        echo 'run run urn';
    }
}

class BigDog extends Dog {
    public function poop() {
        echo 'poop';
    }
    public function eat($food) {
        echo $food;
    }
}
// $dog = new Animal();
$dog = new BigDog();
var_dump($dog);
echo $dog->hungry; //echoes "hell yeah."
// echo $dog->bark('yeah');
$dog->eat('peanut'); //echoes "barf, I only like cookies!"
$dog->bark('god ');
