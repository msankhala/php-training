<?php
// class Dog extends Animal
// {
//     public $breed;

//     public function __construct($breed)
//     {
//         $this->breed = $breed;
//     }

//     public function eat($food)
//     {
//         if ($food == 'cookie') {
//             $this->hungry = 'not so much.';
//         } else {
//             echo 'barf, I only like cookies!';
//         }
//     }
// }

class Dog
{
    public $hungry = 'hell yeah.';
    public $hair;

    function __construct() {
        $this->hungry = 'i am very hungry';
        $this->hair = 'black hair';
    }

    public function eat($food)
    {
        $this->hungry = 'not so much.';
        echo ' i am called';
    }
}

$dog1 = new Dog();
$dog2 = new Dog();

var_dump($dog1);
var_dump($dog2);
$dog2->hair = 'white';
var_dump($dog2);
var_dump($dog1);
