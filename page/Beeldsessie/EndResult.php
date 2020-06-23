<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../../incl/include.php" ?>
<?php include "../../incl/connect.php"; session_start();?>
</head>
<body>
<script>


var tit = eval('(<?php echo json_encode($_SESSION["titles"])?>)');
console.log("titles: "+tit);

var top6 = eval('(<?php echo json_encode($_SESSION["Final6"])?>)');
console.log("Top 6: "+top6);

var VideoStamps = eval('(<?php echo json_encode($_SESSION["timestamps"])?>)');
console.log("timestamps: "+ VideoStamps);

$(document).ready(function(){
for (i = 0; i < tit.length; i++) {

$("#names").append('<div class="m-3"><div class="col"><p class="font-weight-bold h4 ">'+tit[i]+'</p><iframe width="460" height="215" src="'+top6[i]+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><div class="align-middle col"></div></div>');

}});


</script>

<div class="row justify-content-center mt-2 m-3" id='names'>
</div>

<a href="../index.php" class="btn btn-primary btn-lg">Afronden en terug naar start</a>




</body>
</html>

