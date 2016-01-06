<?php
/**
 * Created by PhpStorm.
 * User: lahiru
 * Date: 11/14/2015
 * Time: 9:21 PM
 */
require_once 'core/init.php';

$id = $_GET['id'];
$subCode=$_GET['subCode'];
$subName=$_GET['subName'];
$username=$_GET['username'];
$subject="Regarding to repeat Application";

$mailObject =new Mail();
$acceptMSG= "Dear Student, Your Repeat Examination application on"." ". $subCode." ". $subName. " " . " has been Accepted";
$ignoreMSG= "Dear Student, Your Repeat Examination application on"." ". $subCode." ". $subName. " " . " has been ignored. Please meet your course coordinator";


$catchMail=DB::getInstance()->get('users',array('username','=',$username));
$res=$catchMail->results()[0];
$user = new User();
$mail= $res->email;

$id = $_GET['id'];
if(isset($_GET['accept'])){
    if($_GET['accept']==true){
        $tdb1 = DB::getInstance()->update('repeat_exam',$id,array('adminStatus' => 1));
        $mailObject ->sendMail($mail,$subject,$acceptMSG);
        Redirect::to('admin_repeatExamApplication.php');
    }
}
if(isset($_GET['reject'])){
    if($_GET['reject']==true){
        $tdb1 = DB::getInstance()->update('repeat_exam',$id,array('adminStatus' => 2));
        $mailObject ->sendMail($mail,$subject,$ignoreMSG);
        Redirect::to('admin_repeatExamApplication.php');
    }
}