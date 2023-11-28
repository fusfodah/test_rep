<?php
    if (!$_SESSION['login']) {
    echo "<div class='login'>";
    include_once ("views/login_form.php");
    echo "</div>";
    echo "<div class='reg'>";
    include_once ("views/reg_form.php");
    echo "</div>";
    } else {
    include_once ("views/user_data.php");
    }
?>

<!-- изменения в git -->