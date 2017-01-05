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
                          <?php $player = new Player($steamID, $dbh); ?>
                        	<p>Score: <span class="text-muted"><?php echo $player->get("score"); ?></span></p>
                        	<p>Kills: <span class="text-muted"><?php echo $player->get("kills"); ?></span></p>
                        	<p>Deaths: <span class="text-muted"><?php echo $player->get("deaths"); ?></span></p>
                        	<p>K/D: <span class="text-muted"><?php echo getKD($player); ?></span></p>
                        	<p data-toggle="tooltip"  title="Average Death Per Round">ADR <span class="text-muted"><?php echo getADR($player); ?></span></p>
                        	<p>HS % <span class="text-muted"><?php echo getHeadShotPercent($player); ?></span></p>
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
                        					$Accuracy = getAccuracy($player);
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
                          function graphDonut(colors){
                           var colors_array = colors.split("|");
                           
                        	 Morris.Donut({
                        	     element: 'morris-donut-chart',
                               colors: colors_array,
                        	     data: [<?php echo generateJsonForDonut($player); ?>],
                        	     resize: true
                        	 });
                           console.log(colors_array);

                          }
                          graphDonut("#a44545|#933e3e|#833737|#723030|#622929|#522222|#411b1b")
                        	</script>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
        <div class="col-xs-12 col-md-12">
            <div class="card">
                <div class="card-header">Weapon Stats:</div>
                    <div class="card-block">
                        <center><h3><b>Favorite Weapon: <span class="text-muted"><?php echo getFavoriteWeapon($player);?></span></b></h3></center>
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
  							    <td><?php $total = $player->get("awp"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>AK-47</td>
  							    <td><?php $total = $player->get("ak47"); echo $total;?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>M4A4/M4A1-S</td>
  							    <td><?php $total = $player->get("m4a1") + $player->get("m4a1_silencer"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>P2000/USP-S</td>
  							    <td><?php $total = $player->get("hkp2000") + $player->get("usp_silencer"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Glock</td>
  							    <td><?php $total = $player->get("glock"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Tec-9</td>
  							    <td><?php $total = $player->get("tec9"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Five Seven</td>
  							    <td><?php $total = $player->get("fiveseven"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Desert Eagle</td>
  							    <td><?php $total = $player->get("deagle"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Revolver</td>
  							    <td><?php $total = $player->get("revolver"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>CZ-75A</td>
  							    <td><?php $total = $player->get("cz75a"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Dual Berettas</td>
  							    <td><?php $total = $player->get("elite"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Famas</td>
  							    <td><?php $total = $player->get("famas"); echo $total;?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Galil</td>
  							    <td><?php $total = $player->get("galilar"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Aug</td>
  							    <td><?php $total = $player->get("aug"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>SG 556</td>
  							    <td><?php $total = $player->get("sg556"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Scout (SSG 08)</td>
  							    <td><?php $total = $player->get("ssg08"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
  							  </tr>
  							  <tr>
  							    <th scope="row"><i class="fa fa-crosshairs" aria-hidden="true"></i></th>
  							    <td>Knife</td>
  							    <td><?php $total = $player->get("knife"); echo $total; ?></td>
  							    <td><?php echo getPerctTotalKill($player, $total);?> %</td>
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
                        	    data: [<?php echo generateJsonForBar($player); ?>],
                        	    xkey: 'y',
                        	    ykeys: ['value'],
                        	    labels: ['Graph'],
                              barColors: function (row, series, type){
                                if(row.label == "M4A4/M4A1-S") return "#a44545";
                                else if(row.label == "AK-47") return "#933e3e";
                                else if(row.label == "Awp") return "#833737";
                                else if(row.label == "deagle") return "#723030";
                                else if(row.label == "Desert Eagle") return "#622929";
                                else if(row.label == "USP/P2000") return "#522222";
                                else if(row.label == "Glock") return "#411b1b";
                                else if(row.label == "Tec-9") return "#311414";
                                else if(row.label == "Five Seven") return "#200d0d";
                              }
                        	 });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


