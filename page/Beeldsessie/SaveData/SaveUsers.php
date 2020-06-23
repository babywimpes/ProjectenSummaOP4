<?php
      session_start();
      $_SESSION['my_array']=$_POST['data'];
      echo "data stored in session";