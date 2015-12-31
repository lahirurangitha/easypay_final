<?php
/**
 * Created by PhpStorm.
 * User: Anjana
 * Date: 11/14/2015
 * Time: 2:21 PM
 */
require_once 'core/init.php';
require_once 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Due | Payments</title>
    <?php include 'headerScript.php'?>
</head>
<body>
<?php
include "header.php";
?>
    <div class="container-fluid backgroundImg">
        <div class="container col-lg-12 ">
<!--            nav-side-->
            <nav class="navbar-default navbar-side col-lg-3" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <li class="text-center">
                            <img src="images/User.png" class="user-image " height="150px"/>
                        </li>
                        <li>
                            <a class="active-menu"  href="dashboard_student.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="paymentHome.php"><i class="fa fa-dollar fa-3x"></i> Make a Payment</a>
                        </li>
                        <li>
                            <a href="update.php"><i class="fa fa-book fa-3x"></i> Update Details</a>
                        </li>
                        <li>
                            <a href="changepassword.php"><i class="fa fa-lock fa-3x"></i> Change Password</a>
                        </li>
                        <li>
                            <a href="changephonenumber.php"><i class="fa fa-phone fa-3x"></i> Change Phone Number</a>
                        </li>
                        <li>
                            <a href="duepayments.php"><i class="fa fa-phone fa-3x"></i> Due Payments</a>
                        </li>
                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <br>
            <div class="jumbotron col-lg-8 gap">
    <?php

    $user = new User();
    $indexNo=$user->data()->indexNumber;
//    echo $indexNo;
    $sql="SELECT sub_code,sub_name,aca_year,aca_sem from results WHERE repeat_status=1 and index_no=$indexNo ";
    $resultz=mysqli_query($conn,$sql); ?>
    <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <?php
                        if(mysqli_num_rows($resultz)<1){
                            echo "No results";

                        }
                        else{
                            ?>
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Subject Code</th>
                            <th>Subject Name</th>
                            <th>Academic Year</th>
                            <th>Semester</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php

                            $count=0;
                            while($row=mysqli_fetch_assoc($resultz)){
                                $count +=1;
                                $subject=$row["sub_code"];
                                echo"<tr>";
                                echo "<td>".$count."</td>";
                                echo "<td>".$row["sub_code"]."</td>";
                                echo "<td>".$row["sub_name"]."</td>";
                                echo "<td>".$row["aca_year"]."</td>";
                                echo "<td>".$row["aca_sem"]."</td>";
                                echo "<td>"."<form action='me_repeat.php' method='POST'><button type='submit' value='{$subject}' name='subject'>Pay</button></form>"; ?><?php "</td>";


                            }

                        }

?>
                        </tbody>
                    </table>
                </div>
        <input type="button" value="Get Admission"
               onclick="window.open('pdftest.php')">
    </div>
  </div>
</div>
                        <?php
    mysqli_close($conn);


?>
        </div>
</body>
</html>






