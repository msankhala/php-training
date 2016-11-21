<?php
// Interfaces are different from abstract classes. For one, they’re not actually classes. They don’t define properties, and they don’t define any behaviour. The methods declared in an interface must be declared in classes that implement it.

// Because an interface in the more general sense is a definition of how an object interacts with other code, all methods must be declared public (see section on visibility in this chapter). Using abstract classes, an abstract method can have any visibility, but the extending classes must have their implementations use the same (or weaker) visibility. Implementing an interface adds the methods as abstract methods to the subject class, failure to implement it will result in an error like the following:
// Fatal error: Class SomeConcreteClass contains n abstract method(s) and must therefore be declared abstract or implement the remaining methodsYes, abstract classes can implement interfaces.

interface Animal
{
    public function eat($food);
}
interface Mammal
{
    public function giveBirth();
}
class Dog implements Animal, Mammal
{
    public $gender = 'male';

    function eat($food)
    {
        if ($food == 'cookie') {
            $this->hungry = 'not so much.';
        } else {
            echo 'barf, I only like cookies!';
        }
    }
    function giveBirth()
    {
        if ($this->gender == 'male') {
            echo 'I can\'t, I am a boy :P';
        } else {
            echo 'I\'m not even pregnant yet.';
        }
    }
}
$dog = new Dog();
$dog->eat('cookie');
var_dump($dog);
