<?php

// abstract
abstract class Building {
    public $name = "SweetHome";
    abstract function getWindows();
    public function __construct()
    {
        echo $this->name;
    }
}

class Home extends Building
{
    function getWindows()
    {
        echo $this->name;
        echo 12;
    }
}
$h = new Home();
$h->getWindows();
// method
// properties
// abstract method
// abstract class
