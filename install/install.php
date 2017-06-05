<html>
	<head>
		<title>Install/setup RankMe</title>

		  <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
		  <script src="../js/jquery.min.js"></script>
		  <script src="../js/tether/tether.min.js"></script>
		  <script src="../js/bootstrap/bootstrap.min.js"></script>



		 <!-- Custom Fonts -->
		 <link href="../css/fontawesome/font-awesome.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
		  <div class="jumbotron">
		    <h1>Installing/Setting up your web interface</h1>
		    <p>Please fill out the following information for setting up your site! All the information will be saved to a file named config.php if you need to change it later!</p>
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
							<td>
								Database Table* <a href="#" data-toggle="tooptip" title="Add the table name"><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
							<td><input type="text" name="tableName" id="installInputs" tabindex="5" required /></td>
						</tr>
		  			<tr>
		  				<td>Database UserName* <a href="#" data-toggle="tooltip" title="Database username for any account that has access to view and alter the database."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="databaseUser" id='installInputs' tabindex="6" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Database Password* <a href="#" data-toggle="tooltip" title="Password to account lised above."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="databasePass" id='installInputs' tabindex="7" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Admin Email* <a href="#" data-toggle="tooltip" title="This Account will be used to add servers to view the in the server tab, you will be able to see connected players, map and server ip from that page." class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="adminEmail" id='installInputs' tabindex="8" required/></td>
		  			</tr>
		  			<tr>
		  				<td>Admin Password* <a href="#" data-toggle="tooltip" title="Desired password for your admin account."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="adminPass" id='installInputs' tabindex="9" required/></td>
		  			</tr>
		  			<!--<tr>
		  				<td>Server Type* <a href="#" data-toggle="tooltip" title="What is the server's main plugin/function"><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><select name="serverType"><option></option><option value="1v1">1v1</option><option value="DeathMatch">DeathMatch</option><option value="Comp">Compeitive</option><option value="Retake">Retake</option></select></td>
		  			</tr>
		  			-->
		  			<tr>
		  				<td colspan="2"><p>Select Weapons to show on search page* </p></td>
		  			</tr>
		  			<tr>
		  				<td colspan="2">
		  				<table>
		  				<tr>
		  				   <td><input type="checkbox" name="check[]" value="m4a1_silencer" /></td><td><label>M4a1-S</label></td>
    					   <td><input type="checkbox" name="check[]" value="m4a1" /></td><td><label>M4a4</label></td>
    					   <td><input type="checkbox" name="check[]" value="ak47" /></td><td><label>AK-47</label></td>
    					</tr>
    					<tr>
    					   <td><input type="checkbox" name="check[]" value="awp" /></td><td><label>AWP</label></td>
    					   <td><input type="checkbox" name="check[]" value="knife" /></td><td><label>Knife</label></td>
    					   <td><input type="checkbox" name="check[]" value="usp_silencer" /></td><td><label>USP-S</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="hkp2000" /></td><td><label>P2000</label></td>
    					   <td><input type="checkbox" name="check[]" value="elite" /></td><td><label>Duel Barettas</label></td>
    					   <td><input type="checkbox" name="check[]" value="p250" /></td><td><label>P250</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="fiveseven" /></td><td><label>Five-Seven</label></td>
    					   <td><input type="checkbox" name="check[]" value="cz75a" /></td><td><label>CZ-75</label></td>
    					   <td><input type="checkbox" name="check[]" value="deagle" /></td><td><label>Desert Eagle</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="glock" /></td><td><label>Glock-18</label></td>
    					   <td><input type="checkbox" name="check[]" value="tec9" /></td><td><label>Tec-9</label></td>
    					   <td><input type="checkbox" name="check[]" value="famas" /></td><td><label>Famas</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="aug" /></td><td><label>AUG</label></td>
    					   <td><input type="checkbox" name="check[]" value="galilar" /></td><td><label>Galil-AR</label></td>
    					   <td><input type="checkbox" name="check[]" value="sg556" /></td><td><label>SG-556</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="hegrenade" /></td><td><label>HE Grenade</label></td>
    					   <td><input type="checkbox" name="check[]" value="flashbang" /></td><td><label>Flashbang</label></td>
    					   <td><input type="checkbox" name="check[]" value="smokegrenade" /></td><td><label>Smoke</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="inferno" /></td><td><label>Molotov</label></td>
    					   <td><input type="checkbox" name="check[]" value="revolver" /></td><td><label>R8 Revolver</label></td>
    					   <td><input type="checkbox" name="check[]" value="nova" /></td><td><label>Nova</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="xm1014" /></td><td><label>XM1014</label></td>
    					   <td><input type="checkbox" name="check[]" value="mag7" /></td><td><label>Mag-7</label></td>
    					   <td><input type="checkbox" name="check[]" value="sawedoff" /></td><td><label>Sawed-Off</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="bizon" /></td><td><label>PP-Bizon</label></td>
    					   <td><input type="checkbox" name="check[]" value="mac10" /></td><td><label>Mac-10</label></td>
    					   <td><input type="checkbox" name="check[]" value="mp9" /></td><td><label>MP9</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="mp7" /></td><td><label>MP7</label></td>
    					   <td><input type="checkbox" name="check[]" value="ump45" /></td><td><label>UMP-45</label></td>
    					   <td><input type="checkbox" name="check[]" value="p90" /></td><td><label>P90</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="scar20" /></td><td><label>Scar-20</label></td>
    					   <td><input type="checkbox" name="check[]" value="ssg08" /></td><td><label>SSG08</label></td>
    					   <td><input type="checkbox" name="check[]" value="g3sg1" /></td><td><label>G3SG1</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="m249" /></td><td><label>M249</label></td>
    					   <td><input type="checkbox" name="check[]" value="negev" /></td><td><label>Negev</label></td>
    					   <td><input type="checkbox" name="check[]" value="decoy" /></td><td><label>Decoy</label></td>
						</tr>
						<tr>
    					   <td><input type="checkbox" name="check[]" value="taser" /></td><td><label>Zeus</label></td>
    					</tr>
    					</table>
    					</td>

		  			</tr>
		  			<tr>
		  				<td>(Optional) Website URL <a href="#" data-toggle="tooltip" title="If you would like to link your website you can do so by entering the URL here."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="webURL" id='installInputs' tabindex="10"/></td>
		  			</tr>

		  			<tr>
		  				<td>(Optional) Sourcebans Website URL <a href="#" data-toggle="tooltip" title="If you have a sourcebans website you can add the url here and it will be linked to from the rank me site."><i class="fa fa-question" aria-hidden="true"></i> </a> &nbsp;&nbsp;</td>
		  				<td><input type="text" name="sbURL" id='installInputs' tabindex="11"/></td>
		  			</tr>

		  		</table>
		  		<input type="submit" class="btn btn-success" id="submit" name="submit" tabindex="12"/>
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
