<?php
/**
 * Created by PhpStorm.
 * User: lasith-niro
 * Date: 16/10/15
 * Time: 20:00
 */

require_once 'core/init.php';
require 'Files/accessFile.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Admission appearing Date</title>
    <?php include 'headerScript.php'?>
</head>
<body>

<?php
include "header.php";
?>
<?php include 'adminSidebar.php'?>
<div class="backgroundImg container-fluid">
    <br>
    <div class="jumbotron col-lg-5 col-lg-offset-1">
        <?php

        $user = new User();
        $fObject = new accessFile();
        if(!$user->isLoggedIn()){
            Redirect::to('index.php');
        }
        //check for admin
        if ($user->hasPermission('admin')) {
        $inFile = $fObject->read('Files/admissionActivate');
        $inDate1 = $inFile[0];
        $inDate2 = $inFile[1];


        if(Input::exists()){
            if(Token::check(Input::get('token'))) {
                $newDate= Input::get('date1');
                $newAmount=Input::get('date2');

                $outData = $newDate . " " . $newAmount;
                $fObject->write('Files/admissionActivate', $outData);
                Redirect::to('edit_admissionActivation.php'); //refresh the page

            }
        }
        ?>

        <form action="" method="post">
            <div class="field">
                <label>Enter the new date</label>
                <input class="form-control" type="date" name="date1" id="date1" value="<?php echo($inDate1)?>">
            </div>

            <div class="field">
                <label>Enter the new amount</label>
                <input class="form-control" type="date" name="date2" id="date2" value="<?php echo($inDate2)?>" >
            </div>

            <input class="btn btn-default" type="submit" value="Save">
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
        </form>
    </div>
</div>
<?php
} else {
    Redirect::to('index.php');
}
include "footer.php";
?>

</body>
</html>
