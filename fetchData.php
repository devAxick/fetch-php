<?php
$id = $_POST['id'];
$db = new PDO('mysql:host=localhost;dbname=first', 'root', '');
$db->exec('SET NAMES UTF8');
$query = $db->prepare("SELECT * FROM myparams");
$query->execute();

$apps = $query->fetchAll(PDO::FETCH_ASSOC);


foreach ($apps as $app){
	$arr = array('id'=>$app['id'],'name'=>$app['name'],'age'=> $app['age'], 'gender'=> $app['gender']);
	$json = json_encode($arr);
	echo $json;
}
?>