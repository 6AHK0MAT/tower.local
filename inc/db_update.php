<?php
// Хост (обычно localhost)
$db_host = "localhost";
// Имя базы данных
$db_name = "mega";
// Логин для подключения к базе данных
$db_user = "mega";
// Пароль для подключения к базе данных
$db_pass = "megaforsunka";


$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("Невозможно подключиться к БД");
