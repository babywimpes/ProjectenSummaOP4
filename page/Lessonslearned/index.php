<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php 
    include "../../incl/include.php" ;
    
    session_start();
    $username= $_SESSION['username'];
    
    ?>
</head>

<body>

    <div class="container top-buffer">
        <div class="row">
            <div class="col text-center">
                <p class="text-center">
                    Kies hier wat je wil doen
                    <?php
                    echo $username;
                    ?>
                </p>
                <a class="btn btn-primary btn-lg" href="imgpages/allimg.php">Mijn afbeeldingen</a>
                <a class="btn btn-primary btn-lg" href="audiocomments/audiorecord.php       ">Message bij image</a>
            </div>
        </div>
    </div>
</body>

</html>