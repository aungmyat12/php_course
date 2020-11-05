<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>
            <input type="text" name="name">
        </p>
        <p>
            <input type="text" name="age">
        </p>
        <p>
            <input type="text" name="location">
        </p>
        <p>
            <input type="submit" name="submit" value="Create">
        </p>
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $sql = "INSERT INTO users (name,age,location) VALUES (?,?,?)";
    $pdo = new PDO("mysql:host=localhost;dbname=php_course","root","");
    $res = $pdo->prepare($sql);
    $res->execute([$name,$age,$location]);
    echo "success";
}





















