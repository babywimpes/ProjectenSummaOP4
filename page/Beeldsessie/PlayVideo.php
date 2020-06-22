<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>

    <?php include "../../incl/include.php" ?>
    <?php include "../../incl/connect.php" ?>
    <style>
  .top-buffer{
            margin-top: 100px;
        }
        .circ{
            border-radius: 50%;
            height: 55px;
            width: 55px;
        }
        .dot {
  height: 55px;
  width: 55px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
    </style>
</head>

<body>
    <div class="main">
        <div class=" d-flex justify-content-center">
            <?php
            
            $videoId ="eC7f9tMslVE";

            echo '<iframe width="1560" height="677" src="https://www.youtube.com/embed/'.$videoId.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            ?>
        </div>
    </div>

    <div class="col text-center mb-5 mt-2" id="names">

    </div>



    <?php
        session_start();
    ?>
    <script>
        $(document).ready(function(){

            var session = eval('(<?php echo json_encode($_SESSION["my_array"])?>)');
            console.log(session);

            var i;
            for (i = 0; i < session.length; i++) {

            $("#names").append('<button class="btn btn-primary btn-lg circ ml-4"><i class="fas fa-user"></i><p style="color:black;">'+session[i]+'</p></button>');
            }

        });
    </script>
</body>

</html>