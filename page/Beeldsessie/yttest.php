
<?php
            
            $videoId ="eC7f9tMslVE";

            echo '<iframe id="vid" width="1560" height="677" src="https://www.youtube.com/embed/'.$videoId.'?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            

?>

<button class="" onclick="Timestamped();">hey</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<label id="seconds">0</label>
<script>


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

function Timestamped(){

    clickedTime.push(Stampss);
    console.log(clickedTime);

}




</script>