<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 10/16/2015
 * Time: 12:51 PM
 */

require_once 'core/init.php';

if(!$_SESSION['isLoggedIn']==true){
    Redirect::to('login.php');
}
if($_SESSION['admin']==false){
    Redirect::to('dashboard_student.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Dashboard</title>
    <?php include 'headerScript.php'?>
</head>
<body>
<div id="wrapper">
    <?php
    include "header.php";
    ?>
</div>
<div class="backgroundImg container-fluid">
    <?php
    include "adminSidebar.php";
    ?>
    <div class="container col-sm-9">
        <br>
<?php
$user = new user();
$searchUser = Input::get('username');
$userDet = DB::getInstance();
$userDet->get('users',array('username','=',$searchUser));
$result = $userDet->results()[0];
//print_r($result);


?>
        <div class="col-sm-4">
            <div class="">
                <h3><?php echo $searchUser?>'s Profile Details</h3>
            </div>

            <div class="" id="userDetails">
                <p>User ID:<?php echo "\t".$result->id;?></p>
                <p>Username:<?php echo "\t".$result->username;?></p>
                <!--    <p>Password:--><?php //echo "\t".$result->password;?><!--</p>-->
                <p>Index No:<?php echo "\t".$result->indexNumber;?></p>
<!--                <p>Registration No:--><?php //echo "\t".$result->regNumber;?><!--</p>-->
                <p>First Name:<?php echo "\t".$result->fname;?></p>
                <p>Last Name:<?php echo "\t".$result->lname;?></p>
                <p>NIC No:<?php echo "\t".$result->nic;?></p>
                <p>Mobile No:<?php echo "\t".$result->phone;?></p>
                <p>Date of Birth:<?php echo "\t".$result->dob;?></p>
                <p>E-mail:<?php echo "\t".$result->email;?></p>
            </div>
                <div class="col-sm-12">
                    <form action="" method="post">
                    <input class="btn btn-primary" type="submit" name="u1" value="Update User">
                    </form>
                </div>
            </div>
            <?php

            if(isset($_POST['u1'])) {
                ?>
                <div class="jumbotron col-sm-8">
                    <div id="updateForm">
                        <form action="" method="post" xmlns="http://www.w3.org/1999/html">
                            <h3><strong>Update</strong></h3>
                            <div class="gap">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username"  value="<?php echo escape($result->username); ?>">
                            </div>
                            <div class="gap">
                                <label>Index Number</label>
                                <input class="form-control" type="number" name="indexNumber" value="<?php echo escape($result->indexNumber); ?>">
                            </div>
                            <div class="gap">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="fname" value="<?php echo escape($result->fname); ?>">
                            </div>

                            <div class="gap">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="lname" value="<?php echo escape($result->lname); ?>">
                            </div>

                            <div class="gap">
                                <label>E-mail</label>
                                <input class="form-control" type="email" name="email" value="<?php echo escape($result->email); ?>">
                            </div>

                            <div class="gap">
                                <label>NIC</label>
                                <input class="form-control" type="text" name="nic" value="<?php echo escape($result->nic);?>">
                            </div>

                            <div class="gap">
                                <label>Date of birth</label>
                                <input class="form-control" type=date name="dob" value="<?php echo escape($result->dob);?>">
                            </div>

                            <div class="gap">
                                <label>Academic Year</label>
                                <input class="form-control" type="number" name="year" value="<?php echo escape($result->year);?>">
                            </div>

                            <input class="btn btn-default" id="submit" type="submit" value="Update">

                            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                        </form>
                        <br>
                        <div class="inline">
                            <div class="col-sm-6">
                                <a href=""><strong>Change Password >></strong></a>
                            </div>
                            <div class="col-sm-6">
                                <a href=""><strong>Change Mobile Number >></strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
</body>

</html>