<?php

class Test {
    public $name = "afsd";
    public static function showName() {
        $t = new Test();
        echo $t->name;
    }
}
Test::showName();
