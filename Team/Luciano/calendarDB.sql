DROP DATABASE IF EXISTS calendarDB;

CREATE DATABASE calendarDB;

USE calendarDB; 

    CREATE TABLE IF NOT EXISTS USER (
        USER_NAME   varchar (25) not null,
        PASSWORD_   varchar (10) not null,
        --ACCESS_LVL: 1 ADMIN / 2 LECTURER / 3 STUDENT
        ACCESS_LVL  TINYINT      not null CHECK (ACCESS_LVL IN(1,2,3)),
        primary key (USER_NAME),
        CONSTRAINT USER_NAME     CHECK (USER_NAME LIKE '%@%.%'));

    
    
    INSERT INTO USER VALUES ('admin@gmail.com', 'admin1', 1);
    INSERT INTO USER VALUES ('profesor@gmail.com', 'profesor1', 2);
    INSERT INTO USER VALUES ('student@gmail.com', 'student1', 3);
    --Testing constraints
    --INSERT INTO USER VALUES ('student', '123', 2);
    --INSERT INTO USER VALUES ('admin@gmail.com', 'admin1', 6);

    