<?php
require_once('../common.php');

$userid = $_GET['userid'];
$count1 = getDB1('select roomid from room where player1id=?', [$userid]);
$count2 = getDB1('select roomid from room where player2id=?', [$userid]);

foreach($count1 as $value){
    $end = 'delete from playdata where roomid=?';
    updatePlaydata($end, [$value]);

    $reset = 'delete from room where roomid=?';
    updatePlaydata($reset, [$value]);
}
foreach($count2 as $value){
    $end = 'delete from playdata where roomid=?';
    updatePlaydata($end, [$value]);

    $reset = 'delete from room where roomid=?';
    updatePlaydata($reset, [$value]);
}

header("location: ../room.php?id=".$userid);