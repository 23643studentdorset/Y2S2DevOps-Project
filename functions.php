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
function getCalendarData($columm,$conditional,$returnRowData,$idevent){
    include "config/config.php";
    $query = "SELECT * FROM event WHERE $columm = '$conditional' AND (idevent = $idevent)";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        return $row[$returnRowData];
    }
    mysqli_close($link);
}

function insertCalendarData($event_starts,$event_ends,$event_title,$event_description, $event_colour){
    include "config/config.php";
    $query = "INSERT INTO calendarDB.event (event_starts, event_ends, event_title, event_description, event_colour) VALUES ($event_starts, $event_ends, '$event_title', '$event_description', '$event_colour')";
    $result = mysqli_query($link, $query);
    if ($result) {
        echo '<div class="alert alert-success" role="alert"> Event inserted with success!</div>';
    } else {
        echo "Could not insert record: ". mysqli_error($link); 
    }
    mysqli_close($link);
}
function deleteCalendarData($idevent){
    include "config/config.php";
    $query = "DELETE FROM event WHERE (idevent = '$idevent')";
    $result = mysqli_query($link, $query);
    if ($result) {
        return true;
    } else {
        echo "Could not delete record: ". mysqli_error($link); 
    }
    mysqli_close($link);
}