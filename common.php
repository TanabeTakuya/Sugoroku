<?php
function getDB1($sql, $param=[]){
	$dsn = 'mysql:dbname=db1319;host=localhost';
	$user = 'my1319';
	$pw = 'kvsnkwtb';
	
	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);
	
	return($sth->fetch(PDO::FETCH_ASSOC));
}
function insertDB($sql, $param=[]){
	$dsn = 'mysql:dbname=db1319;host=localhost';
	$user = 'my1319';
	$pw = 'kvsnkwtb';
	
	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);
	}
	function roomDB($sql, $param=[]){
		$dsn = 'mysql:dbname=db1319;host=localhost';
		$user = 'my1319';
		$pw = 'kvsnkwtb';
		
		$dbh = new PDO($dsn, $user, $pw);
		$sth = $dbh->prepare($sql);
		$sth->execute($param);
	}
	function insertroomDB($sql, $param=[]){
		$dsn = 'mysql:dbname=db1319;host=localhost';
		$user = 'my1319';
		$pw = 'kvsnkwtb';
		
		$dbh = new PDO($dsn, $user, $pw);
		$sth = $dbh->prepare($sql);
		$sth->execute($param);
	}
	function getRoomDB($sql, $param=[]){
		$dsn = 'mysql:dbname=db1319;host=localhost';
		$user = 'my1319';
		$pw = 'kvsnkwtb';
		
		$dbh = new PDO($dsn, $user, $pw);
		$sth = $dbh->prepare($sql);
		$sth->execute($param);
		return($sth->fetch(PDO::FETCH_ASSOC));
		}
?>

