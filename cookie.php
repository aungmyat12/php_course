<?php
//session_start();

//$_SESSION['name'] = 'mtk';
//echo $_SESSION['name'];
//session_destroy();
//
//print_r($_SESSION);
//setcookie('name','mtk',time()+(60*60*24));
//echo $_COOKIE['name'];
//print_r($_SESSION);
//$_SESSION['name'] = "Aung Myat Oo";
//$name = '\n hello';
//echo 'hey!' . trim($name,'o');

//echo stripslashes($name);
//$email = "hello@gmail.com";
//echo htmlspecialchars($name);
//if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
//    echo "valid";
//} else {
//    echo 'no valid';
//}
//function redirect($path) {
//    header("location:{$path}");
//}
//redirect("http://youtube.com");

function login($user,$password) {
    $d_user = "mgmg";
    $d_password = "Password";
    if($user!==$d_user) {
        throw new Exception('Wrong UserName');
    }
}

try {
    login("adfda","adasfa");
} catch (Exception $e) {
    var_dump($e);
    echo $e->getLine();
}
