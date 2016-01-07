<?php
/**
 * Created by PhpStorm.
 * User: lasith-niro
 * Date: 17/10/15
 * Time: 07:53
 */

require_once 'core/init.php';
if(!$_SESSION['isLoggedIn']) {
    Redirect::to('index.php');
}
if($_SESSION['student']){
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
        <div class="row">
            <div class="col-sm-6">
                <h2>Admin Dashboard</h2>
                <h5>Welcome <?php echo $_SESSION['fname']." ".$_SESSION['lname']?></h5>
            </div>
        </div>

        <hr />
        <div id="rAppPanel" class="container col-sm-8">
            <div class="d_icon">
                <a href="coord_RejectedRepeatApplications.php">
                <?php
                $appCount = DB::getInstance()->get('repeat_exam',array('adminStatus','=',0));
                $count = $appCount->count();
                ?>
                <div class="col-lg-offset-5"><span class="label label-danger "><?php echo $count;?></span></div>

                    <img src="images/notification.png" height="100px">

                    <div>
                        <label>Rejected Repeat Exam Applications</label>
                    </div>
                </a>
            </div>
<!--      chart      -->
            <div class="d_icon">
                <a href="line_html.php">
                    <img src="images/chart.png" height="120px">

                    <div>
                        <label>Payment Statistics</label>
                    </div>
                </a>
            </div>
<!-- chart end-->
        </div>
        <div id="nPanel" class="container col-sm-4">

        </div>

    </div>
</div>
<?php
include "footer.php";
?>

</body>
</html>