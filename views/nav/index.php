            <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        <?php echo $pageTitle; ?> <a href="#" class="push_menu"><span class="fa fa-reorder pull-right"></span></a>
                    </li>
                    <div class="menu">
                        <li>
                            <a href="index.php" class="<?php if($page =='home'){echo 'active';}?>">Home <span class="fa fa-home pull-right"></span></a>
                        </li>
                        <li>
                            <a href="leaderboards.php" class="<?php if($page =='leaderboards'){echo 'active';}?>">Leaderboards <span class="fa fa-list-alt pull-right"></span></a>
                        </li>
                        <li>
                            <a href="search.php" class="<?php if($page =='search'){echo 'active';}?>">Player Search<span class="fa fa-search pull-right"></span></a>
                        </li>
                        <li>
                            <a href="servers.php" class="<?php if($page =='servers'){echo 'active';}?>">Servers <span class="fa fa-server pull-right"></span></a>
                        </li>
                    </div>
                    
                </ul>
            </div>   