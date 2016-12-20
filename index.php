<?php
/*
Fill in phpVariables with values from Database later.
*/
$webTitle = "test";
$pageTitle = "test";
$serverName = "DMFrenzy";
$totalUsers = "6332";
?>
<html>
<head>
<title><?php echo $webTitle; ?></title>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<!-- Latest compiled and minified Jquery JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


 <!-- Morris Charts CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

 <!-- Custom Fonts -->
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">




<link rel="stylesheet" href="css/navCSS.css?ver=<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>
<body>
<div class="container" style="width:95%;">
	<div class="row">
		<div class="wrapper">
    	    <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        <?php echo $pageTitle; ?> <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
                    </li>
                    <div class="menu">
                        <li>
                            <a href="#" class="active">Home <span class="glyphicon glyphicon-dashboard pull-right"></span></a>
                        </li>
                        <li>
                            <a href="#"">Leaderboards <span class="glyphicon glyphicon-heart pull-right"></span></a>
                        </li>
                        <li>
                            <a href="#">Player Search<span class="glyphicon glyphicon-star pull-right"></span></a>
                        </li>
                        <li>
                            <a href="#">Severs <span class="glyphicon glyphicon-cog pull-right"></span></a>
                        </li>
                    </div>
                    
                </ul>
    	    </div>   
            <div class="content">
            <br>
            	<div class="row" style="padding-left: 5%;">
            	    <div class="col-md-12">
            	        <div class="panel panel-default">
            	            <div class="panel-heading">Welcome to <?php echo $serverName;?></div>
            	            	<div class="panel-body">
                            With this page you can track your stats on any server running the RankMe plugin. You can also check where you fall on the leaderboards and who current sits atop the leaderboads. You can search and sort by various stats and check various graphs!
            	            	</div>
            	        </div>
            	    </div>
            	</div> <!-- ROW END -->
            	<div class="row" style="padding-left: 5%;">
            		<div class="col-md-3">
            			<div class="panel panel-primary">
                    	    <div class="panel-heading">
                    	        <div class="row">
                    	            <div class="col-xs-3">
                    	                <i class="fa fa-user fa-5x"></i>
                    	            </div>
                    	            <div class="col-xs-9 text-right">
                    	                <div class="huge"><b><?php echo $totalUsers; ?></b></div>
                    	                <div><b>Total Users!</b></div>
                    	            </div>
                    	        </div>
                    	    </div>
                    	    <a href="#">
                    	        <div class="panel-footer">
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
<script src="js/Navjs.js"></script>
</body>
</html>