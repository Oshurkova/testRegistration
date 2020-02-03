Название файла  | Содержание файла
----------------|----------------------
checklogin.php  | Проверка логина и пароля при входе в систему
delete.php      | Открытия файла при выполнении удаления пользователя
home.php        | Отображение всех пользователей системы после входа
index.php       | Стартовая страница
language.php    | Установка языка
login.php       | Авторизация пользователя в системе
register.php    | Страница регистрации
setLanguage.php | Языковой интерфейс
styles.css      | Стили


=====================

Для работы в системе, необходимо переходить к файлу index.php, например:
http://localhost/testTask/index.php

=====================

При регистрации пароль должен сожержать более 3 и менее 15 символов и при этом не включать такие символы, как:
/^[a-zA-Z0-9\!@#\/\$%\^&\*\(\)\[\]\{\}\-=_\+\.,'\"<>\?]+$/

=====================

В системных настройках ОС путь к фалу должен быть указан с использованием символа "\", так как в базе данных сохраняется путь к файлу, загружаемогу в папку images.

=====================

Подключение к БД:
- название localhost:3308"
- пользователь root
- пароль root
- база данных first_db
- таблица users



