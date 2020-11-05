<form method="post">
    <p>
        <input type="number" name="num1">
    </p>
    <p>
        <input type="number" name="num2">
    </p>
    <p>
        <select name="sign">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </p>
    <p>
        <button type="submit">Calculator</button>
    </p>
</form>

<?php

if(isset($_POST['num1'])) {
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $sign = $_POST['sign'];
    switch($sign) {
        case "+" :
            echo $num1 + $num2;
        break;
        case "-":
            echo $num1 - $num2;
        break;
        case "*":
            echo $num1 * $num2;
        break;
        case "/":
            echo $num1 / $num2;
        break;
    }
}