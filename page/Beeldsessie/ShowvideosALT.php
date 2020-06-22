<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>

    <?php include "../../incl/include.php" ?>
    <?php include "../../incl/connect.php" ?>
    <style>
td{
    max-width: 270px;
}
        </style>
</head>

<body>

<div class="container">
<table class="table table-bordered">
<thead class="thead-light">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Uploaded by</th>
      <th scope="col">Comment</th>
      <th scope="col">Select</th>
    </tr>
  </thead>
  <tbody class="text-center">

    <?php
    // LIMIT 6
    $sql = 'SELECT * FROM upload ORDER BY uploadID DESC ';
    $result = $conn->query($sql);
    foreach($result as $row){
        echo '<tr>';
        echo '<form method="POST" action="PlayVideo.php">';
            echo '<td style="max-width:110px">';
            echo '<iframe width="260" height="115" src="https://www.youtube.com/embed/'.$row['videoID'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            echo '</td>';
            echo '<td class="align-middle">'.$row['username'].'</td>';
            echo '<td class="align-middle">'.$row['comment'].'</td>';
            echo ' <input type="hidden" name="VideoID" value="'.$row['videoID'].'">';
            echo '<td class="align-middle"><input type="submit" value="play" class="w-100  btn btn-primary btn-lg"/></td>';
        echo '</form>';
        echo '</tr>';
    }
    ?>

  </tbody>
</table>
</div>


</body>

</html>


  
    
      
      
    

