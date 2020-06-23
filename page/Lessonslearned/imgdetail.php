<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #record {
            background-color: green;
            /* Green */
            border-width: medium;
            border-color: black;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            max-width: 50%;
            max-height: 15%;
            border-radius: 50%;
            left: 100px;
            right: 100px;
            position: relative;
        }

        #stopRecord {
            background-color: red;
            /* Green */
            border-width: medium;
            border-color: black;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            max-width: 50%;
            max-height: 15%;
            border-radius: 50%;
            left: 100px;
            right: 100px;
            position: relative;
        }

        #recordedAudio {
            left: 100px;
            right: 100px;
            position: relative;
        }
    </style>
</head>

<body>

    <a class="btn btn-secondary" href="allimg.php">Terug</a>
    <div class="container top-buffer">
        <div class="row">
            <div class="col text-center">
                <p>
                    <button id=record> Start</button>
                    <button id=stopRecord disabled>Stop</button>
                </p>
                <p>
                    <audio id=recordedAudio></audio>
                </p>
            </div>
        </div>
    </div>

    <script>
        navigator.mediaDevices.getUserMedia({
                audio: true
            })
            .then(stream => {
                handlerFunction(stream)
            })


        function handlerFunction(stream) {
            rec = new MediaRecorder(stream);
            rec.ondataavailable = e => {
                audioChunks.push(e.data);
                if (rec.state == "inactive") {
                    let blob = new Blob(audioChunks, {
                        type: 'audio/mp3'
                    });
                    recordedAudio.src = URL.createObjectURL(blob);
                    recordedAudio.controls = true;
                    recordedAudio.autoplay = true;

                    document.cookie = "owncomment=" + blob;

                    window.location.href = "imgdetailupload.php"

                }
            }
        }

        record.onclick = e => {
            record.disabled = true;
            record.style.backgroundColor = "blue"
            stopRecord.disabled = false;
            audioChunks = [];
            rec.start();
        }
        stopRecord.onclick = e => {
            record.disabled = false;
            stop.disabled = true;
            record.style.backgroundColor = "red"
            rec.stop();
        }
    </script>
    <?php
    include "../../incl/include.php";
    include "../../incl/connect.php";

    session_start();
    $userid = $_SESSION['userid'];
    $photoID = $_COOKIE['photoid'];
    $sql2 = "SELECT * FROM userimage WHERE userID='$userid' AND photoID='$photoID'";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row  
        foreach ($result2 as $row2) {
            echo '<div class="col text-center"><img 
                    height="50%" width="50%" 
                    onclick="imgclick(' . $row2['photoID'] . ')" 
                    src="data:image/jpeg;base64,' . base64_encode($row2['photo']) . '"
                 /></br> 
                </br></div>';
        }
    }

    ?>

</body>

</html>