-- CREATES for USARPS/OnPHPoint

create table player
(
    player_id int primary key,
    firstname varchar(50) not null,
    lastname  varchar(50) not null
);

create table tournament
(
    tournament_id int primary key,
    name          varchar(50) not null,
    date          date        not null
);

create table gameround
(
    gameround_id   int primary key,
    tournament_id  int,
    rounddate      date    not null,
    player1_id     int     not null,
    player1_symbol char(1) not null,
    player2_id     int     not null,
    player2_symbol char(1) not null,
    foreign key (tournament_id) references tournament (tournament_id),
    foreign key (player1_id) references player (player_id),
    foreign key (player2_id) references player (player_id)
);