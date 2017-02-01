<div class="content">
            <br>
                <div class="row" style="padding-left: 5%;">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Welcome to <?php echo $pageTitle;?></div>
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
                                        <div class="huge"><b>Search for any player!</b></div>
                                        <div><b>See all stats about that player!</b></div>
                                    </div>
                                </div>
                            </div>
                            <a href="search.php">
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
                                        <div class="huge"><b><?php echo getTotalPlayers($dbh); ?></b></div>
                                        <div><b>Total Users!</b></div>
                                    </div>
                                </div>
                            </div>
                            <a href="leaderboards.php">
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
                                        <div class="huge"><b><?php echo getTotalServers($dbh); ?></b></div>
                                        <div><b>Servers To Play On!</b></div>
                                    </div>
                                </div>
                            </div>
                            <a href="servers.php">
                                <div class="card-footer">
                                    <span class="pull-left">View Servers!</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> <!-- ROW END -->
            </div>