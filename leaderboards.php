<?php
session_start();
/*
Fill in phpVariables with values from Database later.
*/
require_once("config.php");
?>
<html>
<head>
    <title> <?php echo $webTitle; ?> </title>
    <?php $page = "leaderboards" //setting page for include ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Calling JS -->
    <!-- Latest compiled and minified Jquery JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/DataTable/datatables.min.js"></script>    
    <script src="js/tether/tether.min.js"></script>
    <script src="js/DataTable/dataTables.bootstrap4.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/leaderboard/leaderboardFunctions.js"></script>
    <!-- Bootstrap 4 and Tether -->


    <!-- Custom JS -->
    <script src="js/Navjs.js"></script>
    <script src="js/paging.js"></script>

    <!-- End Of JS -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/DataTable/datatables.min.css">
    <link rel="stylesheet" href="css/tether/tether.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/font-awesome.min.css">
    <link rel="stylesheet" href="css/social.css">
    <!-- Custom CSS --> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php @include_once "views/social.php"; ?>
<div class="container" style="width:95%;">
    <div class="row">
        <div class="wrapper">
            <?php include_once "views/nav/index.php" ?>
   
            <?php include_once "views/$page/index.php" ?>
        </div>
    </div>
</div>

</body>
</html>
