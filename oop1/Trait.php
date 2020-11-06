<?php

class Father {
    public function showFatherName() {
        echo "Aung Tun";
    }
}

trait Mother {
    public function showMotherName() {
        echo "Su Su";
    }
}

class Children extends Father {
    use Mother;
    public function showParents() {
        echo $this->showFatherName() . " " . $this->showMotherName();
    }
}
$c = new Children();
$c->showParents();
