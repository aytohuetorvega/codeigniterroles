<!doctype html>
<html lang="es">
<meta charset="utf-8">
<title>Datos conexion</title>
<h1>It works!</h1>
<?php
	echo '<h2>'.$_SERVER["SERVER_NAME"].'</h2>';
	//Recover data from environment variables
	$dbname=$_ENV['MYSQL_DATABASE'];
echo $dbname;
	$dbuser=$_ENV['MYSQL_USER'];
echo $dbuser;
	$_ENV['MYSQL_PASSWORD'];
echo $dbpass;
	 $dbhost='db';
echo $dbhost;
	 $dsn="mysql:host=$dbhost;dbname=$dbname";
echo $dsn;
	try {
		$db = new PDO ($dsn, $dbuser, $dbpass);
		echo '<p>Database connection established</p>';
	} catch (PDOException $e) {
		echo '<p>Database connection error: '.$e->getMessage().'</p>';
	}
	phpinfo();
?>
