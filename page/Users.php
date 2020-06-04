<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <title>Homepage</title>
</head>

<body>

    <div class="container top-buffer ">
        <div class="row mb-5">
            <div class="col text-center ">
                <p class="h2">Welkom bij het gekozen ding!</p>
                <p class="h4">Om te beginnen klik op de add user button om gebruikers toe te voegen</p>
         
                <button type="submit" id="btn1" class="btn btn-primary btn-lg" onclick="adduser()"><i class="fas fa-user-plus"></i></button>
         
            </div>
        </div>
    </div>


 

    <div class="col text-center" id="names">
    <!-- <span class="dot text-center"><i class="fas fa-user"></i><p></p></span> -->
        <button class="btn btn-primary btn-lg circ ml-1"><i class="fas fa-user"></i></button>
        <button class="btn btn-primary btn-lg circ ml-1"><i class="fas fa-user"></i></button>
    </div>
    
<script>

    function adduser(){
      
    }



    $("#btn1").click(function(){
    var person = prompt("Please enter your name", "");
    $("#names").append('<button class="btn btn-primary btn-lg circ ml-1"><i class="fas fa-user"></i><p style="color:black;">'+person+'</p></button>');
    });
</script>
</body>

</html>