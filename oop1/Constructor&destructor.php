<?php

class DB {
    public function __construct()
    {
        echo "I am constructor";
    }
    public function show() {
        echo "I am show method";
    }
    public function __destruct()
    {
        echo "I am destructor";
    }
}
$db = new DB();
$db->show();
