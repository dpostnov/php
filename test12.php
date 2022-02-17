<?php
#Массив цветов радуги
    $colors = array('red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet');

    foreach ($colors as $value){
	echo "Цвет равен ".$value."\n";
    }
    foreach ($colors as $key => $value){
	echo "Цвет #".$key." равен ".$value."\n";
    }
?>
