<?php
#Массив цветов радуги
    $numbers = array(10, 33, 12, 45, 4);

    foreach ($numbers as $key => $value){
	$numbers[$key] = $value*2;
    }
    foreach ($numbers as $value){
	echo "Число равно ".$value."\n";
    }

?>
