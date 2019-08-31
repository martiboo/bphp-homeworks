<?php

function generate($rows, $placesPerRow, $availableCount)
{
    if ($rows * $placesPerRow > $availableCount) {
        return false;
    }
    $map = array();
    for ($i = 0; $i < $rows; $i++) {

        for ($j = 0; $j < $placesPerRow; $j++) {
            $map[$i][$j] = 'FALSE';
        }
    }
    return $map;
}

function reserve(& $map, $row, $place)
{
    if ($row >= count($map) || $place >= count($map[$row])) {
        return false;
    }
    if ($map[$row][$place] == 'FALSE') {
        $map[$row][$place] = 'TRUE';
        return true;
    }
    return false;
}


function reserveCompany(& $map, $requiredAmount)
{
    for ($i = 0; $i < count($map); $i++) {
        $countAvailable = 0;
        for ($j = 0; $j < count($map[$i]); $j++) {
            if ($map[$i][$j] == 'FALSE') {
                $countAvailable++;
            } else {
                $countAvailable = 0;
            }
            if ($requiredAmount == $countAvailable) {
                return [$i, $j - $requiredAmount + 1];
            }
        }
    }
    return "Подходящих мест нет";
}


$chairs = 50;
$map = generate(5, 8, $chairs);
$requiredRow = 3;
$requiredPlace = 5;

$reserve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reserve);

$reserve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reserve);


function logReserve($row, $place, $result)
{
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place" . PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась" . PHP_EOL;
    }
}

$requiredAmount = 2;
$newPlace = reserveCompany($map, $requiredAmount);
print_r($newPlace);
