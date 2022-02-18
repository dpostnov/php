<html>
    <head>
	<title>Формы 3</title>
    </head>
    <body>
	<?php
	    if ( !isset($_POST["age"]) ){
		echo "
	<form name='form3' action='' method='post'>
	    <p>Введите возраст пользователя:</p>
	    <input name='age' type='text' size='10'>
	    <p><input type='submit' value='Отправить'></p>
	</form>";
	    } else {
		echo "<h1>Ваш возраст: ".$_POST["age"]."</h1>";
	    }
	?>
    </body>
</html>
