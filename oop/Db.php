<?php
//// instance
//// pro static
//class DB {
//    private static $instance;
//    public function __construct()
//    {
//
//        self::$instance = new PDO("mysql:host=localhost;dbname=php_course","root","");
//        echo "Connected";
//    }
//    public function getInstance() {
//        if(!self::$instance) {
//            new DB();
//        }
//        return $this;
//    }
//    public function getAll($table) {
//        $sql = "SELECT * FROM $table";
//        $res = self::$instance->prepare($sql);
//        $res->execute();
//        return $res->fetchAll(PDO::FETCH_OBJ);
//    }
//    public function getOne() {
//        $sql = "SELECT * FROM users WHERE id=1";
//        $res = self::$instance->prepare($sql);
//        $res->execute();
//        return $res->fetch(PDO::FETCH_OBJ);
//    }
//}
////$db = new DB();
////$user = $db->getInstance()->getAll('users');
////echo "<pre>";
////print_r($user);
//$db = new DB();
//$user = $db->getInstance()->getOne();
//print_r($user->name);
////$db->getInstance()->getOne();

class DB {
    public static $instance;
    public function __construct()
    {
        self::$instance = new PDO("mysql:host=localhost;dbname=php_course","root","");
    }
    public function getInstace() {
        if(!self::$instance) {
            new DB();
        } else {
            return $this;
        }
    }
    public function getAll($table) {
        $sql = "SELECT * FROM $table";
        $res = self::$instance->query($sql);
        $data = $res->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    public function getOne($table,$id) {
        $sql = "SELECT * FROM $table WHERE id=?";
        $res = self::$instance->prepare($sql);
        $res->execute([$id]);
        return $res->fetch(PDO::FETCH_OBJ);
    }
}
$db = new DB();
//$users = $db->getInstace()->getAll("users");
//print_r($users);
$user = $db->getInstace()->getOne('users',3);
print_r($user);






