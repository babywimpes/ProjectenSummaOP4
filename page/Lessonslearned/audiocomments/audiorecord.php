
<p>
    <button id=record> Start=</button>
    <button id=stopRecord disabled>Stop</button>
</p>
<p>
    <audio id=recordedAudio></audio>

</p>
<style>
    #record {
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

    #stopRecord {
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

    #recordedAudio {
        left: 100px;
        right: 100px;
        position: relative;
    }

</style>

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
                
                 sendData(blob);
                
            }
        }
    }

    function sendData(data) {
        base64_decode(blob);
        console.log(blob );
    }

    record.onclick = e => {
        console.log('I was clicked')
        record.disabled = true;
        record.style.backgroundColor = "blue"
        stopRecord.disabled = false;
        audioChunks = [];
        rec.start();
    }
    stopRecord.onclick = e => {
        console.log("I was clicked")
        record.disabled = false;
        stop.disabled = true;
        record.style.backgroundColor = "red"
        rec.stop();
    }
</script>