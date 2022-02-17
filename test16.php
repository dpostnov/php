<?php
    for($a = 1; true; $a++){
	$b = $a * $a;
	if ($b > 70) goto endF;
	echo "Квадрат числа ".$a." равен ".$b."\n";
    }
    endF:
    echo "Квадрат числа превысил 70\n";
?>
