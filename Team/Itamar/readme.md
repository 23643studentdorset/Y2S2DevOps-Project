
# Calendar Web Application

![Add Event](https://github.com/23643studentdorset/Y2S2DevOps-Project/blob/master/Team/Itamar/screens/addEvent.png)

## Environment

To run the application, you need to install the following packages(Step by step made to Ubuntu based OS):

```console
sudo apt-get install apache2 #To install Apache
sudo apt-get install mysql-server #To install MySQL
sudo apt-get install php libapache2-mod-php php-mysql #To install PHP and its modules to connect to MySQL
php -v #To check the version of php
sudo nano /etc/apache2/mods-enabled/dir.conf #To add the following line
```

```console
<IfModule mod_dir.c>
        DirectoryIndex index.php index.html
</IfModule>
```

```console
sudo systemctl reload apache2 #To reload the apache2 service
```

### Project steps

- [x] HTML and CSS;
- [x] Modals to view and edit an event;
- [ ] connect to the DB

SQL Data: username root password empty

- [ ] function GET USER
- [ ] load New Modal for level 1 and 2
- [ ] load Edit Modal for level 1 and 2
- [ ] load View Modal for level 1 and 2

### SQL Structure

LOGIN TABLE:
USER_NAME , PASSWORD_, ACCESS_LVL{ 1-SYSTEM 2-Lecture 3-Student }

### Project test environment

You can access the live version here:

<http://ec2-52-30-162-23.eu-west-1.compute.amazonaws.com/calendar/>
