<?php
$array = $fields = array(); $i = 0;
$handle = @fopen("data.csv", "r");
if ($handle) {
    while (($row = fgetcsv($handle, 4096,  ";")) !== false) {
        if (empty($fields)) {
            $fields = $row;
            continue;
        }
        foreach ($row as $k=>$value) {
            $array[$i][$fields[$k]] = $value;
        }
        $i++;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

$arrayJson = json_encode($array, JSON_UNESCAPED_UNICODE);

$file = "data.json";
file_put_contents($file, $arrayJson);
echo file_get_contents ("data.json");