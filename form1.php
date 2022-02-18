<?php
    if ( ! isset( $_POST["name"] ) )
	$m = "Введите имя пользователя";
    elseif ( $_POST["name"] == "" )
	$m = "Имя пользователя пустое!";
    else
	$m = "Привет ".$_POST["name"];
?>
<html>
    <head>
	<title>Формы 1</title>
    </head>
    <body>
    <h1>
	<?php
	    echo $m
	?>
    </h1>
	<form name="form1" action="" method="post">
	    <p>Введите имя пользователя:</p>
	    <input name="name" type="text" size="20">
	</form>
    </body>
</html>
