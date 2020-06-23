<?php
      session_start();
      $_SESSION['titles']=$_POST['data'];
      echo "data stored in session";