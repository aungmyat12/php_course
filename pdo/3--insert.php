<?php

$pdo = new PDO("mysql:host=localhost;dbname=php_course","root","");
$sql = "INSERT INTO users (age,name,location) VALUES (24,'User One','Yangon')";
$res = $pdo->prepare($sql);
$res->execute();
echo 'succes';
