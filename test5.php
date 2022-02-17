<?php
# Положительное число
    $a = 100;
    $b = 300;
    $d = $a/$b;
    switch (true) {
	case ($d > 0):
	    echo "Число d = ".$d."\n";
	    break;
	case ($d == 0):
	    echo "Число d равно 0\n";
	    break;
	case ($d < 0):
	    echo "Число d отрицательное\n";
	    break;
    }

# Отрицательное число
    $a = 0;
    $b = -400;
    $d = $a/$b;
    switch (true) {
	case ($d > 0):
	    echo "Число d = ".$d."\n";
	    break;
	case ($d == 0):
	    echo "Число d равно 0\n";
	    break;
	case ($d < 0):
	    echo "Число d отрицательное\n";
	    break;
    }

# Число 0
    $a = 10;
    $b = -300;
    $d = $a/$b;
    switch (true) {
	case ($d > 0):
	    echo "Число d = ".$d."\n";
	    break;
	case ($d == 0):
	    echo "Число d равно 0\n";
	    break;
	case ($d < 0):
	    echo "Число d отрицательное\n";
	    break;
    }
?>
