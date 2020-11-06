<?php
//class Test {
//    public $name = "Amo";
//    public static function showName()
//    {
//        $t = new Test();
//        return $t->name;
//    }
//}
//echo Test::showName();
class Name {
    public $name = "amo";
    public static function showName()
    {
        $t = new Name();
        echo $t->name;
    }
}

Name::showName();
