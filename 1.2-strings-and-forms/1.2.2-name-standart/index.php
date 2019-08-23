<?php
readfile("form.html");

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$middleName = $_POST["middleName"];

$fullName = mb_convert_case($firstName, MB_CASE_TITLE, "UTF-8") . " " .mb_convert_case($lastName, MB_CASE_TITLE, "UTF-8") . " " .mb_convert_case($middleName, MB_CASE_TITLE, "UTF-8");
echo $fullName;

$firstNameLetter = substr_replace($firstName, ' ', 2);
$lastNameLetter = substr_replace($lastName, ' ', 2);
$middleNameLetter = substr_replace($middleName, ' ', 2);

$fio = mb_convert_case($firstNameLetter, MB_CASE_TITLE, "UTF-8") .mb_convert_case($lastNameLetter, MB_CASE_TITLE, "UTF-8") .mb_convert_case($middleNameLetter, MB_CASE_TITLE, "UTF-8");
echo $fio;

$surnameAndInitials = mb_convert_case($lastName, MB_CASE_TITLE, "UTF-8") . " " .mb_convert_case($firstNameLetter, MB_CASE_TITLE, "UTF-8") .". " .mb_convert_case($middleNameLetter, MB_CASE_TITLE, "UTF-8") . ".";

echo $surnameAndInitials;

