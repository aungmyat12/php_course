<?php
require_once "inc/header.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM crud WHERE id=?";
    $res = $pdo->prepare($sql)->execute([$id]);
    header('location:DB.php?delete=success');
}
