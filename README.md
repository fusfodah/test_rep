# test_rep
Тестовый репозиторий

Методы:
api/login.php - вход на сайт;
api/reg.php - регистрация;
api/get_user_data.php - вход на сайт;
api/ref_user_data.php - вход на сайт;
api/del_user.php - вход на сайт;

api/login.php - забирает данные из формы (логин и пароль) упаковывает в json для отправления на сервер;
api/reg.php - забирает данные из формы (логин, пароль, имя, фамилию) упаковывает в json для отправления на сервер;
api/get_user_data.php - получает json с данными пользователя присваивает данные из json переменным и выводит на страницу;
api/ref_user_data.php - забираеn данные из формы, получает данные с сервера. Заменяет данные измененные пользователем, упаковывает в json и отправляет на сервер для перезаписи.
api/del_user.php - упако вывает данные (логин) и отправялет на сервер для удаления всех записей.

Не реализовал серверную часть скриптов, но закольцевал данные внутри формы, что позволяет в рамках сессиии прогнать весь цикл внутри написанного.

Дописать серверную часть скриптов - 3-4 часов. Привязать к БД и протестировать - 2-3 часа.
