<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php include "../../incl/include.php" ?>
<?php include "../../incl/connect.php" ?>
<body>
    


<a onclick="getName()" class="w-100 mb-2 btn btn-primary btn-lg" href="EndResult.php">Save Names And Continue</a>
<script>

var Titles = [];

var top6 = eval('(<?php echo json_encode($_SESSION["Final6"])?>)');
console.log("Top 6: "+top6);

var VideoStamps = eval('(<?php echo json_encode($_SESSION["timestamps"])?>)');
console.log("timestamps: "+ VideoStamps);

var VideoIDD = eval('(<?php echo json_encode($_SESSION['vidIDD'])?>)');
console.log(VideoIDD);

$(document).ready(function(){
for (i = 0; i < top6.length; i++) {

$("#names").append('<div class="m-3"><div class="col"><iframe width="460" height="215" src="'+top6[i]+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><div class="align-middle col"><input type="text" value="" class="w-100" id="name'+[i]+'"/></div></div>');

}
});

function getName(){

// nameId = document.getElementById("name"+id).value;
// Titles.push(nameId);
// console.log(nameId);
// console.log(Titles);


    for (i = 0; i < top6.length; i++) {
        nameId = document.getElementById("name"+i).value;      
        Titles.push(nameId);
        console.log(Titles);
        $.post('SaveData/SaveTitles.php',{data:Titles}, function(response){});
    }

}

</script>



<div class="row justify-content-center mt-2 m-3" id='names'>
</div>


</body>
</html>


