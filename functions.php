<?php

function getUserData($username,$rowData){
    include "config/config.php";
    $query = "SELECT * FROM user WHERE (user_name_ = '$username')";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        return $row[$rowData];
    }
    mysqli_close($link);
}