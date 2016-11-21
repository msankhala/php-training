<?php
// class Rabbit
// {

// }

// class Feeder
// {
//     public function feedRabbit(Rabbit $rabbit, $food)
//     {
//         $rabbit->eat($food);
//     }
// }
// $dog = new Dog();
// $feeder = new Feeder();
// $feeder->feedRabbit($dog, 'broccoli');

class Animal
{

}
class Feeder
{
    public function feedAnimal(Animal $animal, $food)
    {
        $animal->eat($food);
    }
}
class Dog extends Animal
{
    public function eat($food)
    {
        if ($food == 'cookie') {
            $this->hungry = 'not so much.';
        } else {
            echo 'barf, I only like cookies!';
        }
    }
}
$dog = new Dog();
$feeder = new Feeder();
$feeder->feedAnimal($dog, 'broccoli');
