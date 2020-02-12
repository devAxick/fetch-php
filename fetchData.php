<?php
//$id = $_POST['id'];
//$db = new PDO('mysql:host=localhost;dbname=first', 'root', '');
//$db->exec('SET NAMES UTF8');
//$query = $db->prepare("SELECT * FROM myparams");
//$query->execute();
//
//$apps = $query->fetchAll(PDO::FETCH_ASSOC);
//
//
//foreach ($apps as $app){
//	$arr = array('id'=>$app['id'],'name'=>$app['name'],'age'=> $app['age'], 'gender'=> $app['gender']);
//	$json = json_encode($arr);
//	echo $json;
//}


	$mysqli = new mysqli( "localhost", "root", "", "first" );
	$mysqli->set_charset('utf8');

//	$result = $mysqli->query("SELECT * FROM myparams WHERE id = '1'");
//	if($result->num_rows > 0){
//		while($row = $result->fetch_assoc()){
//			echo $row["name"];
//		}
//	}


	$query = "SELECT name FROM myparams WHERE id=?";
	$statement = $mysqli->prepare($query);

	$s = '1';

	$statement->bind_param('i', $s);

	$statement->execute();
	$statement->bind_result($name);

	while ($statement->fetch()){
		echo $name;
	}

?>