<?php

	$dsn = 'mysql:dbname=db1541;host=localhost';
	$user = 'my1541';
	$pw = 'recdautv';
	
	$dbh = new PDO($dsn, $user, $pw);
	$sth = $dbh->prepare($sql);
	$sth->execute($param);
	
	return($sth->fetch(PDO::FETCH_ASSOC));
}

?>

