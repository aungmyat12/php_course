<?php

$pdo = new PDO("mysql:host=localhost;dbname=php_course","root","");
$user_id = $_GET['user_id'];
$sql = "SELECT * FROM users WHERE id=?";
$res = $pdo->prepare($sql);
$res->execute([$user_id]);
$data = $res->fetch(PDO::FETCH_ASSOC);
if($data) {
    echo $data['name'];
} else {
    echo "No record found";
}
