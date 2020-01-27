<?php
    require_once('common.php');
    $name = isset($_GET['name'])? $_GET['name']:null;
    $pw = $_GET['pw'];

    
    $data = getDB1('select name from userdata where name=?', [$name]);

    if( $name == "あいうえお" ){
	    echo $name;
    }
    else{
	    echo "名前かパスワードが間違っています。";
    }



