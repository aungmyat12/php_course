<?php

class Database {
    // properties
    public $host = "localhost";
    // methods
    public function connection() {
        return $this->host;
    }
    public function all($table='san')
    {
        return $table;
    }
}

class User extends Database {
    public function detail() {
        echo $this->connection();
    }
}

//$db = new Database();
//echo $db->all();
$user = new User();
$user->detail();











