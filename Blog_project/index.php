<?php
    require_once "core/autoload.php";
    $user = DB::table("users")->get();
    print_r($user);
?>
