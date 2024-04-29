-- CREATES for USARPS/OnPHPoint

-- create table player
-- (
    -- player_id int primary key,
    -- firstname varchar(50) not null,
    -- lastname  varchar(50) not null
-- );

-- create table tournaments
-- (
    -- tournament_id int primary key,
    -- name          varchar(50) not null,
    -- date          date        not null
-- );

drop table gameround;

create table gameround
(
    gameround_id   INTEGER primary key autoincrement,
    rounddate      INTEGER    not null,
    player1_name     varchar(255)     not null,
    player1_symbol char(1) check (player1_symbol in ('R', 'P', 'S')) not null,
    player2_name     varchar(255)     not null,
    player2_symbol char(1) check (player2_symbol in ('R', 'P', 'S')) not null
);

-- Seeding

INSERT INTO gameround (gameround_id, rounddate, player1_name, player1_symbol, player2_name, player2_symbol) VALUES (1, 1714414297, 'Felux Willmann', 'R', 'Soverin Resner', 'S');
INSERT INTO gameround (gameround_id, rounddate, player1_name, player1_symbol, player2_name, player2_symbol) VALUES (2, 1714414700, 'John Doe', 'S', 'Jane Doe', 'R');
INSERT INTO gameround (gameround_id, rounddate, player1_name, player1_symbol, player2_name, player2_symbol) VALUES (3, 1714414800, 'John Doe', 'R', 'Felux Willmann', 'S');
INSERT INTO gameround (gameround_id, rounddate, player1_name, player1_symbol, player2_name, player2_symbol) VALUES (4, 1714414900, 'Mirco Jondarko', 'P', 'Felux Willmann', 'R');
INSERT INTO gameround (gameround_id, rounddate, player1_name, player1_symbol, player2_name, player2_symbol) VALUES (5, 1714415000, 'Felux Willmann', 'P', 'Ramon Kribs', 'S');
