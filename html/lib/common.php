<?php
function get_conn(){
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=news_sample;port=3306;charset=utf8;","root","");
		return $pdo;
	}catch(PDOException $e){
		echo $e->getMessage();
	}
}


?>