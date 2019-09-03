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
    $rowIndex = $row - 1;
    $placeIndex = $place - 1;
    if ($rowIndex >= count($map) || $placeIndex >= count($map[$rowIndex])) {
        return false;
    }
    if ($map[$rowIndex][$placeIndex] == 'FALSE') {
        $map[$rowIndex][$placeIndex] = 'TRUE';
        return true;
    }
    return false;
}


$chairs = 50;
$map = generate(5, 8, $chairs);
$requiredRow = 3;
$requiredPlace = 5;

$reserve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reserve);

$reserve = reserve($map, $requiredRow, $requiredPlace);
logReserve($requiredRow, $requiredPlace, $reserve);


function logReserve($row, $place, $result){
    if ($result) {
        echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
    } else {
        echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
    }
}
