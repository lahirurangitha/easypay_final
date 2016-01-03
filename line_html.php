<?php
/**
 * Created by PhpStorm.
 * User: Surangi-Edirisinghe
 * Date: 1/3/16
 * Time: 8:39 PM
 */
require_once 'core/init.php';
$user  = new User();
$transaction = new Transaction();

if(!$user->isLoggedIn()){Redirect::to('index.php');}
if(!$user->hasPermission('admin')){Redirect::to('index.php');}
$sql = "SELECT * FROM transaction";
$traData = DB::getInstance()->query($sql);
//print_r($traData);
$tmp = $traData->results();
$arr = array();
foreach ($tmp as $t){
    $tmp = $t->date[5].$t->date[6];
    array_push($arr,$tmp);
}
$cnt = array(
    01=>0,
    02=>0,
    03=>0,
    04=>0,
    05=>0,
    06=>0,
    07=>0,
    8=>0,
    9=>0,
    10=>0,
    11=>0,
    12=>0
);
$tmp = array_count_values($arr);
$cnt = array_replace($cnt,$tmp);
//print_r($cnt);
//print_r($arr);

?>
<!doctype html>
<html>
<head>
    <title>Line Chart</title>
    <script src="js/Chart.js"></script>
</head>
<body>
<div style="width:30%">
    <div>
        <canvas id="canvas" height="450" width="600"></canvas>
    </div>
</div>

<script>
    var phpCnt = <?php echo json_encode($cnt); ?>;
    var randomScalingFactorDB = function(i){ return phpCnt[i]};
    var randomScalingFactor = function(){ return Math.round(Math.random()*10)};
    var lineChartData = {
        labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
        datasets : [
            {
                label: "My First dataset",
                fillColor : "rgba(151,187,205,0.2)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                pointHighlightFill : "#fff",
                pointHighlightStroke : "rgba(151,187,205,1)",
                data : [randomScalingFactorDB("01"), //jan
                    randomScalingFactorDB("02"), //feb
                    randomScalingFactorDB("03"), //march
                    randomScalingFactorDB("04"), //april
                    randomScalingFactorDB("05"), //may
                    randomScalingFactorDB("06"), //june
                    randomScalingFactorDB("07"), //jule
                    randomScalingFactorDB("08"), //aug
                    randomScalingFactorDB("09"), //sept
                    randomScalingFactorDB("10"), //oct
                    randomScalingFactorDB("11"), //nov
                    randomScalingFactorDB("12")] //dec
            }
        ]

    }
    window.onload = function(){
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx).Line(lineChartData, {
            responsive: true
        });
    }

</script>
</body>
</html>