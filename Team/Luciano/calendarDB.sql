DROP DATABASE IF EXISTS calendarDB;

CREATE DATABASE calendarDB;

USE calendarDB; 

    CREATE TABLE user (
        user_name_   VARCHAR (25) not null,
        password_   VARCHAR (10) not null,
        --ACCESS_LVL: 1 ADMIN / 2 LECTURER / 3 STUDENT
        access_lvl  TINYINT      not null CHECK (access_lvl IN(1,2,3)),
        PRIMARY KEY (user_name_),
        CONSTRAINT user_name_     CHECK (user_name_ LIKE '%@%.%'));

    
    
    INSERT INTO user VALUES ('admin@gmail.com', 'admin1', 1);
    INSERT INTO user VALUES ('profesor@gmail.com', 'profesor1', 2);
    INSERT INTO user VALUES ('student@gmail.com', 'student1', 3);
    --Testing constraints
    --INSERT INTO USER VALUES ('student', '123', 2);
    --INSERT INTO USER VALUES ('admin@gmail.com', 'admin1', 6);

    CREATE TABLE class (
        class_id   INT AUTO_INCREMENT PRIMARY KEY,
        user_name_   VARCHAR (25),
        lecture_id  INT,
        PRIMARY KEY (class_id),
        FOREIGN KEY (user_name_)
            REFERENCES USER (user_name_)
        FOREIGN KEY (lecture_id)
            REFERENCES USER (lectures)
    );

    

    