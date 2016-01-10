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
    <title>Due Payments | Page</title>
    <?php include 'headerScript.php'?>
</head>
<body>
<?php
include "header.php";
?>
<div class="backgroundImg container-fluid">
    <?php
    include "studentSidebar.php";
    ?>
            <br>
    <div class="container col-sm-9">
            <div class="panel panel-default ">
                <div class="panel-heading">
                    <h3><strong>Due Payments</strong></h3>
                </div>
                <div class="panel-body pre-scrollable">

    <?php
// start here
    $user = new User();
    $indexNo=$user->data()->indexNumber;

    $sql=DB::getInstance()->query2('SELECT sub_code,sub_name,aca_year,aca_sem from results WHERE index_no=? and repeat_status=1',array($indexNo));

    if (!$sql->count()){
        echo "<div class='alert alert-info'>No payments due</div>";
    }
// end here
    else{ ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject Code</th>
                                <th>Subject Name</th>
                                <th>Academic Year</th>
                                <th>Semester</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            //this is for check whether specific payment has already been made by the student
//start: edited here
                            $count = 0;
                            foreach ($sql->results() as $res) {
                                $sql2 = DB::getInstance()->query('SELECT * FROM repeat_exam WHERE indexNumber=? and subjectCode=? and (adminStatus=0 or adminStatus=1)', array($indexNo, $res->sub_code));
                                if (!$sql2->count()) {
                                    $count += 1;
                                    $subject = $res->sub_code;
                                    echo "<tr>";
                                    echo "<td>" . $count . "</td>";
                                    echo "<td>" . $res->sub_code . "</td>";
                                    echo "<td>" . $res->sub_name . "</td>";
                                    echo "<td>" . $res->aca_year . "</td>";
                                    echo "<td>" . $res->aca_sem . "</td>";
                                    //  echo "<td>" . "<form action='me_repeat.php' method='POST'><button type='submit' value='{$subject}' name='subject'>Pay</button></form>";
                                    ?><?php "</td>";
                                    echo "<td>" . "<a href='me_repeat.php?var=$subject'><button class=\"btn btn-default col-sm-12\">Pay</button></a>";
//end here

                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <?php


        }
?>
</div>
        </div>
<?php
include "footer.php";
?>



</body>
</html>





