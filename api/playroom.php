<?php
	require_once('../common.php');
	
	$data = getDB1('select player1_current_point, player2_current_point from playdata where roomid=1');

	$param = [
		'player1_current' => $data['player1_current_point'],
		'player2_current' => $data['player2_current_point'],
	];

	echo json_encode($param);
?>