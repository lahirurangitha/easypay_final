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

switch($statusCode){
    case 2: //Completed transaction
    ////Type success code here
        $str = "transaction success";
        if($paymentType === 1){
                   //payment type = UCSC registration fee
            $t = DB::getInstance()->query('UPDATE ucsc_registration SET paymentStatus = 1 WHERE transactionID = ?',array($de_transactionID));
        }
        elseif($paymentType === 2){
                    //payment type = New academic year fee
            $t = DB::getInstance()->query('UPDATE new_academic_year SET paymentStatus = 1 WHERE transactionID = ?',array($de_transactionID));
        }
        elseif($paymentType === 3){
                    //payment type = Repeat exam fee
            $t = DB::getInstance()->query('UPDATE repeat_exam SET paymentStatus = 1 WHERE transactionID = ?',array($de_transactionID));
        }
//        Redirect::to('index.php');
        break;
    case 3: //Failed
        $str = "Transaction failed";
        break;
    case 4: //System error
        $str = "System error";
        break;
    case 5: //Invalid customer
        $str = "User authentication failed";
        break;
    case 6: //invalid customer status
        $str = "Customer status invalid";
        break;
    case 7: //customer account lock
        $str = "Your ezcash account is locked";
        break;
    case 8: //Invalid transaction type
        $str = "Transaction type invalid";
        break;
    case 9: //Unothorized transaction type
        $str = "Transaction type unothorized";
        break;
    case 10: //Invalid agent
        $str = "Agent invalid";
        break;
    case 11: //Invalid agent status
        $str = "Agent status invalid";
        break;
    case 12: //Entered amount is not in between max or min limits
        $str = "Entered amount is not in between max or min limits";
        break;
    case 13: //eMoney transaction failure
        $str = "eMoney transaction failed";
        break;
    case 14: //Transaction committing failure
        $str = "Failed transaction committing";
        break;
    case 15: //Customer account blocked due to invalid PIN retries
        $str = "Your account is blocked due to invalid PIN retries";
        break;
    case 16: //Active session expired
        $str = "Active session expired";
        break;
        //    default:
        //        echo "Transaction failed";
}

echo "<div class='alert alert-success'>$str</div>";
?>
        <a href="index.php"><button>Back</button></a>



    </div>
</div>
<?php
include "footer.php";
?>

</body>
</html>