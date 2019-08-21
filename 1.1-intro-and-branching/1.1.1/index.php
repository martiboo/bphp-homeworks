<?php
$variable = 3.14;
$type;
$description;

if (is_bool($variable)) {
    $type = "bool";
    $description = "Логическая переменная";
} else if (is_float($variable)) {
    $type = "float";
    $description = "Число с плавающей точкой";
} else if (is_int($variable)) {
    $type = "int";
    $description = "Целое число";
} else if (is_string($variable)) {
    $type = "string";
    $description = "Строка";
} else if (is_null($variable)) {
    $type = "null";
    $description = "Нулевой указатель";
} else if (is_Array($variable) || is_Object($variable) || is_Resource($variable)) {
    $type = "other";
    $description = "Другие типы";
};

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
<p><?= "$variable is $type" ?></p>
<p><?= $description ?></p>
</body>
</html>