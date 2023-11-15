<?php

session_start();



$data_user = json_decode($_SESSION['data_user']); //данные с сервера

$login = $data_user -> login;

$pass = $data_user -> pass;

$name = $data_user -> name;

$fam = $data_user -> fam;

?>