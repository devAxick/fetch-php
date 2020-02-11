<?php
	echo $_POST['name'];
	$host = 'localhost';  // Хост, у нас все локально
	$user = 'root';    // Имя созданного вами пользователя
	$pass = ''; // Установленный вами пароль пользователю
	$db_name = 'first';   // Имя базы данных
	$mysqli = new mysqli($host, $user, $pass, $db_name); // Соединяемся с базой

	if ($mysqli){
		echo 'succ';
	}

	$db = new PDO('mysql:host=localhost;dbname=first;charset=utf8', 'root', '');
//	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//	$db->exec('SET NAMES UTF8');
	$query = $db->prepare("INSERT INTO myparams (name, age, gender) VALUES (:name, :age, :gender)");
	$query->execute(array('name'=>'Ivan', 'age'=>'19', 'gender'=>'male'));


	if($query){
		echo 'success';
	}

