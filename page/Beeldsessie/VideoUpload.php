<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>
    <form method="POST">
        <input type="text" name="link" />
        <input type="submit" name="submit" />
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $youtube = $_POST['link'];
        if (empty($youtube)) {
            echo '<script> alert("Vul een link in het invoerveld")</script>';
        } else {
            if (preg_match("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $youtube, $matches) == 1) {
                echo $matches[0];
            } else {
                echo '<script> alert("Vul een link in  invoerveld")</script>';
            }
        }
    }
    ?>

</body>

</html>