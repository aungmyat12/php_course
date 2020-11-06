<?php
interface Animal {
    // public
    //abstract
    // don't use properties
    public function attack();
    public function makeSong();
}

class Cat implements Animal {
    public function attack()
    {
        echo "scratch";
    }
    public function makeSong() {
        echo 'meow';
    }
}
$c = new Cat();
$c->attack();
$c->makeSong();
