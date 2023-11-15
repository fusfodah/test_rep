<div class="center">
    <form action="api/login.php" method="POST">
    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="pass" placeholder="Пароль">
    <button type="submit">Вход</button>
    </form>
    <button class="bor" onclick="show('reg')">Форма регистрации</button>
    <?php echo "<p class='error'>".$_SESSION['error_msg']."</p>"; unset($_SESSION['error_msg']); ?>
</div>