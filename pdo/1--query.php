<?php
$pdo = new PDO("mysql:host=localhost;dbname=php_course","root","");
$sql = "SELECT * FROM users";

//$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//foreach ($data as $d) {
//    echo $d['name'] . "<br>";
//}
//$pdo = new PDO("mysql:host=localhost;dbname=php_course","root","");
$sql = "SELECT * FROM articles";
$data = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $d) {
    echo $d['content'] . "<br>";
}







