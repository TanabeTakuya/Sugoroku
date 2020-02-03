<?php
    require_once('common.php');
    $name = isset($_GET['name'])? $_GET['name']:null;
    $data = getDB1('select count(*) as num from room');
    $pl1data = getDB1('select name from userdata where name=?', [$name]);

    $pl1id = $pl1data['id'];

    if($data['num'] == 0){
        $creroom = "insert into room(roomid, player1id) values(1, ?)";
        insertroomDB($creroom, [$_GET['id']]);
        echo 'aa';
    }
    else{
        for($i = 1; $i <= $data['num']; $i++){
            $roomdata = 'select player2id from room where roomid='.$i;
            $a = getRoomDB($roomdata);            
            var_dump($a);
            
            if($a['player2id']==null){
                $up = "update room set player2id=".$_GET['id']." where roomid=".$i;
                $b = getRoomDB($up);
                //var_dump($b);
                echo $b['player2id'];
                //break;
           }
        }
    }
    $room = getRoomDB('select player2id from room');

    if($room['player2id'] != null){
        echo "A";
        $data = getDB1('select roomid, player1id, player2id from room where roomid=1');
        //シーン遷移
        header("location: play/gameplay.php?player1id="
        .$data['player1id']."player2id=".$data['player2id']);
    }
    
