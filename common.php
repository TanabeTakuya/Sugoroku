<?php
function getDB1($sql, $param=[]){
	$dsn = 'mysql:db1541=userdata;host=localhost';
	$user = 'my1541';
	$pw = 'recdautv';
	
	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);
	
	return($sth->fetch(PDO::FETCH_ASSOC));
}
function insertDB($sql, $param=[]){
	$dsn = 'mysql:dbname=userdata;host=localhost';
	$user = 'senpai';
	$pw = 'indocurry';
	
	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);
	}
?>

