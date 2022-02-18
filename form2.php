<?php
    if ( !isset($_POST["name"])||!isset($_POST["age"])||!isset($_POST["mesege"]) ){
	$n = "Ошибка ввода параметров";
	$s = "";
    } else {
	$n = "Привет, ".strip_tags($_POST["name"]).", ".strip_tags($_POST["age"])." лет";
	$s = "Твое сообщение: ".strip_tags($_POST["mesege"]);
    }
?>
<html>
    <head>
	<title>Формы 2</title>
    </head>
    <body>
	<h1>
	    <?php
		echo $n
	    ?>
	</h1>
	<h1>
	    <?php
		echo $s
	    ?>
	</h1>
	<form name="form2" action="" method="post">
	    <p>Введите имя пользователя:</p>
	    <input name="name" type="text" size="20">
	    <p>Введите возраст пользователя:</p>
	    <input name="age" type="text" size="10">
	    <p>Введите сообщение пользователя:</p>
	    <textarea name="mesege" rows="10" cols="45"></textarea>
	    <p><input type="submit" value="Отправить"></p>
	</form>
    </body>
</html>
