<?php
class Animal
{
    public $hungry = 'hell yeah.';

    function eat($food)
    {
        $this->hungry = 'not so much.';
    }
}

class Dog extends Animal
{
    function eat($food)
    {
        if ($food == 'cookie') {
            $this->hungry = 'not so much.';
        } else {
            echo 'barf, I only like cookies!';
        }
    }
}
