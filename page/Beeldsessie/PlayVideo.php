<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>

    <?php include "../../incl/include.php" ?>
    <?php include "../../incl/connect.php" ?>
</head>

<body>
    <?php
	
    $videoId ="eC7f9tMslVE";

    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$videoId.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

    
    ?>
</body>

</html>