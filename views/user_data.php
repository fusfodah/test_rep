<?php

session_start();

include_once ("./api/get_data_user.php");

?>

<div class="center">
    <div class="data">
    <p>Ваш логин: <?php echo $login; ?></p><p class="change"><a href="../views/ref_user.php?chenge=1">Изменить</a></p>
    <p>Ваше имя: <?php echo $name; ?></p><p class="change"><a href="../views/ref_user.php?chenge=2">Изменить</a></p>
    <p>Ваша фамилия: <?php echo $fam; ?></p><p class="change"><a href="../views/ref_user.php?chenge=3">Изменить</a></p>
</div>
<button class="bor" onclick="let del_b = confirm('Уверен? Удалится навсегда!'); del(del_b)">Удалить аккаунт</button><br><br>
<form action="php/logout.php"><button type="submit">Выход</button></form>
<?php echo "<p class='error'>".$_SESSION['error_msg']."</p>"; unset($_SESSION['error_msg']); ?>