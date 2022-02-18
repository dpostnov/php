<?php
    $arr2 = array(2,3);
    $arr3 = array(2,3,6);
    function func6(...$arr) {
	if (func_num_args()>2){
	    echo "Количество аргументов больше 2\n";
	} else {
	    $sum = func_get_arg(0) + func_get_arg(1);
	    echo "Сумма аргументов ".$sum."\n";
	}
    }
    func6(...$arr2);
?>
