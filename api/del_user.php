<?php

session_start();

$data_for_del = ["login" => $login];

    $data_for_del = json_encode($data_for_del); //данные на сервер

    $data_user = json_decode($_SESSION['data_user']);

    $login = "del";
    
    $pass = "del";
    
    $name = "del";
    
    $fam = "del";

    $del = ["login" => $login, "pass" => $pass, "name" => $name, "fam" => $fam];

    $data_del = json_encode($del);

    $_SESSION['data_user'] = $data_del;

    unset($_SESSION['login']);

    $_SESSION['error_msg'] = "Пользователь удален";

    header('Location: /');

?>