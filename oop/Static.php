<?php
class Test {
    public static $name = 'amo';
    public static function showName() {
//        echo "This is static show name method.";
        return Test::$name;
    }
}
echo Test::showName();

//class Some {
//    public function __construct()
//    {
//        Test::showName();
//    }
//}
//$s = new Some();
