CREATE DATABASE devopwebapp;

USE devopwebapp;

CREATE TABLE `users` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into users values ('admin','apass');
insert into users values ('student','spass');
insert into users values ("teacher1","t1pass");
insert into users values ('teacher2','t2pass');

-- select username from users where username like "teacher3";
-- select `password` from users where username like "teacher1";
