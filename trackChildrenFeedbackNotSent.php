<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Icons\bus.png" type="image/ico" sizes="16x16">
    <title>Track your Children's</title>
    <style>
    body {
        background: url("Back/bg1blurred.jpg");
        background-repeat: no-repeat;
        background-size: 1000px 700px;
        padding: 22% 0;
        background-position: bottom right;
    }

    .addParent {
        position: absolute;
        top: 150px;
        left: 180px;

    }

    .adddriver {
        position: absolute;
        top: 150px;
        left: 550px;
    }

    .generateReport {
        position: absolute;
        top: 150px;
        left: 900px;
    }

    .par {
        color: black;
        font-size: 30px;
        font-family: 'Lato', sans-serif;
    }

    h1 {
        color: #6F42C2;
    }
    .alert {
  padding: 10px;
  background-color: green;
  color: black;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


    </style>
</head>

<body >


    <div class="addParent">
   
        <?php 
            $user = $_SESSION['user'];
            echo "<h1>Welcome Mr. $user</h1>"; 
            
        ?>
        <br>
        <br>
        <br>
        <a href="mapsTracking.php">
            <img src="Icons/tracking.png" alt="parent url Image" height="200" width="200" />
        </a><br><br>
        <center>
            <p class="par"><b>Track Your Children's</b></p>
        </center>
    </div>
    <div class="adddriver">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="feedback.php">
            <img src="Icons/feedback.png" alt="driver url Image" height="200" width="200" />
        </a><br><br>
        <center>
            <p class="par"><b>Write another feedback</b></p>
        </center>
    </div>
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Sorry!</strong> Your message was not sent successfully, check internet connection.
</div>


    <!-- <div class="generateReport">
        <a href="report.php">
            <img src="Icons/report.png" alt="report url Image" height="200" width="200" />
        </a><br><br>
        <center>
            <p class="par"><b>Generate Report</b></p>
        </center>
    </div> -->
</body>
</html>