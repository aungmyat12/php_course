<?php
//class Test {
//    // public
//    // protected
//    // private
//    public $name = 'amo';
//    public function showName() {
//        echo $this->name;
//    }
//
//}
//$test = new Test();
//$test->showName();
//class Person {
//    public function showName() {
//        $test = new Test();
//        $test->showName();
//    }
//}
class Test
{
    protected $age = 24;
//    public function showAge()
//    {
//        echo $this->age;
//    }
    private function showAge() {
        echo 'this is show age private method.';
    }
    public function some() {
        $this->showAge();
    }
}
$db = new Test();
echo $db->some();

class Person extends Test
{
    public function showAge()
    {
        echo $this->age;
    }
}
$p = new Person();
$p->showAge();



