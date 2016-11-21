<?php
class Dog
{
        const NUMBER_OF_LEGS = '4';

    public function __construct()
    {
        echo 'I have '.self::NUMBER_OF_LEGS.' legs,
                and you can\'t take that away from me!';
    }
}
$dog = new Dog();
// Both $dog->NUMBER_OF_LEGS and $this->NUMBER_OF_LEGS would have PHP looking for a non-existent object property: $NUMBER_OF_LEGS
echo "\n" . Dog::NUMBER_OF_LEGS;
