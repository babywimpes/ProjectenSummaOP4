<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../incl/include.php"?>

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


 

    <div class="col text-center mb-5" id="names">

        <!-- <button class="btn btn-primary btn-lg circ ml-1"><i class="fas fa-user"></i></button>
        <button class="btn btn-primary btn-lg circ ml-1"><i class="fas fa-user"></i></button> -->
    </div>
    <div class="col text-center ">

       
        <button class="btn btn-primary btn-lg">Doorgaan</button>
    </div>



<script>
    $("#btn1").click(function(){
    var person = prompt("Please enter your name", "");
        if (person == null || person == "") {
        
        } 
        
        else {
            $("#names").append('<button class="btn btn-primary btn-lg circ ml-1"><i class="fas fa-user"></i><p style="color:black;">'+person+'</p></button>');
    }});
        
</script>
</body>

</html>