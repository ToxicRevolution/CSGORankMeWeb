<?php
require_once("../../config.php");
$steamID = $_POST['steamID'];
$count = validSteamID($dbh, $steamID);
if($count == 0){
    header("location:../../views/error/errorSteamID.php");
}
?>



<div class="row" style="padding-left: 5%;">
    <div class="col-md-12">
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <div class="card-header">Main Stats:</div>
                    <div class="card-block">
                    	<div class='col-md-5'>
                          <?php $player = new Player($steamID, $dbh); ?>
                        	<p>Score: <span class="text-muted"><?php echo $player->get("score"); ?></span></p>
                        	<p>Kills: <span class="text-muted"><?php echo $player->get("kills"); ?></span></p>
                        	<p>Deaths: <span class="text-muted"><?php echo $player->get("deaths"); ?></span></p>
                        	<p>K/D: <span class="text-muted"><?php echo getKD($player); ?></span></p>
                        	<p data-toggle="tooltip"  title="Average Death Per Round">ADR <span class="text-muted"><?php echo getADR($player); ?></span></p>
                        	<p>HS % <span class="text-muted"><?php echo getHeadShotPercent($player); ?></span></p>
                        </div>
                        <div class='col-md-7' ">
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
                          graphDonut("#ff4d4d|#ff3333|#ff1a1a|#ff0000|#e60000|#cc0000|#b30000")
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
                        <table class="table table-striped table-inverse striped inverse table-hover hover" id="searchTable" style="text-align: center;">
  							<thead>
  							  <tr>
  							    <th></th>
  							    <th><center>Weapon Name</center></th>
  							    <th><center>Weapon Kill</center></th>
  							    <th><center>Percent Total Kill</center></th>
  							  </tr>
  							</thead>
  							
                <?php
                  foreach($weaponsArray as $weapon){
                  echo "<tr>";
                    echo "<th scope='row'><i class='fa fa-crosshairs' aria-hidden='true'></i></th>";
                    $weaponName = getWeaponName($weapon);
                    echo "<td> {$weaponName}</td>";
                    $total = $player->get($weapon);
                    echo "<td>{$total}</td>";
                    $percentKill = getPerctTotalKill($player, $total);
                    echo "<td> {$percentKill} %</td>";
                  echo "</tr>";
                  }
                ?>
  						  
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
                                if(row.label == "M4A4/M4A1-S") return "#ff4d4d";
                                else if(row.label == "AK-47") return "#ff3333";
                                else if(row.label == "Awp") return "#ff1a1a";
                                else if(row.label == "deagle") return "#ff0000";
                                else if(row.label == "Desert Eagle") return "#e60000";
                                else if(row.label == "USP/P2000") return "#cc0000";
                                else if(row.label == "Glock") return "#b30000";
                                else if(row.label == "Tec-9") return "#990000";
                                else if(row.label == "Five Seven") return "#800000";
                              }
                        	 });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
 $(document).ready(function(){
        $("#searchTable").DataTable();
    });

