<?php
	$dsn = 'mysql:host=localhost; dbname=pinyin-member-db; charset=utf8';
	$user = 'st880221';
	$password = 'david620';
	$user = 'root';
	$password = 'speechlab723';

	try{
		$memdb = new PDO($dsn,$user,$password,array(PDO::ATTR_EMULATE_PREPARES => false));
	}
	catch(PDOException $e){
  		echo $e->getMessage();
	}	
?>