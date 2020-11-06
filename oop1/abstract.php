<?php

abstract class Test {
    public function showName() {
        echo "hi";
    }
}

class Building extends Test {
    public function getName()
    {
        $this->showName();
    }
}
$b = new Building();
$b->getName();
