<?php
/**
 * Created by PhpStorm.
 * User: lasith-niro
 * Date: 18/10/15
 * Time: 14:25
 */
require_once 'core/init.php';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Notification | Page</title>
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
    <br>
<div class="container col-lg-9">
<?php
$user = new User();
$notification = new Notification();
$send_date = date("d/m/y h:i:s");
if(!$user->isLoggedIn()){Redirect::to('index.php');}
//check for admin
if (!$user->hasPermission('admin')) {Redirect::to('index.php');}
$myNotifyID = $_SESSION['dID'];

if(!isset($_POST['batch'])){
    $Syear = Input::get('Nyear');
    foreach((array)$Syear as $y){
        $dataSt = $notification->getBatch($y);
        foreach((array)$dataSt as $d){
            $userID = $d->id;
            $notification->insertUN(array(
                    'nID'=> $myNotifyID,
                    'uID' => $userID,
                    'send_date' => $send_date
                )
            );
        }
    }
}
//code for repeat exam student part
if(Input::get('Submit-repeat-all-student')){
    if(Input::exists()){
        $dataSet = $notification->getRepeatStudent();
//    print_r($dataSet);
        foreach((array)$dataSet as $d){
            $index = $d->index_no;
            $userObjet = $notification->getUserID($index);
            foreach((array)$userObjet as $uo){
                $userID = $uo->id;
//            echo $userID."<br />";
              $notification->insertUN(array(
                    'nID'=> $myNotifyID,
                    'uID' => $userID,
                    'send_date' => $send_date
                )
            );
        }
    }
}
}

if(isset($_GET['user'])){
    $userID = $_GET['user'];
    $notification->insertUN(array(
            'nID'=> $myNotifyID,
            'uID' => $userID,
            'send_date' => $send_date
        )
    );
}

?>
    <div class="container col-lg-12">
        <label for="text1">Send to<br></label>
    </div>
<div class="container col-lg-3">
    <?php

    ?>
    <form name="batch" action="" method="post">
        <h4> Year wise </h4>
        <li><input type="checkbox" name="Nyear[]" value="<? echo escape('1')?>" /> First Years <br></li>
        <li><input type="checkbox" name="Nyear[]" value="<? echo escape('2')?>" /> Second Years <br></li>
        <li><input type="checkbox" name="Nyear[]" value="<? echo escape('3')?>" /> Third Years <br></li>
        <li><input type="checkbox" name="Nyear[]" value="<? echo escape('4')?>" /> Fourth Years <br></li>
        <input type = "hidden" name="token_batch" value="<?php echo Token::generate(); ?>">
        <input class="btn btn-default" type="submit" name="Submit-batch" value="Submit" />
    </form>
</div>

    <div class="container col-lg-3">
        <form name="repeat-all-student" action="" method="post">
            <h4>All repeat students: </h4>
            <li><input type="checkbox" name="repStu" value="<? echo escape('1')?>" />All repeat students<br></li>
            <input type = "hidden" name="token_repeat-all" value="<?php echo Token::generate(); ?>">
            <input class="btn btn-default" type="submit" name="Submit-repeat-all-student" value="Submit" />
        </form>
    </div>
    <div class="container col-lg-4 ">

    <form name="selected-student" action="" method="post">
        <h4>Selected student</h4>
        <div>
            <div>
                <input class="form-control" type="text" id="search" placeholder="Enter username to search" autocomplete="off" name="search" value="<?php echo Input::get('search')?>" onkeyup="autoSuggest('result','search_for_notification.php');"  />
                <div>
                    <ul id="result" class="nav navbar" ></ul>
                </div>
            </div>
            <div>
                <?php
                if(isset($msg)){
                    echo "<div class='alert alert-danger'>$msg</div>";
                }
                ?>
            </div>
        </div>
        <input type = "hidden" name="token_selected_student" value="<?php echo Token::generate(); ?>">
    </form>
    </div>
    </div>
</div>

<?php
include "footer.php";
?>

</body>
</html>