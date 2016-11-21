<?php

class Dog
{
    public $hungry = 'hell yeah.';

    public function eat($food)
    {
        $this->hungry = 'not so much.';
        echo ' i am called';
    }
}

$dog = new Dog();
var_dump($dog);
$dog->eat('food');
