<?php
/*
Fill in phpVariables with values from Database later.
*/
$webTitle = "RankMe || DMFrenzy";
$pageTitle = "DMFrenzy Servers";
$serverName = "DMFrenzy";
$totalUsers = "6332";
$totalServers = "34";
$totalSearch = "4403"
?>
<html>
<head>
    <title>
        <?php echo $webTitle; ?>
    </title>
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Calling JS -->
    <!-- Latest compiled and minified Jquery JavaScript -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap 4 and Tether -->
    <script src="js/tether/tether.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/Navjs.js"></script>
    <!-- End Of JS -->

    <!-- Bootstrap 4, Tether, Fontawesome -->
    <link rel="stylesheet" href="css/tether/tether.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/font-awesome.min.css">
    <!-- Custom CSS --> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container" style="width:95%;">
    <div class="row">
    <?php include_once "views/nav/index.php" ?>
            <div class="content">
            <br>
                <div class="row" style="padding-left: 5%;">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Welcome to <?php echo $serverName;?></div>
                                <div class="card-block">
                            With this page you can track your stats on any server running the RankMe plugin. You can also check where you fall on the leaderboards and who current sits atop the leaderboads. You can search and sort by various stats and check various graphs!
                                </div>
                        </div>
                    </div>
                </div> <!-- ROW END -->
                <div class="row" style="padding-left: 5%;">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-danger">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-search fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge"><b><?php echo $totalSearch; ?></b></div>
                                        <div><b>Total Searches</b></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="card-footer">
                                    <span class="pull-left">Search A User</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge"><b><?php echo $totalUsers; ?></b></div>
                                        <div><b>Total Users!</b></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="card-footer">
                                    <span class="pull-left">View LeaderBoards!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-success">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-server fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-xs-right">
                                        <div class="huge"><b><?php echo $totalServers; ?></b></div>
                                        <div><b>Servers To Play On!</b></div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="card-footer">
                                    <span class="pull-left">View LeaderBoards!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- ROW END -->

            </div>
        </div>
    </div>
</div>
</body>
</html>
