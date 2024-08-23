show databases;

create database profilepage;
use profilepage;

drop table  users;

create table users
(
    id integer primary key auto_increment,
    username varchar(32),
    password varchar(32)
);

INSERT INTO users (username, password)
values ('StephanH', 'Pl0ns!976'), ('StefanieH', 'Blub!985');

SELECT * FROM users;

UPDATE users
SET username = 'Stephan'
where id = 1;