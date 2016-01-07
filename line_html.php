<?php
require_once 'core/init.php';
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
    <br>
    <div class="container col-sm-9" >
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><strong>Payment Statistics</strong></h3>
            </div>
            <div class="box-body" align="center">
                <?php
                ///
                $user  = new User();
                $transaction = new Transaction();

                if(!$user->isLoggedIn()){Redirect::to('index.php');}
                if(!$user->hasPermission('admin')){Redirect::to('index.php');}
                $x = '2015';
                if(Input::exists()){
                    $x = Input::get('selector');
                } else {
                    $x = '2015';
                }
                $sql = "SELECT * FROM transaction WHERE date LIKE '$x%'";
                $traData = DB::getInstance()->query($sql);
                //print_r($traData);
                $tmp = $traData->results();
                //    print_r($tmp);
                $arr = array();
                foreach ($tmp as $t){
                    $tmp = $t->date[5].$t->date[6];
                    array_push($arr,$tmp);
                }
                $cnt = array(
                    '01'=>0,
                    '02'=>0,
                    '03'=>0,
                    '04'=>0,
                    '05'=>0,
                    '06'=>0,
                    '07'=>0,
                    '08'=>0,
                    '09'=>0,
                    '10'=>0,
                    '11'=>0,
                    '12'=>0
                );
                $tmp1 = array_count_values($arr);
                $cnt = array_replace($cnt,$tmp1);
                //    print_r($cnt);
                ?>
                <div class="col-sm-2">
                    <form name="data" action="" method="post">
                        <select name="selector" class="form-control" onchange="">
                            <?php
                            for($i = 2015 ; $i < date('Y')+1; $i++){
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <br>
                        <button class="btn btn-primary btn-xs col-sm-12" type="submit" value="Generate">Generate graph</button>
                    </form>
                </div>

                <div style="width:50%">
                    <div>
                        <canvas id="canvas" height="450" width="600"></canvas>
                    </div>
                </div>

                <script>
                    var phpCnt = <?php echo json_encode($cnt); ?>;
                    var randomScalingFactorDB = function(i){ return phpCnt[i]};
                    //    var randomScalingFactor = function(){ return Math.round(Math.random()*10)};
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

            </div>
        </div>

    </div>
</div>
<?php
include "footer.php";
?>



</body>
</html>