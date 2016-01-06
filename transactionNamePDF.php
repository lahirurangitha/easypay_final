<?php
/**
 * Created by PhpStorm.
 * User: Anjana
 * Date: 1/6/2016
 * Time: 1:40 PM
 */
require_once 'core/init.php';
require_once 'fpdf/fpdf.php';

if(isset($_SESSION['name1'])) {

    $name1 = $_SESSION['name1'];
    $image = "images/ucsc.png";
    date_default_timezone_set("Asia/Colombo");
    $date_now = date("Y-m-d");
    $time_now = date("h:i:sa");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->Image($image, 90, 7.5, 23);
    $pdf->SetFont("Arial", "B", "15");
    $pdf->Cell(0, 60, "University of Colombo School of Computing", 0, 1, "C");
    $pdf->SetY(50);
    $pdf->SetFont("Arial", "", "11");
    $pdf->Cell(0, 5, "All Transactions done by " . $name1, 0, 1);
    $pdf->SetFont("Arial", "", "9");

    $pdf->Cell(0, 5, "Issued Date: " . $date_now."     Time: ".$time_now, 0, 1);
 //   $pdf->Cell(0, 5, "Time: " . $time_now, 0, 0);

    $NameTra = DB::getInstance()->query('SELECT * From transaction t,users u WHERE u.username = ? and t.payerID = u.id',array($name1));

    if (!$NameTra->count()){
        // echo 'No transactions';
        $pdf->Cell(0, 60, "No transactions found", 0, 1, "C");
    }else{

        $pdf->SetY(65);
        $pdf->SetFont("Arial", "B", 10);
        $pdf->Cell(10, 10, " No.", 1, 0);
        $pdf->Cell(30, 10, " Transaction ID", 1, 0);
        $pdf->Cell(28, 10, " Date", 1, 0);
        $pdf->Cell(28, 10, " Time", 1, 0);
        $pdf->Cell(35, 10, " Payment type", 1, 0);
        $pdf->Cell(40, 10, " Status", 1, 0);
        $pdf->Cell(20, 10, " Amount", 1, 1);

        $counter = 0;
        foreach ($NameTra->results() as $t) {
            $counter += 1;
            $date = $t->date;
            $time = $t->time;
            $transactionID = $t->transactionID;
            $paymentType = $t->paymentType;
            $status = $t->statusDescription;
            $amount = $t->amount;

            $newID = Transaction::encodeEasyID("easyID_", $transactionID);

            $pdf->Cell(10, 10, $counter, 1, 0);
            $pdf->Cell(30, 10, $newID, 1, 0);
            $pdf->Cell(28, 10, $date, 1, 0);
            $pdf->Cell(28, 10, $time, 1, 0);
            $pdf->Cell(35, 10, $paymentType, 1, 0);
            $pdf->Cell(40, 10, $status, 1, 0);
            $pdf->Cell(20, 10, "Rs.".$amount.".00", 1, 1);
        }

    }
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetTextColor(255, 192, 203);

    $pdf->Text(160, 10, "www.easypaysl.com");

    $pdf->Output();
    ob_end_clean();

}
?>