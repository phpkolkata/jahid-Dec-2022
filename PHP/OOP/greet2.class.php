<?php
require "greet.class.php";

// inheritance
class greet2 extends greet
{
    public function bye()
    {
        echo "bye - $this->name<br>";
    }
}
