<div class="center">
    <form action="api/reg.php" method="POST">
    <input type="text" name="login" placeholder="Логин">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="fam" placeholder="Фамилия">
    <input type="password" name="pass" placeholder="Пароль">
    <button type="submit">Регистрация</button>
    </form>
    <button class="bor" onclick="show('login')">Форма входа</button>
    <?php echo "<p class='error'>".$_SESSION['error_msg']."</p>"; unset($_SESSION['error_msg']); ?>
</div>