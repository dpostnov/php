<?php
    $a = 0;
    while ($a < 5 ) {
	echo "Значение ".++$a."\n";
    };

    $a = 0;
    do {
	echo "Значение ".++$a."\n";
    } while ($a < 5 );

?>
