<?php
/* Database credentials.*/
$HOST = 'localhost';
$USERNAME = 'root';
$DBPASSWORD = '';
$DBNAME = '';

/* Define credentials.*/
define('DB_SERVER', $HOST);
define('DB_USERNAME', $USERNAME);
define('DB_PASSWORD', $DBPASSWORD);
define('DB_NAME', $DBNAME);

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* Check the status of the connection in case of an error.*/
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
