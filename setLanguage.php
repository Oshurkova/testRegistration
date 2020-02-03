<?php
    if (!isset($_SESSION["lang"])) {
        $_SESSION["lang"] = "ru";
        
    }
    if ($_SESSION["lang"]=="ru") {
        $title = "Тест";
        $login = "Войти";
        $regestration = "Зарегестрироваться"; 
        $information = "Информация о пользователях";
        $hello = "Здравствуйте";
        $logout = "Выйти";
        $id = "Индентификатор";
        $name = "Имя";
        $date = "Дата";
        $time = "Время";
        $delete = "Удалить"; 
        $regestrationpage = "Страница регистрации";
        $enterusername = "Введите логин";
        $enterpassword = "Введите пароль";
        $create = "Создать";
        $back = "Назад";
        $areyousure = "Вы уверены, что хотите удалить пользователя";
        $errorsql = "Не удалось подключиться к MySQL: (";
        $createsuccess = "Успешно создано";
        $error = "Ошибка";
        $loginpage = "Страница входа";
        $incorrectusername = "Неправильный логин";
        $incorrectpassword = "Неправильный пароль";
        $users = "Пользователи";
        $allincorrect = "Неверные данные";
        $filelabel = "Выберите файл";
        $photo = "Фотография";
    }
    else {
        $title = "Тест";
        $login = "Log in";
        $regestration = "Regestration"; 
        $information = "Information";
        $hello = "Hello";
        $logout = "Exit";
        $id = "ID";
        $name = "Name";
        $date = "Date";
        $time = "Time";
        $delete = "Delete";
        $regestrationpage = "Registration page";
        $enterusername = "Enter login";
        $enterpassword = "Enter password";
        $create = "Create";
        $back = "Back";
        $areyousure = "Are you sure you want to delete this user?";
        $errorsql = "No connection: (";
        $createsuccess = "Created successfully";
        $error = "Error";
        $loginpage = "Login page";
        $incorrectusername = "Incorrect login";
        $incorrectpassword = "Incorrect password";
        $users = "Users";
        $allincorrect = "Incorrect information";
        $filelabel = "Choose file to upload";
        $photo = "Photo";
    }
?>