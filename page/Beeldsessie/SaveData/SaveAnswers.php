<?php
      session_start();
      $_SESSION['timestamps']=$_POST['data'];
      echo "data stored in session";