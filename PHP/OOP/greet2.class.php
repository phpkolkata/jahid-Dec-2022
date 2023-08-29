<?php
require "greet.class.php";

// inheritance
// child class inherited by parant class (greet)
class greet2 extends greet
{
    public $name = "raj";
    public function bye()
    {
        echo "bye - $this->name<br>";
    }

    public function hello()
    {
        echo "new hello, age is " . parent::$age;
    }
    public function greetAll()
    {
        $this->hi(); // parant method
        $this->hello(); // parant method
        $this->bye(); // self method

    }
}
