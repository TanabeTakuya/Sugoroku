<?php
    require_once('common.php');
    $name = $_GET['name'];
    $pw = $_GET['pw'];
    $data = getDB1('select name, from userdata where name=?', [$name]);

    if( $data['name'] == $name ){
        echo "既に使われている名前です。";
        $credata = "insert into userdata(name, pw) values(:name, :pw)";
        $credata->bindParam(':name', $name);
		$credata->bindParam(':pw', $pw);
    }
    else{
        echo "create";
    }
