<?php
class Database {
    const HOST = "afsd";

}

class Test {
    public function showHost() {
        echo Database::HOST;
    }
}

$t = new Test();
$t->showHost();
