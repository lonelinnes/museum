<?php
// Правильные учетные данные
$valid_username = "admin";
$valid_password = "school18musem25";

// Получаем данные из формы
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Проверяем учетные данные
if ($username === $valid_username && $password === $valid_password) {
    // Успешный вход - перенаправляем на страницу admin.html
    header("Location: admin.html");
    exit();
} else {
    // Неверные данные - возвращаем с ошибкой
    header("Location: login.html?error=1");
    exit();
}
?>