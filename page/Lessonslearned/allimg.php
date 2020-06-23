<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include "../../incl/include.php";
    include "../../incl/connect.php";

    session_start();
    $username = $_SESSION['username'];
    $userid = $_SESSION['userid'];
    ?>
</head>

<body>
<a class="btn btn-secondary" href="../index.php">Terug</a>
    <div class="container top-buffer">
        <div class="row">
            <div class="col text-center">
                <h2>Je afbeeldingen</h2><br />

                <form method="POST" action="" enctype="multipart/form-data">
                    <input name="userImage" type="file" class="btn btn-secondary btn-m" />
                    <input type="submit" name="submitimg" value="Verstuur" />
                </form>
            </div>
        </div>
    </div>
    <?php
    $sql2 = "SELECT * FROM userimage WHERE userID='$userid'";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row  
        foreach ($result2 as $row2) {
            echo '<img 
                    height="20%" width="20%" 
                    onclick="imgclick('.$row2['photoID'].')" 
                    src="data:image/jpeg;base64,' . base64_encode($row2['photo']) . '"
                 />';
        }
    }

    if (isset($_POST['submitimg'])) {
        if (empty($_FILES['userImage'])) {
            echo "Lege File";
        } else {
            $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
            $sql = "INSERT INTO userimage (userID, photo) VALUES ('$userid','$imgData')";
            $conn->query($sql);
            echo mysqli_error($conn);
            echo "succes";
        }
    }


    ?>

    <script>

    const imgclick =(photoID)=>{
        document.cookie = "photoid="+photoID;
        
        window.location.href ="imgdetail.php"
    }

    </script>

</body>

</html>