<?php
require_once('../common.php');

$end = 'delete from playdata where roomid=1';
updatePlaydata($end);

$reset = 'delete from room where roomid=1';
updatePlaydata($reset);