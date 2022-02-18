<?php
    $a = 2;
    $b = 3;
    $c = 4;
    echo "Произведение переменных равно  ".$a*$b*$c."\n";

    function func2(&$aa, &$bb, $cc) {
	$aa = $aa*$cc;
	$bb = $bb*$cc;
    }
    func2($a,$b,$c);
    echo "Произведение переменных равно  ".$a*$b*$c."\n";
?>
