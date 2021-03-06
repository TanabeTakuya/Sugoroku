USE db1319;

create table userdata(
	id int,
	name varchar(16),
	pw varchar(16),
	win int,
	lose int,
	PRIMARY KEY(id)
);

create table stage1(
	square int,
	id int
);

create table room(
	roomid int AUTO_INCREMENT,
	player1id int,
	player2id int,
	PRIMARY KEY(roomid)
);

create table playdata(
	roomid int,
	player1_current_point int,
	player2_current_point int,
	PRIMARY KEY(roomid)
);

SELECT player1id, player2id, player1_current_point, player2_current_point
FROM room A, playerdata B
WHERE A.roomid = B.roomid;


