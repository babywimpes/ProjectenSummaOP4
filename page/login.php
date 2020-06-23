<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>

<body>
<a class="btn btn-secondary" href="index.php">Terug</a>
    <div class="container top-buffer">
        
        <div class="row">
            <div class="col form-group">
                <form method="POST">
                    <label for="exampleInputEmail1">Username</label>
                    <input class="form-control" type="text" name="user" placeholder="Gebruikersnaam" />
                    <label for="exampleInputEmail1">Password</label>
                    <input class="form-control" type="password" name="pass" placeholder="Wachtwoord" />
                    <input class="btn btn-primary" type="submit" name="submit" value="Inloggen" />
                </form>
            </div>
        </div>
    </div>



    <?php
    include "../incl/connect.php";
    include "../incl/include.php";
    if (isset($_POST['submit'])) {
        if (empty($_POST['user']) || empty($_POST['pass'])) {
            echo '<script>alert("Geen lege velden")</script>';
        } else {
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $sql = "SELECT * FROM logininfo WHERE user='$username' AND pass='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                $row = $result->fetch_assoc();

                session_start();
                $_SESSION['username'] = $row['user'];
                $_SESSION['userid'] = $row['userID'];
                $_SESSION['isteacher'] = $row['teacher'];
                header('Location: index.php');
            } else {
                echo "0 resultaten";
            }

            $conn->close();
        }
    }
    ?>
</body>

</html>