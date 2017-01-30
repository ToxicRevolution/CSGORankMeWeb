<div class="content">
	<br>
	<div class="row" style="padding-left: 5%;">
	    <div class="col-md-12">

            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" href="#addServer" role="tab" data-toggle="tab">Add Server</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#social" role="tab" data-toggle="tab">Social Media</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#manageServers" role="tab" data-toggle="tab">Manage Servers</a>
              </li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="addServer">




	        <div class="card">
	            <div class="card-header">Add a Server!</div>
	                <div class="card-block">
                   		 Here you can add your servers so that people can see who is all on them as well as what map the server is on and also if the server is online or not. You do not need to specify an rcon password but if you wish to utalize the built in commandline you will need to provide the rcon password.                   		 
                   		 <div class="row">
                   		 	<div class="col-md-6" style="float: none; margin:0 auto;">
                   		 		<div class="input-group">
                   		 			<form action="control/admin/addServer.php" method="POST" id="addServer" >
                   		 			<div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">Server IP*</span>
                                                <input type="text" class="form-control" id="serverIP" name="serverIP" placeholder="Server IP" aria-describedby="basic-addon1" required>
                   		 			                    </div>
                                                <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">Server Port*</span>
                                                <input type="text" class="form-control" id="serverPort" name="serverPort" value="27015" aria-describedby="basic-addon2" required>
                                                </div>
                                                <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon3">Server Name*</span>
                                                <input type="text" class="form-control" id="serverName" name="serverName" placeholder="Server Name" aria-describedby="basic-addon3" required>
                                                </div>
                                                <input type="submit" class="btn btn-outline-danger" name="submit">
                   		 			</form>
                   		 		</div>
	                		     </div>
	                	      </div>
	                	
	                 </div>
              </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="social">
                  <div class="card">
                  <div class="card-header">Add your Social Media Links!!</div>
                      <div class="card-block">
                               If you choose to add any social media links they will be displayed on the top of all pages, only the links you set will be set shown. Please input the full url including http(s)://                            
                               <div class="row">
                                    <div class="col-md-6" style="float: none; margin:0 auto;">
                                          <div class="input-group">
                                                <form action="control/admin/addSocial.php" method="POST" id="addSocial">
                                                <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon1">Facebook</span>
                                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" aria-describedby="basic-addon1" >
                                                </div>
                                                <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon2">Twitter</span>
                                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" aria-describedby="basic-addon2" >
                                                </div>
                                                <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon3">Twitch</span>
                                                <input type="text" class="form-control" id="twitch" name="twitch" placeholder="Twitch" aria-describedby="basic-addon3" >
                                                </div>
                                                <div class="input-group">
                                                <span class="input-group-addon" id="basic-addon4">Steam Group</span>
                                                <input type="text" class="form-control" id="steamGroup" placeholder="Steam Group" name="steamGroup" aria-describedby="basic-addon3">
                                                </div>
                                                <input type="submit" class="btn btn-outline-danger" name="submit">
                                                </form>
                                          </div>
                                   </div>
                              </div>
                        
                       </div>
              </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="manageServers">
              <div class="card">
                  <div class="card-header">Edit server Information!</div>
                      <div class="card-block">
                               If you change your server type and want to edit the name or move it to a new IP or port you can edit all that information here!                         
                               <div class="row">
                                    <div class="col-md-6" style="float: none; margin:0 auto;">
                                          <div class="input-group">
                                            <form action="control/admin/editServer.php" method="POST" id="editServer" >
                                              <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Server To Edit*</span>
                                              <select class="form-control" id="serverID" name="serverID" aria-describedby="basic-addon1" required><option></option>
                                              <?php
                                               require_once("control/admin/getServers.php"); 
                                              ?>
                                              </select>
                                              </div>
                                              <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon2">Server IP*</span>
                                              <input type="text" class="form-control" id="serverIP" name="serverIP" placeholder="Server IP" aria-describedby="basic-addon2" required>
                                              </div>
                                              <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon3">Server Port*</span>
                                              <input type="text" class="form-control" id="serverPort" name="serverPort" value="27015" aria-describedby="basic-addon3" required>
                                              </div>
                                              <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon4">Server Name*</span>
                                              <input type="text" class="form-control" id="serverName" name="serverName" placeholder="Server Name" aria-describedby="basic-addon4" required>
                                              </div>
                                              <input type="submit" class="btn btn-outline-danger" name="submit">
                                            </form>
                                          </div>
                            </div>
                        </div>
                    </div>
              </div>
            
	    </div>
	</div> <!-- ROW END -->
</div>