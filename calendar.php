<?php
// Initialize the session
session_start();

//Load environment variables
//require "config/config.php";
require "functions.php";

// Check if the user is logged in, if not then redirect him to login/index page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

//Set the $username variable and get the user level
$username = $_SESSION["username"];
$user_level = getUserData($username, 'access_lvl');

//create a new event and insert it into the database
if(isset($_POST['insert-event'])){
    $assessment_title = $_POST['assessment-title'];
    $assessment_color = $_POST['assessment-color'];
    $start_week = $_POST['start-week'];
    $end_week = $_POST['end-week'];
    $assessment_description = $_POST['assessment-description'];

    echo $assessment_description;
    insertCalendarData($start_week, $end_week, $assessment_title, $assessment_description, $assessment_color);

}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div id="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">Calendar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link">Welcome <?php echo $_SESSION["username"]; ?> | Access level <?PHP echo $user_level;?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="header">
            <div id="year">Year 2022</div>
        </div>
        <div id="centerTitle">
        </div>

        <!-- Populate the calendar using javascript -->
        <div id="calendar">

        <?php for ($counter = 1 ; $counter <=52; $counter++){
            echo '<div class="days" ';
            if($user_level <= 2 ){ echo 'data-bs-target="#eventAdd" ';}
            echo 'data-bs-toggle="modal">'.$counter.'';
            //Show one event if the weeks starts
            $title = getCalendarData('event_starts',$counter,'event_title');
            
            if ($title != ''){
                echo '<div class="event" data-bs-target="#eventShow'.$counter.'" data-bs-toggle="modal" style="background-color: #58bae4 ; border-top-left-radius: 5px; border-bottom-left-radius: 5px;">'.$title.'</div>';
            }
            if($title == null){
            //show event if the weeks ends
            $title = getCalendarData('event_ends',$counter,'event_title');
            if ($title != ''){
                echo '<div class="event" data-bs-target="#eventShow'.$counter.'" data-bs-toggle="modal" style="background-color: #58bae4 ; border-top-right-radius: 5px ; border-bottom-right-radius: 5px;">'.$title.'</div>';
            }}

            $description = getCalendarData('event_starts',$counter,'event_description');
            if ($description == null){
                $description = getCalendarData('event_ends',$counter,'event_description');
            }

            echo '</div>
            <div class="modal fade" id="eventShow'.$counter.'" tabindex="-1" aria-labelledby="eventShowLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventShowLabel">'.$title.'</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">'.$description.'</div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary">Delete Event</button>
                <button type="button" class="btn btn-primary">Edit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
            </div>';

        };?>


            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">6
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58bae4" title="Math Exam" description="This test will consist of 2 hours working">#Title#</div>

            </div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">13
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58bae4 ; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" title="Math Exam" description="This test will consist of 2 hours working">#Title#</div>
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #e45882 ;border-radius: 5px">Devps Exam</div>
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58e482 ;border-radius: 5px">Ui Exam</div>
            </div>
        </div>
    </div>


   

    <!-- Modal Add Event -->
    <div class="modal fade" id="eventAdd" tabindex="-1" aria-labelledby="eventAddLabel" aria-hidden="true">
        <div class="modal-dialog">
        <form method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventAddLabel">Create new Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-4 col-form-label" for="assessment-title">Assessment Title</label> 
                            <div class="col-8">
                            <input id="assessment-title" name="assessment-title" placeholder="Assessment Title" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label" for="assessment-title">Assessment Color</label> 
                            <div class="col-8">
                            <input id="assessment-title" name="assessment-color" type="color" value="#f6b73c" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label" for="start-week">Start Week</label> 
                            <div class="col-8">
                            <input id="start-week" name="start-week" placeholder="Start Week" type="number" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label" for="end-week">End Week</label> 
                            <div class="col-8">
                            <input id="end-week" name="end-week" placeholder="End Week" type="number" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4 col-form-label" for="assessment-description">Assessment Description</label> 
                            <div class="col-8">
                            <textarea id="assessment-description" name="assessment-description" cols="40" rows="5" class="form-control" required="required"></textarea>
                            </div>
                        </div> 
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="insert-event">Insert and Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
        </div>
    </div>


</body>

</html>

<style>
    body {
        display: flex;
        margin-top: 50px;
        justify-content: center;
        background-color: #fffcff;
    }

    #header {
        padding: 10px;
        color: #d36c6c;
        font-size: 26px;
        font-family: sans-serif;
        display: flex;
        justify-content: space-between;
    }

    #container {
        /* Sice of the calendar */
        width: 1430px;
    }

    #weekdayss {
        width: 100%;
        display: flex;
        color: #247ba0;
    }

    #calendar {
        width: 100%;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
    }

    .days {
        padding: 10px;
        width: 100px;
        min-height: 100px;
        /* Size of the weekbox */
        cursor: pointer;
        box-sizing: border-box;
        background-color: white;
        margin: 5px;
        box-shadow: 0px 0px 3px #cbd4c2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .days:hover {
        background-color: #e8faed;
    }

    .days+#currentdays {
        background-color: #e8f4fa;
    }

    .event {
        font-size: 10px;
        padding: 3px;
        color: white;
        max-height: 55px;
        overflow: hidden;
    }
</style>