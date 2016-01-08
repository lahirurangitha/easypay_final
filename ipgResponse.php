<?php
/**
 * Created by PhpStorm.
 * User: lasith-niro with surangi-edirisinghe
 * Date: 26/08/15
 * Time: 09:10
 */
require_once 'core/init.php';
require 'payment/decrypt.php';
/*
 * transaction type codes
 * 1 : UCSC registration fee
 * 2 : New academic year fee
 * 3 : Repeat exam fee
 */
$user = new User();
$dec = new decrypt();
$transaction = new Transaction();
$transaction_tmp = new Transaction();
if(!$user->isLoggedIn()){
    Redirect::to('index.php');
}
$email = $user->data()->email;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Dashboard</title>
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
    include "studentSidebar.php";
    ?>
    <div class="col-sm-9">
        <br>
        <div class="col-sm-8 col-sm-offset-1">
            <?php
            $encrypted = $_POST['merchantReciept'];
            $decryptObject = $dec->decode($encrypted);
            //print_r($decryptObject);
            $decArray = explode('|',$decryptObject);
            //print_r($decArray);
            //Declare and assign values to variables
            //data from ezcash server
            $transactionID     = $decArray[0];
            $statusCode        = $decArray[1];
            $statusDescription = $decArray[2];
            $transactionAmount = $decArray[3];
            $merchantCode      = $decArray[4];
            $walletReferenceID = $decArray[5];
            $userId            = $user->data()->id;
            $curDate           = date("Y-m-d");
            $curTime           = date("h:i:sa");
            //data from the session
            $paymentType = $_SESSION['type'];
            $de_transactionID = $transaction->decodeEasyID($transactionID);
            $f = $user->data()->fname;
            $l = $user->data()->lname;
            $name = $f." ".$l;

            if(isset($_SESSION['payeeID'])){
                $payeeID = $_SESSION['payeeID'];
            }else{
                $payeeID = $userId;
            }
            $transaction->create(array(
                'transactionID' => $de_transactionID,
                'payeeID' => $payeeID,
                'payerID' => $userId,
                'date' => $curDate,
                'time' => $curTime,
                'statusCode' => $statusCode,
                'walletRefID' => $walletReferenceID,
                'statusDescription' => $statusDescription,
                'amount' => $transactionAmount
            ));
            $type = "";
            switch($statusCode){
                case 2: //Completed transaction
                    ////Type success code here
                    $str = "<div class='alert alert-info'>Transaction is completed. Payment receipt will be sent to your email <i>$email </i>. You can also download it by clicking the download button below.</div>";
                    if($paymentType === 1){
                        $type = "UCSC registration fee";
                        //payment type = UCSC registration fee
                        $t = DB::getInstance()->query('UPDATE ucsc_registration SET paymentStatus = 1 WHERE transactionID = ?',array($de_transactionID));
                    }
                    elseif($paymentType === 2){
                        $type = "New academic year fee";
                        //payment type = New academic year fee
                        $t = DB::getInstance()->query('UPDATE new_academic_year SET paymentStatus = 1 WHERE transactionID = ?',array($de_transactionID));
                    }
                    elseif($paymentType === 3){
                        //payment type = Repeat exam fee
                        $type = "Repeat exam fee";
                        $t = DB::getInstance()->query('UPDATE repeat_exam SET paymentStatus = 1 WHERE transactionID = ?',array($de_transactionID));
                    }
                    break;
                case 3: //Failed
                    $str = "<div class='alert alert-error'>Transaction failed.</div>";
                    break;
                case 4: //System error
                    $str = "<div class='alert alert-error'>System error</div>";
                    break;
                case 5: //Invalid customer
                    $str = "<div class='alert alert-error'>User authentication failed</div>";
                    break;
                case 6: //invalid customer status
                    $str = "<div class='alert alert-error'>Customer status invalid</div>";
                    break;
                case 7: //customer account lock
                    $str = "<div class='alert alert-error'>Your eZcash account is locked</div>";
                    break;
                case 8: //Invalid transaction type
                    $str = "<div class='alert alert-error'>Transaction type invalid</div>";
                    break;
                case 9: //Unothorized transaction type
                    $str = "<div class='alert alert-error'>Transaction type unauthorized</div>";
                    break;
                case 10: //Invalid agent
                    $str = "<div class='alert alert-error'>Agent invalid</div>";
                    break;
                case 11: //Invalid agent status
                    $str = "<div class='alert alert-error'>Agent status invalid</div>";
                    break;
                case 12: //Entered amount is not in between max or min limits
                    $str = "<div class='alert alert-error'>Entered amount is not in between max or min limits</div>";
                    break;
                case 13: //eMoney transaction failure
                    $str = "<div class='alert alert-error'>eMoney calculation failure</div>";
                    break;
                case 14: //Transaction committing failure
                    $str = "<div class='alert alert-error'>Transaction committing failure</div>";
                    break;
                case 15: //Customer account blocked due to invalid PIN retries
                    $str = "<div class='alert alert-error'>Your account is blocked due to invalid PIN retries</div>";
                    break;
                case 16: //Active session expired
                    $str = "<div class='alert alert-error'>Active session expired</div>";
                    break;
                //    default:
                //        echo "Transaction failed";
            }
            /*
             * create session variables for receipt
             */
            $_SESSION['traID'] = $transactionID;
            $_SESSION['sName'] = $name;
            $_SESSION['pType'] = $type;
            $_SESSION['stts'] = $statusDescription;
            $_SESSION['amnt'] = $transactionAmount;

            echo "$str";
            echo "<button class='btn btn-primary btn-xs' onclick='window.open('transactionReciept.php')' style='float: right'>Download Receipt</button>";
            ?>
            <!--                <a href="index.php"><button>Back to Dashboard</button></a>-->


        </div>
    </div>
</div>
<?php
include "footer.php";
?>

</body>
</html>