<?php
/**
 * Created by PhpStorm.
 * User: Anjana
 * Date: 11/14/2015
 * Time: 11:43 PM
 */

require_once 'core/init.php';
require_once 'dbcon.php';

require_once 'fpdf/fpdf.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admission | Card</title>
</head>
</html>
<?php
$user = new User();
$indexNo=$user->data()->indexNumber;
$sql3="SELECT name_full,reg_no,years,semester,cs_is from u_student WHERE  index_no=$indexNo ";
$resultz3=mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_assoc($resultz3);
$name = $row3['name_full'];
$reg = $row3['reg_no'];
$years = $row3['years'];
$years -=1;
$sem = $row3['semester'];
$deg=$row3['cs_is'];
$degree='';
$semester='';
$year_word='';
if($deg==1){
    $degree ='Computer Science';
}
else if($deg==0){
    $degree='Information Systems';
}
if($sem==1){
    $semester='First Semester';
}
else if($sem==2){
    $semester='Second Semester';
}
switch($years){
    case 0:
        $year_word='First Year';
        break;
    case 1:
        $year_word='Second Year';
        break;
    case 2:
        $year_word='Third Year';
        break;
    case 3:
        $year_word='Fourth Year';
        break;
}


    //include "header.php";
    //Assuming that the subject code is passed through button pressing

    $sql="SELECT sub_code,sub_name from results WHERE repeat_status=1 and index_no=$indexNo ";
    $resultz=mysqli_query($conn,$sql); ?>

                <?php
                if(mysqli_num_rows($resultz)<1){
                    echo "No results";
                }
                else {
                    $subjects = array();
                    while ($row = mysqli_fetch_assoc($resultz)) {
                        $subject = $row['sub_code'];
                        array_push($subjects, $subject);
                    }


                    $examination = $year_word . " " . $semester . " " . $degree . " " . "Degree Programme";
                    $image = "images/ucsc.png";
                    $pdf = new FPDF();
                    $pdf->AddPage();
                    $pdf->Image($image, 90, 7.5, 23);

//                    $pdf->SetFont("Arial", "B", "18");
//                    $pdf->Cell(0, 60, "UNIVERSITY OF COLOMBO, SRI LANKA", 0, 1, "C");

                    $pdf->SetFont("Arial", "B", "15");
                    $pdf->Cell(0, 60, "University of Colombo School of Computing", 0, 1, "C");
                    $pdf->SetFont("Arial", "", "12");
                    $pdf->Cell(0, -45, "Repeat Examination Admission Card", 0, 1, "C");
                    $pdf->Line(20, 55, 190, 55);


                    $pdf->SetY(60);
                    $pdf->SetX(15);
                    $pdf->SetFont("Arial", "B", 11);
                    $pdf->Cell(50, 10, "   Examination", 1, 0);
                    $pdf->SetFont("Arial", "", 11);
                    $pdf->Cell(135, 10, $examination, 1, 1);

                    $pdf->SetX(15);
                    $pdf->SetFont("Arial", "B", 11);
                    $pdf->Cell(50, 10, "   Name of the Candidate", 1, 0);
                    $pdf->SetFont("Arial", "", 11);
                    $pdf->Cell(135, 10, $name, 1, 1);

                    $pdf->SetX(15);
                    $pdf->SetFont("Arial", "B", 11);
                    $pdf->Cell(50, 10, "   Index Number", 1, 0);
                    $pdf->SetFont("Arial", "", 11);
                    $pdf->Cell(135, 10, $indexNo, 1, 1);

                    $pdf->SetX(15);
                    $pdf->SetFont("Arial", "B", 11);
                    $pdf->Cell(50, 10, "   Year of the Exam", 1, 0);
                    $pdf->SetFont("Arial", "", 11);
                    $pdf->Cell(135, 10, $year_word . " Repeat", 1, 1);

                    $pdf->SetX(15);
                    $pdf->SetFont("Arial", "B", 11);
                    $pdf->Cell(50, 10, "   Semester", 1, 0);
                    $pdf->SetFont("Arial", "", 11);
                    $pdf->Cell(135, 10, $semester, 1, 1);

                    $pdf->SetY(115);

                    $pdf->SetFont("Arial", "BU", 11);
                    $pdf->Cell(18, 14, "General Conditions", 0, 1);

                    $pdf->SetFont("Arial", "", 10);
                    $pdf->Cell(5, 8, "1. No candidates will be admitted to the Examination hall without this card and the student ID card.", 0, 1);
                    $pdf->Cell(5, 8, "2. All specimen signatures must be clearly placed in ink.", 0, 1);
                    $pdf->Cell(5, 4, "3. Candidates should adhere to the rules of the examinations given in the examination procedure(printed in the reverse side ", 0, 1);
                    $pdf->Cell(5, 4, "    of the admission card). In case the supervisor has a reasonable doubt that a candidate has committed an examination ", 0, 1);
                    $pdf->Cell(5, 4, "    offence, the candidate should furnish a written statement on the offence committed when requested by the supervisor. ", 0, 1);

                    $pdf->SetY(160);

                    $pdf->SetFont("Arial", "BU", 11);
                    $pdf->Cell(18, 14, "Declaration by the Candidate", 0, 1);

                    $pdf->SetFont("Arial", "", 10);

                    $pdf->Cell(5, 4, "    I agreed to abide by the above conditions and to adhere to the rules of examination. I am also aware of the punishments  ", 0, 1);
                    $pdf->Cell(5, 4, "    for examination offences. ", 0, 1);

                    $pdf->SetY(190);
                    $pdf->SetX(48);
                    $pdf->Cell(32, 11, "20-06-2015", 1, 0,"C");
                    $pdf->Cell(34, 11, "", 1, 0);
                    $pdf->Cell(47, 11, "", 1, 1);
                    $pdf->SetX(48);
                    $pdf->SetFont("Arial", "B", 10);
                    $pdf->Cell(32, 11, "Date of issue", 1, 0,"C");
                    $pdf->Cell(34, 11, "SAR/Examinations", 1, 0,"C");
                    $pdf->Cell(47, 11, "Signature of the Candidate", 1, 1);


                    $pdf->SetY(220);
                    $pdf->SetFont("Arial", "B", 11);
                    $pdf->Cell(27, 10, " Date", 1, 0);
                    $pdf->Cell(28, 10, " Time", 1, 0);
                    $pdf->Cell(27, 10, " Subject", 1, 0);
                    $pdf->Cell(28, 10, " Place", 1, 0);
                    $pdf->Cell(42, 10, " Candidate Signature", 1, 0);
                    $pdf->Cell(42, 10, " Supervisor Signature", 1, 1);

                    $pdf->SetFont("Arial", "B", 10);

                    foreach ($subjects as $sub) {
                        //                            echo $sub;
                        $sql2 = "SELECT dates,times,place from exam_date_time WHERE sub_code='$sub' ";

                        $resultz2 = mysqli_query($conn, $sql2);

                        if (!$resultz2) {
                            echo "nothing selected";
                        }
                        $row2 = mysqli_fetch_assoc($resultz2);

                        $date = $row2['dates'];
                        $time = $row2['times'];
                        $place = $row2['place'];

                        $pdf->SetFont("Arial", "", 11);
                        $pdf->Cell(27, 10, $date, 1, 0);
                        $pdf->Cell(28, 10, $time, 1, 0);
                        $pdf->Cell(27, 10, $sub, 1, 0);
                        $pdf->Cell(28, 10, $place, 1, 0);
                        $pdf->Cell(42, 10, "", 1, 0);
                        $pdf->Cell(42, 10, "", 1, 1);
                    }
                    $pdf->SetFont("Arial", "B", 10);
                    $pdf->Cell(1, 15, "    Warning: Students are not supposed to write anything other than their signature in this page or on the   ", 0, 1);
                    $pdf->Cell(1, 0, "                     reverse side.  ", 0, 1);
                    $pdf->Output();
                    ob_end_clean();
                }
?>







