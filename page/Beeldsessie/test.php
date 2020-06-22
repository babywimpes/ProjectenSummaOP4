<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>


$(document).ready(function(){
    var array = ["hello","world"];
    $.post('test.php',{data:array}, function(response){
    //    alert(response);
    });
 });



 </script>

<?php
session_start();
      var_dump($_SESSION['my_array']);


      $length = count($_SESSION['my_array']);
for ($i = 0; $i < $length; $i++) {
  print $_SESSION['my_array'][$i];
}?>


<script>

$(document).ready(function(){

    var session = eval('(<?php echo json_encode($_SESSION["my_array"])?>)');
    console.log(session);


    

var i;
for (i = 0; i < session.length; i++) {

  $("#names").append('<button class="btn btn-primary btn-lg circ ml-1"><i class="fas fa-user"></i><p style="color:black;">'+session[i]+'</p></button>');
}

 });



 </script>

 <div class="names"></div>