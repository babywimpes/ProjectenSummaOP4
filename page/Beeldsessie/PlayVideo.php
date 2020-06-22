<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>

    <?php include "../../incl/include.php" ?>
    <?php include "../../incl/connect.php" ?>
    <style>
  .top-buffer{
            margin-top: 100px;
        }
        .circ{
            border-radius: 50%;
            height: 55px;
            width: 55px;
        }
        .dot {
  height: 55px;
  width: 55px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
    </style>
</head>

<body>
    <div class="main">
        <div class=" d-flex justify-content-center">
            <?php
            
            $videoId ="eC7f9tMslVE";

            echo '<iframe width="1560" height="677" src="https://www.youtube.com/embed/'.$videoId.'?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            ?>
        </div>
    </div>

    <div class="col text-center mb-5 mt-2" id="names">

    </div>

    <label id="seconds">0</label>

    <?php
        session_start();
    ?>
    <script>
        $(document).ready(function(){

            var session = eval('(<?php echo json_encode($_SESSION["my_array"])?>)');
            console.log(session);

            var i;
            for (i = 0; i < session.length; i++) {

            $("#names").append('<button onclick="Timestamped();" class="btn btn-primary btn-lg circ ml-4"><i class="fas fa-user"></i><p style="color:black;">'+session[i]+'</p></button>');
            }

        });
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        var clickedTime = [];
        var Stampss ;
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;

        setInterval(setTime, 1000);

        function setTime() {
        ++totalSeconds;
        var StartStamp = totalSeconds - 5;
        var EndStamp = totalSeconds + 5;
        secondsLabel.innerHTML = "start="+StartStamp+"&end="+EndStamp+"";
        Stampss = "start="+StartStamp+"&end="+EndStamp+"";
        
        }


        
        var session = eval('(<?php echo json_encode($_SESSION["my_array"])?>)');
        var AmountOfStamps = 1;
        var MaxAmountOfStamps = session.length*6;
        console.log("Max Amount of stamps: "+MaxAmountOfStamps);
        function Timestamped(){

            if(AmountOfStamps <= MaxAmountOfStamps){
                AmountOfStamps++;
                clickedTime.push(Stampss);
                console.log(clickedTime);
            }
            else{

            }
        }

    </script>
</body>

</html>