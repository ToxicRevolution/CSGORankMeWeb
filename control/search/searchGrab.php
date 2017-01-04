<?php
require_once("../../config.php");
$steamID = $_POST['steamID'];
?>



<div class="row" style="padding-left: 5%;">
    <div class="col-md-12">
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <div class="card-header">Main Stats:</div>
                    <div class="card-block">
                    	<div class='col-md-7'>
                          <?php $obj = new Player($steamID, $dbh); ?>
                        	<p>Score: <span class="text-muted"><?php echo getScore($steamID, $dbh); ?></span></p>
                        	<p>Kills: <span class="text-muted"><?php echo getKills($steamID, $dbh); ?></span></p>
                        	<p>Deaths: <span class="text-muted"><?php echo getDeaths($steamID, $dbh); ?></span></p>
                        	<p>K/D: <span class="text-muted"><?php echo getKD($steamID, $dbh); ?></span></p>
                        	<p data-toggle="tooltip"  title="Average Death Per Round">ADR <span class="text-muted"><?php echo getADR($steamID, $dbh); ?></span></p>
                        	<p>HS % <span class="text-muted"><?php echo getHeadShotPercent($steamID, $dbh); ?></span></p>
                        </div>
                        <div class='col-md-5' ">
                        <table style="table-layout:fixed;width:240px;">
                        	<tr>
                        		<td>
                        			<center><h4>Accuracy</h4></center>
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>
                        			<div class="center-block" style="margin: 0px auto;">
                        				<?php 
                        					$Accuracy = getAccuracy($steamID, $dbh);
                        				echo "<div class='c100 p{$Accuracy} dark big orange'>";
                        				echo "<span>{$Accuracy}%</span>";
                        				?>
                        				
                        				<div class="slice">
                        		    		<div class="bar"></div>
                        		    		<div class="fill"></div>
                        				</div>
                        			
                    				</div>
                    			</td>
                    		</tr>
                    	</table>
                    		</div>
                        </div>
                    </div>
                </div>

        <div class="col-xs-12 col-md-6">
            <div class="card">
                <div class="card-header">Hitbox Stats:</div>
                    <div class="card-block">
                        <div id="morris-donut-chart"></div>
                        	<script>
                        	 Morris.Donut({
                        	    element: 'morris-donut-chart',
                        	    data: [<?php generateJsonForDonut($steamID, $dbh); ?>],
                        	    resize: true
                        	 });
                        	</script>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
        <div class="col-xs-12 col-md-12">
            <div class="card">
                <div class="card-header">Weapon Stats:</div>
                    <div class="card-block">
                        <center><h3><b>Favorite Weapon: <span class="text-muted"><?php echo getFavoriteWeapon($steamID, $dbh);?></span></b></h3></center>
                        <table class="table table-striped table-inverse" style="text-align: center;">
  							<thead>
  							  <tr>
  							    <th></th>
  							    <th><center>Weapon Name</center></th>
  							    <th><center>Weapon Kill</center></th>
  							    <th><center>Percent Total Kill</center></th>
  							  </tr>
  							</thead>
  							<tbody>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>AWP</td>
  							    <td><?php $total = getAWP($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>AK-47</td>
  							    <td><?php $total = getAK47($steamID, $dbh); echo $total;?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>M4A4/M4A1-S</td>
  							    <td><?php $total = getM4A1S($steamID, $dbh) + getM4A4($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>P2000/USP-S</td>
  							    <td><?php $total = getP2000($steamID, $dbh) + getUSPS($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Glock</td>
  							    <td><?php $total = getGlock($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Tec-9</td>
  							    <td><?php $total = getTec9($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Five Seven</td>
  							    <td><?php $total = getFiveSeven($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Desert Eagle</td>
  							    <td><?php $total = getDeagle($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Revolver</td>
  							    <td><?php $total = getRevolver($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>CZ-75A</td>
  							    <td><?php $total = getCZ75A($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Dual Berettas</td>
  							    <td><?php $total = getElite($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Famas</td>
  							    <td><?php $total = getFamas($steamID, $dbh); echo $total;?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Galil</td>
  							    <td><?php $total = getGalilar($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Aug</td>
  							    <td><?php $total = getAug($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>SG 556</td>
  							    <td><?php $total = getSG556($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Scout (SSG 08)</td>
  							    <td><?php $total = getSSG08($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Knife</td>
  							    <td><?php $total = getKnife($steamID, $dbh); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($steamID, $total, $dbh);?> %</td>
  							  </tr>
  							  <?php 
  							  if($serverType != "1v1")
  							  	require_once("searchTableAll.php");
  							  ?>
  							</tbody>
						</table>
 
						<div id="morris-Bar-chart"></div>
                        <script>
                          
                        	 Morris.Bar({
                        	    element: 'morris-Bar-chart',
                        	    data: [<?php echo generateJsonForBar($steamID, $dbh); ?>],
                        	    xkey: 'y',
                        	    ykeys: ['value'],
                        	    labels: ['Graph']
                        	 });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


