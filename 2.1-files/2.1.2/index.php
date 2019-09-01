<?php
readfile('form.html');

$uploaddir = 'uploads';
$uploadfile = $_FILES['userfile']['name'];


if (exif_imagetype($_FILES['userfile']['tmp_name']) != IMAGETYPE_JPEG) {
    echo 'Картинка не jpeg';
}
else {
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], "$uploaddir/$uploadfile")) {
        echo "Файл корректен и был успешно загружен.\n";
    } else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
}

$images = array_diff(scandir($uploaddir), array('..', '.'));
print_r($images);

for($i=0; $i < count($images);$i++){
    $image="$uploaddir/$images[$i]";
        echo '<img src="'.$image.'"width="150">';
    }
