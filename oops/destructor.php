<?php
class Example
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }
    function __destruct()
    {
        echo "Destructing object '$this->_name'." . PHP_EOL;
    }
}

$objectOne = new Example('Object one');
$objectTwo = new Example('Object two');
unset($objectOne);

echo 'Script still running.' . PHP_EOL;
