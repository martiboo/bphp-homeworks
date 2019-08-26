<?php
readfile("form.html");

$codeWord = "nd82jaake";

$login = $_POST["login"];
$password = $_POST["password"];
$email = $_POST["email"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$middleName = $_POST["middleName"];
$code = $_POST["code"];

$specialSymbols = preg_match("/\W+/", $login);
if ($specialSymbols == 1) {
    echo "Поле логин не должно содержать символы @/*?,;:. ";
}

if (strlen($password) < 8) {
    echo "Длина пароля должна быть минимум 8 символов";
}

$emailSymbol = preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email);
if ($emailSymbol == 0) {
    echo "Адрес электронной почты должен быть в формате address@domain.name";
}

if (strlen($firstName) <= 0 || strlen($lastName) <= 0 || strlen($middleName) <= 0) {
    echo "Поля Фамилия, Имя, Отчество обязательны к заполнению";
}

$codeWordCheck = strcmp($codeWord, $code);
if ($codeWordCheck != 0) {
    echo "Неверное кодовое слово";
}

























