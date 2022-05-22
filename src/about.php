<!DOCTYPE html>

<?php

    include_once("./config.php"); //mysqli config

    //executing queries to retrieve static content
    $head = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="aboutHead"')->fetch_row()[0];
    $missionHead = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="mission"')->fetch_row()[0];
    $missionText = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="missionText"')->fetch_row()[0];
    $teamHead = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamHead"')->fetch_row()[0];
    $teamText = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamText"')->fetch_row()[0];
    $teamMem1 = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamMem1"')->fetch_row()[0];
    $teamMem2 = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamMem2"')->fetch_row()[0];
    $teamMem3 = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamMem3"')->fetch_row()[0];
    $teamCMS1 = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamCMS1"')->fetch_row()[0];
    $teamCMS2 = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamCMS2"')->fetch_row()[0];
    $teamCMS3 = $conn->query('SELECT content FROM static_content WHERE page="about" AND section="teamCMS3"')->fetch_row()[0];
    
    $conn->close(); //closing sql connection
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoVest - About</title>

    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <script src="./bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/jquery-3.6.0.min.js"></script>
    <!-- included bootstrap css and js minimized bundles + jquery -->

    <script src="https://kit.fontawesome.com/d844771417.js" crossorigin="anonymous"></script>
    <!-- social media icons library -->

    <link rel="stylesheet" href="./styles.css">
    <!-- personal stylesheet -->

</head>

<body class="primaryBackground">

    <?php include("./nav.php"); ?> 
    

    <br><br>
    <!-- main page content -->
    <div class="content my-5 textContent">

        <h1 class="display-3 text-light mb-4"><?= $head; ?></h1>

        <br>
        <hr> <br><br>
        <h1 class="display-6 text-light mb-4"><?= $missionHead; ?></h1>
        <p class="text-md-left"><?= $missionText; ?></p>

        <br><br><br>
        <hr>
        <br><br><br>
        <h1 class="display-6 text-light mb-4"><?= $teamHead; ?></h1>
        <p><?= $teamText; ?></p>

        <br><br>
        <div class="groupMembers row text-center">
            <div class="col-12 col-md-4"><?= $teamMem1; ?><br>
                <p><?= $teamCMS1; ?></p>
            </div>
            <div class="col-12 col-md-4"><?= $teamMem2; ?><br>
                <p><?= $teamCMS2; ?></p>
            </div>
            <div class="col-12 col-md-4"><?= $teamMem3; ?><br>
                <p><?= $teamCMS3; ?></p>
            </div>
        </div>
        <br><br>
        <hr>
        <br><br>
    </div>

    <?php include("./footer.php");?>

</body>
</html>