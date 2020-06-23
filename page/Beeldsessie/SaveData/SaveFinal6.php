<?php
      session_start();
      $_SESSION['Final6']=$_POST['data'];
      echo "data stored in session";