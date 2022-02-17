<?php
#Массив цветов радуги
    $colors = array('red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet');
#Зеленый цвет есть в массиве
    $selector = 'green';
    switch ($selector) {
	case $colors[0]:
	case $colors[1]:
	case $colors[2]:
	case $colors[3]:
	case $colors[4]:
	case $colors[5]:
	case $colors[6]:
	    echo "Элемент есть в массиве\n";
	    break;
	default:
	    echo "Элемента нет в массиве\n";
    }

#Фисташкового цвета нет в массиве
    $selector = 'pistachio';
    switch ($selector) {
	case $colors[0]:
	case $colors[1]:
	case $colors[2]:
	case $colors[3]:
	case $colors[4]:
	case $colors[5]:
	case $colors[6]:
	    echo "Элемент есть в массиве\n";
	    break;
	default:
	    echo "Элемента нет в массиве\n";
    }

?>
