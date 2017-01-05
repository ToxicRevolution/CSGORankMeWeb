<html>
	<head>
		<title>Install/setup RankMe</title>

		  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		  <script src="../js/jquery-3.1.1.min.js"></script>
		  <script src="../js/tether/tether.min.js"></script>
		  <script src="../js/bootstrap/bootstrap.min.js"></script>



		 <!-- Custom Fonts -->
		 <link href="../css/fontawesome/font-awesome.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
		  <div class="jumbotron">
		    <h1>Installing/Setting up your web interface</h1> 
		    <p>Please fill out the following information for setting up your site! All the information will be saved to a file named config.xml if you need to change it later!</p> 
		  </div>
		  <div class="panel panel-deafult">
		  	<div class="panel-body">
		  		<p><mark>Items marked with an * are required</mark></p>
		  		<form action="installMethods.php" method="POST">
		  		<table>
		  			<tr>
		  				<td>Browser Title* <a href="#" data-toggle="tooltip" title="This is the text that appears in the browser tabs will automatically added words like Home, Search or Leaderboards."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="browserTitle" id='installInputs' tabindex="1" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Page Title* <a href="#" data-toggle="tooltip" title="This is the branding on the navigation bar at the very top. Best name would be the name of your site, clan or organization"><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="pageTitle" id='installInputs' tabindex="2" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Database IP* <a href="#" data-toggle="tooltip" title="Add IP of Database, table names should be default names set by Plugin"><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="databaseIP" id='installInputs' tabindex="3" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Database Name* <a href="#" data-toggle="tooltip" title="Add the database name"><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="databaseName" id='installInputs' tabindex="4" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Database UserName* <a href="#" data-toggle="tooltip" title="Database username for any account that has access to view and alter the database."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="databaseUser" id='installInputs' tabindex="5" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Database Password* <a href="#" data-toggle="tooltip" title="Password to account lised above."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="databasePass" id='installInputs' tabindex="6" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Admin Email* <a href="#" data-toggle="tooltip" title="This Account will be used to add servers to view the in the server tab, you will be able to see connected players, map and server ip from that page." class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="adminEmail" id='installInputs' tabindex="7" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Admin Password* <a href="#" data-toggle="tooltip" title="Desired password for your admin account."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="adminPass" id='installInputs' tabindex="8" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Server Type* <a href="#" data-toggle="tooltip" title="What is the server's main plugin/function"><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><select name="serverType"><option></option><option value="1v1">1v1</option><option value="DeathMatch">DeathMatch</option><option value="Comp">Compeitive</option><option value="Retake">Retake</option></select></td>
		  			</tr>
		  			<tr>
		  				<td>(Optional) Sourcebans Database IP <a href="#" data-toggle="tooltip" title="If you have sourcebans installed you can use this site to display bans as well. Specify Sourcebans Database IP here."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="sbIP" id='installInputs' tabindex="9"/></td>
		  			</tr>
		  			<tr>
		  				<td>(Optional) Sourcebans Database Name <a href="#" data-toggle="tooltip" title="Specify Sourcebans Database name here."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="sbName" id='installInputs' tabindex="10"/></td>
		  			</tr>
		  			<tr>
		  				<td>(Optional) Sourcebans Database UserName <a href="#" data-toggle="tooltip" title="Specify username for sourcebans database."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="sbUser" id='installInputs' tabindex="11"/></td>
		  			</tr>
		  			<tr>
		  				<td>(Optional) Sourcebans Database Password <a href="#" data-toggle="tooltip" title="Specify password for sourcebans database."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="sbPass" id='installInputs' tabindex="12"/></td>
		  			</tr>

		  		</table>
		  		<input type="submit" class="btn btn-success" id="submit" name="submit" tabindex="13"/>
		  		</form>

		  	</div>
		  </div>
		  
		</div>
		<script>
			$(document).ready(function(){
    			$('[data-toggle="tooltip"]').tooltip();   
			});
		</script>
	</body>
</html>