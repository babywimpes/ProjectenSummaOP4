<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../incl/include.php"?>
    <title>Homepage</title>
</head>

<body>

    <div class="container top-buffer ">
        <div class="row mb-5">
            <div class="col text-center ">
                <p class="h2">Welkom bij het uploaden!</p>
                <p class="h4">Om te uploaden kies een van de twee mogelijkheden.</p>
         
            </div>
        </div>
    </div>


  <div class="form-row m-2">
    <div class="col">
        <form action="Index.php" method="post" enctype="multipart/form-data">
        <p>
        <label for="my_upload">Select the file to upload:</label>
        <input id="my_upload" name="my_upload" type="file">
        </p>
        <input type="submit" value="Upload Now">
        </form>
    </div>
    <div class="col">
    <form method="post" action="Index.php">
      <input type="text" class="form-control" name="Link" placeholder="Youtube link:">
      <button type="submit" class="btn btn-primary">Verzenden</button>
    </form>
    </div>
  </div>

</body>

</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  if (is_uploaded_file($_FILES['my_upload']['tmp_name'])) 
  { 
  	//First, Validate the file name
  	if(empty($_FILES['my_upload']['name']))
  	{
  		echo " File name is empty! ";
  		exit;
  	}

  	$upload_file_name = $_FILES['my_upload']['name'];
  	//Too long file name?
  	if(strlen ($upload_file_name)>100)
  	{
  		echo " too long file name ";
  		exit;
  	}

  	//replace any non-alpha-numeric cracters in th file name
  	$upload_file_name = preg_replace("/[^A-Za-z0-9 \.\-_]/", '', $upload_file_name);

  	// //set a limit to the file upload size
  	// if ($_FILES['my_upload']['size'] > 1000000) 
  	// {
	// 	echo " too big file ";
  	// 	exit;        
    // }

    //Save the file
    $dest=__DIR__.'/uploads/'.$upload_file_name;
    if (move_uploaded_file($_FILES['my_upload']['tmp_name'], $dest)) 
    {
    	echo 'File Has Been Uploaded !';
    }
  }
}