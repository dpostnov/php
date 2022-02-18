<?php
    $sum = 0;
    $product = 1;
    function func5(&$a, &$b, ...$arr) {
	foreach ($arr as $el) {
	    $a = $a + $el;
	    $b = $b * $el;
	}
	return array($a, $b);
    }
    $result = func5($sum, $product, 2,3,4);
    echo "Значание первого элемента массива ".$result[0]."\n";
    echo "Значение второго элемента массива ".$result[1]."\n";
    echo "Значение переменной sum ".$sum."\n";
    echo "Значение переменной product ".$product."\n";
?>
