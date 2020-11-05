<?php
session_start();
$_SESSION['like']++;

echo $_SESSION['like'] ?? '';
