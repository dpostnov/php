<html>
    <head>
	<title>Формы 4</title>
    </head>
    <body>
	<?php
	    $login = "vpostnov";
	    $pass = "123-qwe";
	    if ( !isset($_POST["login"]) && !isset($_POST["password"])){
		echo "
	<form name='form4' action='' method='post'>
	    <p>Введите логин и пароль:</p>
	    <input name='login' type='text' size='10'>
	    <input name='password' type='password' size='10'>
	    <p><input type='submit' value='Отправить'></p>
	</form>";
	    } elseif ( $_POST["login"] == $login && $_POST["password"] == $pass ) {
		echo "<h1>Доступ разрешен!</h1>";
	    } else {
		echo "<h1>Доступ запрещен!</h1>";
	    }
	?>
    </body>
</html>
