<?php

class Database {
    public $host = "localhost";
    public function connection() {
        return $this->host;
    }

    public function all($table= "some") {
        return $table;
    }
}
class User extends Database {
    public function details() {
        echo $this->all("user");
    }
}


//$db = new Database();
//echo $db->connection();
//echo $db->all();
$user = new User();
$user->details();
