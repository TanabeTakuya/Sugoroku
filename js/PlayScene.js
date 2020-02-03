var player = document.getElementById("player");
var rival = document.getElementById("rival");

set_img(player, "../img/Player1.png");
set_img(rival, "../img/Player2.png");

function set_img(character, pass){
    character.src=pass;
}