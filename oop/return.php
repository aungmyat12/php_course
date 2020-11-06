<?php
class Person {
    private $name,$age; // AMO
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAge ()
    {
        $this->age = 25;
        return $this;
    }
    public function getDetail() {
        echo $this->name . $this->age;
    }
}
$p = new Person();
$p->setName('Aung Aung')->setAge()->getDetail();
