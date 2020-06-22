<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../../incl/include.php"?>
</head>

<body>
    <form method="POST">
        <input type="text" name="link" />
        <input type="submit" name="submit" />
    </forms>

    <?php
    if (isset($_POST['submit'])) {
        $youtube = $_POST['link'];
        if (empty($youtube)) {
            echo '<script> alert("Vul een link in het invoerveld")</script>';
        } else {
            if (preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $youtube, $matches) == 1) {
                
                echo"succes";



            } else {
                echo '<script> alert("Vul een link in het invoerveld")</script>';
            }
        }
    }
    ?>

</body>

</html>