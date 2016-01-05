<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 10/28/2015
 * Time: 10:41 AM
 */

require_once 'core/init.php';
?>


<!--nav-->
<div id="navbars">
    <nav class="navbar navbar-default" style="margin: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="homePage.php"><img id="img" src="images/logo.png" width="150px" ></a>
            </div>
            <div class="collapse navbar-collapse"  id="navbar-1" >
                <!--          inline form  -->
                <?php
                if(!isset($_SESSION['isLoggedIn'])|| $_SESSION['isLoggedIn']==false){
                    ?>
                    <div style="float: right">
                        <form action="homePage.php" method="POST" class="form-inline">
                            <div class="form-group">
                                <input class="form-control" required id="username" type="text" name="username" autocomplete="off" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" required id="password" type="password" name="password" autocomplete="off" placeholder="Enter password" size="25" maxlength="20"/>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Sign in" name="inlinesubmit"/>
                            <div class="">
                                <input type="checkbox"  name="remember"/> Remember me
                                <a href="forgetpass.php" title="To recover your password, click here" >Forgot password?</a>
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
                <!--           /inline form -->
                <ul class="nav navbar-nav">
                    <?php
                    if(!isset($_SESSION['isLoggedIn'])|| $_SESSION['isLoggedIn']==false){
                        ?>
                        <li>
                            <a href="login.php">LOGIN</a>
                        </li>
                        <li>
                            <a href="register.php">REGISTER</a>
                        </li>
                        <li>
                            <a href="about.php">ABOUT</a>
                        </li>
                        <li>
                            <a href="contact.php">CONTACT</a>
                        </li>
                    <?php
                    }else{
                    ?>
                    <li>
                        <a href="dashboard_student.php">DASHBOARD</a>
                    </li>
                    <li>
                        <a href="about.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="contact.php">CONTACT</a>
                    </li>
                </ul>
            <!--                button logout-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  LOGOUT</a></li>
                </ul>
                <!--                -->
            <?php
            $user = new user();
            $user_id = $user->data()->id;
            $userNotificationDet = DB::getInstance();
            $userNotificationDet->query('SELECT * FROM notification n, user_notification un WHERE un.uID = ? and n.nID = un.nID ORDER BY n.nID DESC',array($user_id));
            $count = $userNotificationDet->count();
            ?>
                <ul class="nav navbar-nav navbar-right" title="Notifications">
                    <div class="col-sm-2">
                        <li>
                            <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                <?php
                                if($count>0){
                                    ?>
                                    <i class="label label-danger col-sm-offset-5"><?php echo $count;?></i>
                                <?php
                                }else{
                                    ?>
                                    <i class="label label-info col-sm-offset-5"><?php echo $count;?></i>
                                <?php
                                }
                                ?>
                                <!--                        <span class="glyphicon glyphicon-bell"> NOTIFICATIONS</span>-->
                        <span class="glyphicon glyphicon-bell">


                        </span>
                            </a>
                            <ul class="dropdown-menu notifications navbar-default pre-scrollable" role="menu" aria-labelledby="dLabel" style="max-height: 300px;">
                                <div class="col-sm-12 ">
                                    <?php
                                    $resultSet = $userNotificationDet->results();
                                    if($count>0){
                                        foreach($resultSet as $n ){
                                            echo "<div class=''><p><strong>$n->topic</strong></p><p>$n->detail</p></div>";
                                        }
                                    }else{
                                        echo "<div class=''><p>No Notifications</p></div>";
                                    }

                                    ?>
                                </div>
                            </ul>
                        </li>
                    </div>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-user"></span> <?php echo $user->data()->username?></a></li>
                </ul>
            <?php
            }
            ?>
            </div>
        </div>
    </nav>
</div>
<!--nav-->

