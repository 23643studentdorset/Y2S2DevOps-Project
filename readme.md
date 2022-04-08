
# Calendar Web Application

![Add Event](https://github.com/23643studentdorset/Y2S2DevOps-Project/blob/master/screenshot/addEvent.png?raw=true)

## Environment

To run the application, you need to install the following packages(Step by step made it to work on Linux/Ubuntu):

```console
sudo apt-get install apache2 #To install Apache
sudo apt-get install mysql-server #To install MySQL
sudo apt-get install php libapache2-mod-php php-mysql #To install PHP and required modules
```

Now it is necessary to add the following lines to the `/etc/apache2/apache2.conf` file(This line will make Apache works with PHP files);
First open the `dir.conf` file:

```console
sudo nano /etc/apache2/mods-enabled/dir.conf
```

Them find and replace the following line:

```console
<IfModule mod_dir.c>
        DirectoryIndex index.php index.html
</IfModule>
```

Now, you can restart the application by running the following command:

```console
sudo systemctl reload apache2 #To reload the apache2 service
```

### Project steps

- [x] HTML and CSS;
- [x] Modals to view and edit an event;
- [x] connect to the DB

SQL Data: username root password empty

- [x] function GET USER
- [ ] function GET Events
- [ ] load New Modal Event for level 1, and 2
- [ ] load Edit Modal Event for level 1, and 2
- [ ] load View Modal Event for level 1, 2, and 3

### SQL Structure

Information about the database structure:

```sql
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
    --INSERT INTO USER VALUES ('admin@gmail.com', 'admin1', 1);

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
```

### Project test environment

You can access the live test version here:

<http://ec2-52-30-162-23.eu-west-1.compute.amazonaws.com/>
