<?php
header('Content-Type: text/plain');

session_start();
include('IdentifiantDB.php');

$data =(isset($_POST["data"]));

echo $data;
$db = new PDO("mysql:host=$hote; dbname=$nomdb; charset=utf8", $user, $password);
