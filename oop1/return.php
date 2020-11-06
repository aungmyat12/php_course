<?php

class Person {
    private $name,$age;
    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    public function setAge() {
        $this->age = 25;
        return $this;
    }
    public function getDetail () {
        echo $this->name . $this->age;
    }
}
$p = new Person();
$p->setName('aung')->setAge()->getDetail();

