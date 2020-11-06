<?php

class Test {
    //constructor
    public function __construct()
    {
        echo "constructor";
    }
    public function show()
    {
        echo "show method";
    }
    //destruct
    public function __destruct()
    {
        echo "destruct";
    }
}
$test = new Test();

$test->show();










