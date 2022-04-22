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
function getCalendarData($columm,$conditional,$returnRowData){
    include "config/config.php";
    $query = "SELECT * FROM event WHERE ($columm = '$conditional')";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        return $row[$returnRowData];
    }
    mysqli_close($link);
}

function insertCalendarData($event_starts,$event_ends,$event_title,$event_description, $event_colour){
    include "config/config.php";
    $query = "INSERT INTO event (event_starts, event_ends, event_title, event_description, event_colour) VALUES ($event_starts, $event_ends, '$event_title', '$event_description', '$event_colour')";
    $result = mysqli_query($link, $query);
    if ($result) {
        echo "Successfully inserted";
    } else {
        echo "Could not insert record: ". mysqli_error($link); 
    }
    mysqli_close($link);
}
function deleteCalendarData($event_id){
    include "config/config.php";
    $query = "DELETE FROM event WHERE (idevent = '$event_id')";
    $result = mysqli_query($link, $query);
    if ($result) {
        return true;
    } else {
        echo "Could not insert record: ". mysqli_error($link); 
    }
    mysqli_close($link);
}