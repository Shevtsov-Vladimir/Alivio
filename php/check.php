<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);


$mysql = new mysqli('', '', '', 'register-bd');
?>