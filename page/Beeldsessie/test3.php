
  <?php
  session_start();
  ?>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script>
  
  $(document).ready(function(){
  
      var session = eval('(<?php echo json_encode($_SESSION["my_array"])?>)');
      console.log(session);
  
      var i;
      for (i = 0; i < session.length; i++) {

      }
  
   });
   </script>
  
