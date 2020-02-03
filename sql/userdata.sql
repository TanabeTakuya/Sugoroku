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
	roomid int,
	player1id int,
	player2id int,
	player1_current_point int,
	player2_current_point int
);
