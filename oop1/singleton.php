<?php

class DB {
    private static $instance,$res;
    public function __construct()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=php_course","root","");
        self::$instance = $pdo;
        echo "connected";
    }

    public function getInstance() {
        if(!self::$instance) {
            new DB();
        }
        return $this;
    }
    public function getAll($table) {
        $sql = "SELECT * FROM $table";
        self::$res = self::$instance->prepare($sql);
        self::$res->execute();
        return self::$res->fetchAll(PDO::FETCH_OBJ);
    }
}

$db = new DB();
$users = $db->getInstance()->getAll('users');
//$db->getInstance()->getOne();
print_r($users);













































































