<?php
#Массив цветов радуги
    $colors = array('red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet');

    for($index = 0; $index < count ($colors); $index++){
	echo "Элемент массива #".$index." равен ".$colors[$index]."\n";
    }
?>
