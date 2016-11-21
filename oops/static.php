<?php

class Dog
{
  public $hair;
    public static $hungry = 'hell yeah.';

    public static function eat($food)
    {
        if ($food == 'cookie') {
            echo 'parent class called';
            self::$hungry = 'not so much.';
        } else {
            echo 'barf, I only like cookies!';
        }
    }
}

class BullDog extends Dog
{

    public static function eat($food)
    {
        if ($food == 'cookie') {
            parent::eat('cookie');
            self::$hungry = 'Yeah i like it.';
        } else {
            echo 'barf, I only like cookies!';
        }
    }
}
// echo Dog::$hungry;
// Dog::eat('cookie');
// var_dump(Dog);
// echo Dog::$hungry;
BullDog::eat('cookie');
echo BullDog::$hungry;
