<?php
  require_once('../common.php');
  $playerid = $_GET['myid'];
  $playernum = 1;
  if($_GET['player2id'] == $playerid) $playernum = 2;
  $playdata = "insert into playdata(roomid, player1_current_point, player2_current_point) values(1, 0, 0)";
  insertroomDB($playdata);
?>
<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
    <title>Play</title>
    <link rel="stylesheet" href="../css/playscene.css">
  </head>
  <body>
    <div id="current-state">GameStart</div>
    <div id="button">
      <input type="button" id="going-button" value="進む">
    </div>
    <div id=play-area>
    <div id="other">
      <div id="stage">
     	  <img src="../img/Stage.png">
        <img id="rival" src="../img/Player1.png">
      </div>
    </div>
    <div id = "player">
      <img id="player-img" src="../img/Player2.png">
    </div>
    </div>
    <script type="text/javascript">
      var player_num = '<?php echo $playernum; ?>';
      var user_id = '<?php echo $playerid; ?>';
    </script>
    <script type="text/javascript" src="../js/PlayScene.js"></script>
  </body>
</html>
