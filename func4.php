<?php
    function func4(...$arr) {
	foreach ($arr as $a) {
	    echo "Аргумент функции ".$a."\n";
	}
    }
    func4("qwerty", "password", 40000);
?>
