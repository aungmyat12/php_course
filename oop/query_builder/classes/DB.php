<?php
class DB
{
    private static $dbh=null;
    private static $res,$data,$count,$sql;
    public function __construct()
    {
        self::$dbh = new PDO("mysql:host=localhost;dbname=php_course","root","");
//        echo "Connected";
    }
    public function query($params) {
        self::$res = self::$dbh->prepare(self::$sql);
        self::$res->execute($params);
        return $this;
    }
    public function get() {
        self::$data = self::$res->fetchAll(PDO::FETCH_OBJ);
        return self::$data;
    }
    public function getOne() {
//        $this->query(self::$sql);
        self::$data = self::$res->fetch(PDO::FETCH_OBJ);
        return self::$data;
    }
    public function count() {
        self::$count = self::$res->rowCount();
//        $this->query(self::$sql);
        return self::$count;
    }
    public static function table($table) {
        $sql = "SELECT * FROM $table";
        self::$sql = $sql;
        $db = new DB();
        $db->query(self::$sql);
        return $db;
    }
    public function orderBy($col,$value) {
        self::$sql .= " ORDER BY $col $value";
        $this->query();
        return $this;
    }
    public function where($col,$operator,$value='')
    {
        if(func_num_args()==2) {
            self::$sql .= " WHERE $col='$operator'";
        } else {
            self::$sql .= " WHERE $col $operator '$value'";
        }
        $this->query();
        return $this;
    }
    public function andWhere($col,$operator,$value='') {
        if(func_num_args()==2) {
            self::$sql .= " and $col='$operator'";
        } else {
            self::$sql .= " and $col $operator '$value'";
        }
        $this->query();
        return $this;
    }
    public function onWhere($col,$operator,$value='') {
        if(func_num_args()==2) {
            self::$sql .= " or $col='$operator'";
        } else {
            self::$sql .= " or $col $operator '$value'";
        }
        $this->query();
        return $this;
    }
    public static function create($table,$data) {
        $db = new DB();
        $str_col = implode(',',array_keys($data));
        $v = "";
        $x = 1;
        foreach ($data as $d) {
            $v .= "?";
            if($x < count($data)) {
                $v .= ",";
                $x++;
            }
        }
        $sql = "INSERT INTO $table ($str_col) VALUES ($v)";
        self::$sql = $sql;
        $values = array_values($data);
        $db->query($values);
        $id = self::$dbh->lastInsertId();
        return DB::table($table)->where('id',$id)->getOne();
    }
}
//$db = new DB();
//$users = $db->query("SELECT * FROM users")->get();
//$users = $db->query("SELECT * FROM users")->count();
//$user = DB::table('articles')->orderBy('content','ASC')->get();
//$user = DB::table('users')->where('name','like','%u%')->onWhere('location','Yangon')->get();
//$users = DB::table('users')->count();
//print_r($user);

//$user = DB::create('users',[
//    "name"=> "Banana",
//    "age" => 20,
//    "location" => "japan"
//]);
//print_r($user);
//if($user) {
//    echo "user inserted successfully";
//}
