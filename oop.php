<?php
class Myclass
{
    public function __construct()
    {
        echo "This is ", __CLASS__, " is initiated\n";
    }

    public function __destruct()
    {
        echo "This is destruct method\n";
    }

    public function sayHello()
    {
        echo "Hello from ", __CLASS__, "\n";
    }
}


$instance = new Myclass();
$instance->sayHello();


