DROP DATABASE IF EXISTS calendarDB;

CREATE DATABASE calendarDB;

USE calendarDB; 

    CREATE TABLE user(
        user_name_   VARCHAR (25) NOT NULL,
        password_   VARCHAR (10) NOT NULL,
        -- ACCESS_LVL: 1 ADMIN / 2 LECTURER / 3 STUDENT
        access_lvl  TINYINT      NOT NULL CHECK (access_lvl IN(1,2,3)),
        PRIMARY KEY (user_name_),
        CONSTRAINT user_name_     CHECK (user_name_ LIKE '%@%.%'));

    
    
    INSERT INTO user VALUES ('admin@gmail.com', 'admin1', 1);
    INSERT INTO user VALUES ('professor@gmail.com', 'professor1', 2);
    INSERT INTO user VALUES ('student@gmail.com', 'student1', 3);
    -- Testing constraints
    -- INSERT INTO user VALUES ('student', '123', 2);
    -- INSERT INTO user VALUES ('admin@gmail.com', 'admin1', 1);

     CREATE TABLE lecture(
        lecture_id INT NOT NULL AUTO_INCREMENT,
        name_  VARCHAR (25),
        carrer  VARCHAR (25),
        year_  VARCHAR (25),
        PRIMARY KEY (lecture_id)
    );

    INSERT INTO lecture (name_, carrer, year_) VALUES ("DevOps", "Bachelor Degree in computer Science", "second year")
    
    CREATE TABLE class(
        class_id INT NOT NULL AUTO_INCREMENT,
        user_name_ VARCHAR (25),
        lecture_id INT,
        PRIMARY KEY (class_id),
        FOREIGN KEY (user_name_)
            REFERENCES USER (user_name_),
        FOREIGN KEY (lecture_id)
            REFERENCES lecture (lecture_id)
    );

     CREATE TABLE changes (
        change_id INT NOT NULL AUTO_INCREMENT,
        user_name_ VARCHAR(25),
        date_changed DATE,
        PRIMARY KEY (change_id),
        FOREIGN KEY (user_name_) REFERENCES user (user_name_)
        );
    
    
    
    CREATE TABLE event (
        idevent INT NOT NULL AUTO_INCREMENT,
        event_start_week INT NULL,
        event_ends_week INT NULL,
        event_title VARCHAR(255) NULL,
        event_description LONGTEXT NULL,
        event_colour VARCHAR(45) NULL,
        change_id INT,
        FOREIGN KEY (change_id) REFERENCES changes(change_id),
        PRIMARY KEY (idevent)
        );

    INSERT INTO event (event_starts, event_ends, event_title, event_description) VALUES ('2', '3', 'Event test', 'descriptio of the event');

   


    

    