<?php
class display
{

    public $name;
    public static $age = 20;

    // constructor method - calls whenever you create an object
    public function __construct($nm)
    {
        // echo "start";
        $this->name = $nm;
    }

    public function hi()
    {
        echo "hi " . $this->name;
    }

    // destructor method
    public function __destruct()
    {
        // echo "end";
        $this->name = null;
    }

}
