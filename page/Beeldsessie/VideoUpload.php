<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../../incl/include.php"?>
    <?php include "../../incl/connect.php"?>
</head>

<body>
    <form method="POST">
        <input type="text" name="link" placeholder="Link:" />
        <input type="text" name="comment" placeholder="comment:"/>
        <input type="submit" name="submit" />
    </forms>

    <?php
    session_start();
    $username = $_SESSION['username'];
    if (isset($_POST['submit'])) {
        $youtube = $_POST['link'];
        $comment = $_POST['comment'];
        if (empty($youtube) || empty($comment)) {
            echo '<script> alert("Vul een link in het invoerveld")</script>';
        } else {
            if (preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $youtube, $matches) == 1) {
            
                $sql = "INSERT INTO upload (username, videoID, comment) VALUES ('$username','$matches[0]','$comment')";
                $conn->query($sql);
                header("Location: Users.php");

            } else {
                echo '<script> alert("Vul een link in  invoerveld")</script>';
            }
        }
    }
    ?>
 
</body>

</html>