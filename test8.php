<?php
#Массив цветов радуги
    $colors = array('red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet');

    $index = 0;
    $elements = count ($colors);
    while ($index < $elements) {
	echo "Элемент массива #".$index." равен ".$colors[$index]."\n";
	$index++;
    }

    $index = 0;
    $elements = count ($colors);
    do {
	echo "Элемент массива #".$index." равен ".$colors[$index]."\n";
	$index++;
    } while ($index < $elements);
?>
