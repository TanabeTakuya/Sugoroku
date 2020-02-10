var player = document.getElementById("player-img");
var rival = document.getElementById("rival");
var stage = document.getElementById("stage");
var state = document.getElementById("current-state");

var going_button = document.getElementById("going-button");

var going_count = 0;
var goal_point = 30;

var is_my_turn = (player_num == 1);
var is_end = false;
var is_action = false;
var player_current_point = 0;
var rival_current_point = 0;
state.innerHTML = (player_num == 1) ? "あなたのターン" : "あいてのターン";

set_img(player, player_num);
set_img(rival, player_num - 1);

setInterval("update()", 1000);

going_button.addEventListener("click", function(){
    if(!is_end){
        going_button.disabled = "disabled";
        going_count += random_going_count();
        state.innerHTML = going_count;
    }
    else{
        fetch("../api/gameend.php");

        window.location.href = "../index.html";
    }
});

function set_img(character, num){
    if(num == 1){
        character.src="../img/Player1.png";
    }
    else{
        character.src="../img/Player2.png";
    }
}

function update(){
    if(is_end){
        return;
    }
    if(going_count > 0){
        player_current_point++;
        // update player point
        going_count--;
        if(player_current_point > goal_point){
            player_current_point = goal_point;
            going_count = 0;
        }
        else{
            stage.style.left = (-135 * player_current_point) + 'px';
        }
        state.innerHTML = going_count;
        if(going_count <= 0){
            going_player();
            is_my_turn = false;
        }
        return;
    }
    // get rival current point data
	fetch("../api/playroom.php")
    .then((res)=>{
        return res.json();
    })
    .then((json)=>{
        if(player_num == 1){
            update_check(json["player1_current"], json["player2_current"]);
        }
        else{
            update_check(json["player2_current"], json["player1_current"]);
        }
    });
}

function update_check(p_data, r_data){
    if(is_goal(p_data - 0)){
        state.innerHTML = "あなたの勝ち";
        going_button.value = 'タイトルに戻る';
        fetch("../api/winorlose.php?is_win="+true+"&user="+user_id);
        is_end = true;
        going_button.disabled = "";
        // you win!
        return;
    }
    else if(is_goal(r_data - 0)){
        state.innerHTML = "あなたの負け";
        going_button.value = 'タイトルに戻る';
        fetch("../api/winorlose.php?is_win="+false+"&user="+user_id);
        is_end = true;
        going_button.disabled = "";
        // you lose...
        return;
    }
    else{
        if(rival_current_point != (r_data - 0)){
            rival.style.left = (31 + 135 * r_data) + 'px';
            state.innerHTML = "あなたのターン";
            is_my_turn = true;
            rival_current_point = (r_data - 0);
            going_button.disabled = "";
        }

        if(is_my_turn){
        }
        else{
            state.innerHTML = "あいてのターン";
            going_button.disabled = "disabled";
        }
    }
}

function going_player(){
    fetch("../api/pointupdate.php?playernum="+player_num+"&current_point="+player_current_point);
}

function random_going_count(){
    return Math.floor(Math.random() * (7 - 1)) + 1;
}

function is_goal(point){
    return (point >= goal_point);
}