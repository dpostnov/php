<?php
    declare(strict_types=1);
    $count_apples = "my_func";
    function my_func($a, $b) {
	return $a*$b;
    }
    $sum = $count_apples(23,7);
    echo "Общая масса яблок ".$sum."\n";
?>
