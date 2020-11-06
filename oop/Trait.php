<?php
class Father {
    public function showFatherName() {
        echo "Aung Aung";
    }
}

trait Mother {
    public function showMotherName() {
        echo "Aye Aye";
    }
}

class Children extends Father
{
    use Mother;
    public function __construct()
    {
        $this->showFatherName();
        $this->showMotherName();
    }
}

$c = new Children();






