<?php

session_start();

$login = $_POST["login"];

$pass = $_POST["pass"];

if (!$login or !$pass) {
    $_SESSION['error_msg'] = "Вы не ввели логин или пароль";
} else {
    $data_login = ["login" => $login, "pass" => $pass];

    $data_log = json_encode($data_login); //данные на сервер

    $data_user = json_decode($_SESSION['data_user']);

    $login_data = $data_user -> login;

    $pass_data = $data_user -> pass;

    if ($login_data !== $login or $pass_data !== $pass) {
        $_SESSION['error_msg'] = "Неверные логин или пароль";
    } else {
        $_SESSION['login'] = $login;
    }
}

header('Location: /');

?>