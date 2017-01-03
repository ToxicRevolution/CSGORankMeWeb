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
                        	<p>Score: <span class="text-muted"><?php echo getScore($steamID, $dbh); ?></span></p>
                        	<p>Kills: <span class="text-muted"><?php echo getKills($steamID, $dbh); ?></span></p>
                        	<p>Deaths: <span class="text-muted"><?php echo getDeaths($steamID, $dbh); ?></span></p>
                        	<p>K/D: <span class="text-muted"><?php echo getKD($steamID, $dbh); ?></span></p>
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
                        					$shots = getShots($steamID, $dbh);
                        					$hits = getHits($steamID, $dbh);
                        					$Accuracy = ceil(($hits / $shots) * 100);
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
                        <table class="table table-striped table-inverse">
  							<thead>
  							  <tr>
  							    <th></th>
  							    <th>Weapon Name</th>
  							    <th>Weapon Kill</th>
  							  </tr>
  							</thead>
  							<tbody>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>AWP</td>
  							    <td><?php echo getAWP($steamID, $dbh) ?></td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>AK-47</td>
  							    <td><?php echo getAK47($steamID, $dbh);?></td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>M4A4/M4A1-S</td>
  							    <td><?php $total = getM4A1S($steamID, $dbh) + getM4A4($steamID, $dbh); echo $total; ?></td>
  							  </tr>
  							</tbody>
						</table>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


