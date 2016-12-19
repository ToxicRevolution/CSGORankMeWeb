<?php
$webTitle = "test";
$pageTitle = "test";
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



<link rel="stylesheet" href="css/navCSS.css?ver=<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>
<body>
<div class="container">
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
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Panel heading without title</div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
<script src="js/Navjs.js"></script>
</body>
</html>