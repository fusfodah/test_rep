<?php

$chenge = $_GET["chenge"];

if ($chenge == "1") {
    $msg = "Введи новый логин";
    $name_form = "login";
} else if ($chenge == "2") {
    $msg = "Введи новое имя:";
    $name_form = "name";
} else if ($chenge == "3") {
    $msg = "Введи новую фамилию";
    $name_form = "fam";
}

?>

<style>

.center {
    width: 300px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 30px;
    border-radius: 10px;
    border: 1px solid #000;
}

.center > form {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

input {
    border: 1px solid #000;
    padding: 10px;
}

button {
    border: 1px solid #000;
    padding: 10px;
    cursor: pointer;
}

</style>

<div class="center">
    <form action="../api/ref_user_data.php?chenge=<?php echo $chenge ?>" method="POST">
    <label><?php echo $msg; ?></label>
    <input type="text" name="<?php echo $name_form; ?>">
    <button type="submit">Заменить</button>
    </form>
</div>