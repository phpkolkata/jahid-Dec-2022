<?php

// parant class
class greet
{
    // visiblity: public, protected, private
    private $name = "abc";
    public static $age = 20;

    public function hi()
    {
        // $this -> this is a special keyword, represent current class object
        echo "hi - " . $this->name . "your age is " . self::$age . "<br>";
    }

    public function hello()
    {
        // $this->hi();
        echo "hello - $this->name<br>";
    }
}

// whenerve we create an object of a class
// $obj =  public $name;
//     public function hi()
//     {
//         // $this -> this is a special keyword, represent current class object
//         echo "hi - $this->name<br>";
//     }

//     public function hello()
//     {
//         // $this->hi();
//         echo "hello - $this->name<br>";
//     }
