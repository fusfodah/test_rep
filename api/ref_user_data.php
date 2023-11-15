<?php

session_start();

$chenge = $_GET["chenge"];

$data_user = json_decode($_SESSION['data_user']); //данные с сервера

$login = $data_user -> login;

$pass = $data_user -> pass;

$name = $data_user -> name;

$fam = $data_user -> fam;

if ($chenge == "1") {
    $login = $_POST["login"];
} else if ($chenge == "2") {
    $name = $_POST["name"];
} else if ($chenge == "3") {
    $fam = $_POST["fam"];
}
    
$ref = ["login" => $login, "pass" => $pass, "name" => $name, "fam" => $fam];

$data_ref = json_encode($ref); //данные на сервер

$_SESSION['data_user'] = $data_ref;

$_SESSION['error_msg'] = "Данные заменены";

header('Location: /');

?>