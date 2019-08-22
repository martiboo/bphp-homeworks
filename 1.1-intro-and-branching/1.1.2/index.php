<?php
//  Ваш программный код, в котором определяются значения 
//  переменных для последующего задания текста и стилей

$time = date("H");
$date = date("N");

if ($time >= 6 && $time <= 10) {
    $message = "Доброе утро!";
    $image = "img/1.jpg";
} else if ($time >= 11 && $time <= 17) {
    $message = "Добрый день!";
    $image = "img/2.jpg";
} else if ($time >= 18 && $time <= 22) {
    $message = "Добрый вечер!";
    $image = "img/3.jpg";
} else if ($time >= 0 && $time <= 5 || $time >= 23) {
    $message = "Доброй ночи!";
    $image = "img/4.jpg";
}

if ($date == 1) {
    $weekday = "понедельник";
} else if ($date == 2) {
    $weekday = "вторник";
} else if ($date == 3) {
    $weekday = "среда";
} else if ($date == 4) {
    $weekday = "четверг";
} else if ($date == 5) {
    $weekday = "пятница";
} else if ($date == 6) {
    $weekday = "суббота";
} else if ($date == 7) {
    $weekday = "воскресенье";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <!-- подключение стилевого файла -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <!-- Ваша html-вёрстка, частично задаваемая с помощью PHP -->
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1><?= "$message Сегодня $weekday." ?></h1>

        </div>
    </div>

</body>
</html>