<?php
class Teeth
{
    protected $_colour = 'white';

    public function stain()
    {
        $this->_colour = 'yellow';
    }
}

class Dog
{
    public $teeth;

    public function __construct()
    {
        $this->teeth = new Teeth();
    }
    public function eat($food)
    {
        if ($food == 'cookie') {
            $this->hungry = 'not so much.';
            //Attempt to turn teeth green:
            $this->teeth->_colour = 'green';
        } else {
            echo 'barf, I only like cookies!';
        }
    }
}
// $dog = new Dog();
// $dog->eat('cookie');
// var_dump($dog);

// class DoggyTeeth extends Teeth
// {
//     // public $teeth;

//     public function __construct()
//     {
//        // // $this->teeth = new Teeth();
//     }

//     public function eat($food)
//     {
//         if ($food == 'cookie') {
//             var_dump($this);
//             $this->hungry = 'not so much.';
//             //Attempt to turn teeth green:
//             // $this->teeth->_colour = 'green';
//             $this->_colour = 'green';
//             echo $this->_colour . "\n";
//             echo 'you accessed protected property of parent class';
//         } else {
//             echo 'barf, I only like cookies!';
//         }
//     }
// }
// $dog = new DoggyTeeth();
// $dog->eat('cookie');

class Hair
{
    private $_colour = 'black';

    public function colour()
    {
        $this->_colour = 'yellow';
    }

    public function getHairColour()
    {
        return $this->_colour;
    }
}

class HairyDoggy extends Hair
{

    public function __construct()
    {
    }
    public function eat($food)
    {
        if ($food == 'cookie') {
            $this->hungry = 'not so much.';

            $this->colour();
            // echo $this->getHairColour() . "\n";
            echo $this->_colour;
            echo 'you accessed private property of parent class';
        } else {
            echo 'barf, I only like cookies!';
        }
    }
}

$dog = new HairyDoggy();
$dog->eat('cookie');
