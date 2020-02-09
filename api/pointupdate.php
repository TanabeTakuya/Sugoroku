<?php
require_once('../common.php');

$current = $_GET['current_point'];

if($_GET['playernum'] == 1){
    $in = "update playdata set player1_current_point=? where roomid=1";
    updatePlaydata($in, [$current]);
}

else {
    $in = "update playdata set player2_current_point=? where roomid=1";
    updatePlaydata($in, [$current]);
}