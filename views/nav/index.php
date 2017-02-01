            <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        <b><?php echo $pageTitle; ?></b> <a href="#" class="push_menu"><span class="fa fa-reorder pull-right"></span></a>
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
                        <?php
                        if(isset($webURL)){
                            $parsed = parse_url($webURL);
                            if (empty($parsed['scheme'])) {
                                $webURL = 'http://' . ltrim($webURL, '/');
                            }
                            echo "<li>";
                            echo "<a href='{$webURL}'>Our Website <span class='fa fa-share pull-right'></span></a>";
                            echo "</li>";
                        }if(isset($sbURL)){
                            $parsed = parse_url($sbURL);
                            if (empty($parsed['scheme'])) {
                                $sbURL = 'http://' . ltrim($sbURL, '/');
                            }
                            echo "<li>";
                            echo "<a href='{$sbURL}'>SourceBans <span class='fa fa-ban pull-right'></span></a>";
                            echo "</li>";
                        } 
                        if(isset($_SESSION['sess_user_id'])){
                            echo "<li>";
                            if($page == 'admin'){
                                echo "<a href='admin.php' class='active'>Admin Area <span class='fa fa-terminal pull-right'></span></a>";
                            }else{
                                echo "<a href='admin.php'>Admin Area <span class='fa fa-terminal pull-right'></span></a>";
                            }
                            echo "</li>";
                        }
                        ?>
                    </div>
                    
                </ul>
                <footer style="position:fixed; bottom: 0; height:40px;"><center>&nbsp;Admin area <a href="login.php">Log in</a></center></footer>
            </div>   