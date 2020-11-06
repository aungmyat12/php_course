<?php

interface Animal {
    public function attack();
    public function makeSong();
}

class Cat implements Animal {

    public function attack()
    {
        echo "scratch";
    }

    public function makeSong()
    {
        echo "meow";
    }
}

$c = new Cat();
$c->attack();
