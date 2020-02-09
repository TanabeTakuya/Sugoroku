<?php
    require_once('common.php');
    $name = isset($_GET['name'])? $_GET['name']:null;
    $pw = isset($_GET['pw'])? $_GET['pw']:null;
    $data = getDB1('select max(id) as maxid from userdata');
    $i = $data['maxid'] + 1;
    $data = getDB1('select name from userdata where name=?', [$name]);

    if( $data['name'] == $name ){
        echo "既に使われている名前です。";
    }
    else{        
        $credata = "insert into userdata(id, name, pw, win, lose) values(?, ?, ?, 0, 0)";
        insertDB($credata, [$i,$name,$pw]);
        echo "OK";
        header("location: play/login.html");
    }
?>