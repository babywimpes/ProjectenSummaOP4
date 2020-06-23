<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose 6</title>

    <?php include "../../incl/include.php" ?>
    <?php include "../../incl/connect.php" ?>
    <style>
td{
    max-width: 270px;
}
        </style>
</head>

<body>
<?php
session_start();
?>
<script>

$(document).ready(function(){

var VideoStamps = eval('(<?php echo json_encode($_SESSION["timestamps"])?>)');
console.log(VideoStamps);

var VideoIDD = eval('(<?php echo json_encode($_SESSION['vidIDD'])?>)');
console.log(VideoIDD);



for (i = 0; i < VideoStamps.length; i++) {

    $("#names").append('<div class="m-3"><div class="col"><iframe width="260" height="115" src="https://www.youtube.com/embed/'+VideoIDD+'?'+VideoStamps[i]+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><div class="align-middle col"><button id="'+[i]+'" name="https://www.youtube.com/embed/'+VideoIDD+'?'+VideoStamps[i]+'" onclick="Choose(this.id)" class="w-100 mb-2 btn btn-primary btn-lg">Play</button></div></div>');
    console.log('heyyy --> https://www.youtube.com/embed/'+VideoIDD+'?'+VideoStamps[i]);
}

});

var chosen = 0;
var final6array = [];

function Choose(vid){


if(chosen <= 5){
    chosen++;
    document.getElementById(vid).disabled = true;
    document.getElementById("score").innerHTML = chosen+"/6";
    
    console.log(chosen);
    var x = document.getElementById(vid).getAttribute("name"); 
    final6array.push(x)
    console.log(final6array);

    $.post('SaveData/SaveFinal6.php',{data:final6array}, function(response){});

        if(chosen == 6){
        $("#doorenzo").append('<a href="NameFinal6.php" class="btn btn-primary btn-lg">Doorgaan</a>');
    }
  
    }
    else {

    }


}

</script>
<div id="doorenzo" class="ml-3" style="position:fixed">
<p  class="h1 ml-3" id="score">0/6</p>
<a href="PlayVideo.php" class="btn btn-primary btn-lg">Terug naar vorige</a>
</div>
<div class="container">
<div class="row justify-content-center mt-2 m-3" id='names'>


</div>
</div>



</body>

</html>


  
    
      
      
    

