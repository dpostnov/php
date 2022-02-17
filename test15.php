<?php
    for($a = 1; $a <= 10; $a++){
	if ($a == 5) continue;
	for($b = 1; $b <= 10; $b++){
	    echo $a."*".$b."=".$a*$b."  ";
	}
	echo "\n";
    }
?>
