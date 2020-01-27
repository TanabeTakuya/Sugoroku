<?php
    require_once('common.php');
    $name = isset($_GET['name'])? $_GET['name']:null;
    $pw = isset($_GET['pw'])? $_GET['pw']:null;
    
    $data = getDB1('select name, pw from userdata where name=?', [$name]);

    if( $data['pw'] == $pw){
        echo "login";
        header("location: play/room.html");
    }
    else{
	    echo "名前かパスワードが間違っています。";
    }



