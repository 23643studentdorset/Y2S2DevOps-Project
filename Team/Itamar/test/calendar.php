<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="year">Year 2022</div>
        </div>
        <div id="centerTitle">
        </div>

        <!-- Populate the calendar using javascript -->
        <div id="calendar">
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">1</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">2</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">3</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">4</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">5
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58bae4 ; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" title="Math Exam" description="This test will consist of 2 hours working">#Title#</div>

            </div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">6
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58bae4" title="Math Exam" description="This test will consist of 2 hours working">#Title#</div>

            </div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">7
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58bae4 ; border-top-right-radius: 5px ; border-bottom-right-radius: 5px;" title="Math Exam" description="This test will consist of 2 hours working">#Title#</div>

            </div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">8</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">9</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">10</div>
            <div class="days" id="currentdays">11</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">12</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">13
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58bae4 ; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" title="Math Exam" description="This test will consist of 2 hours working">#Title#</div>
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #e45882 ;border-radius: 5px">Devps Exam</div>
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58e482 ;border-radius: 5px">Ui Exam</div>
            </div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">14
                <div class="event" data-bs-target="#eventShow" data-bs-toggle="modal" style="background-color: #58bae4 ; border-top-right-radius: 5px ; border-bottom-right-radius: 5px;" title="Math Exam" description="This test will consist of 2 hours working">#Title#</div>
            </div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">15</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">16</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">17</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">18</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">19</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">20</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">21</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">22</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">23</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">24</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">25</div>
            <div class="days" data-bs-target="#eventAdd" data-bs-toggle="modal">26</div>
        </div>
    </div>


    <!-- Modal Show Event -->
    <div class="modal fade" id="eventShow" tabindex="-1" aria-labelledby="eventShowLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventShowLabel">#Title#</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    #Description#
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Event -->
    <div class="modal fade" id="eventAdd" tabindex="-1" aria-labelledby="eventAddLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventAddLabel">Add new Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Eddding a new event
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
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
        width: 1500px;
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