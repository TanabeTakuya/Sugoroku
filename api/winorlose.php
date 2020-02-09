<?php
require_once('../common.php');

$win_or_lose = $_GET['is_win'];

if($win_or_lose){
    $in = "update userdata set win=win+1 where id=?";
    updatePlaydata($in, [$_GET['user']]);
}

else {
    $in = "update userdata set lose=lose+1 where id=?";
    updatePlaydata($in, [$_GET['user']]);
}