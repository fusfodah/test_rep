<?php

session_start();

$login = $_POST["login"];

$pass = $_POST["pass"];

$name = $_POST["name"];

$fam = $_POST["fam"];

if (!$login or !$pass or !$name or !$fam) {
    $_SESSION['error_msg'] = "Вы не заполнили все поля";
} else {
    $reg = ["login" => $login, "pass" => $pass, "name" => $name, "fam" => $fam];

    $data_reg = json_encode($reg); //данные на сервер

    $_SESSION['data_user'] = $data_reg;

    $_SESSION['error_msg'] = "Вы зарегестрировались, войдите";
}

header('Location: /');

?>