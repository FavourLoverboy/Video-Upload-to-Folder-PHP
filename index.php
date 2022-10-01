<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD VIDEOS</title>
</head>
<body>
    <h1><a href="videos.php">VIDEOS</a></h1>

    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">

        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>

<?php

    include('db.php');

    if($_POST['upload']){

        $name = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        move_uploaded_file($tmp, "videos/".$name);

        $sql = "INSERT INTO videos (name) VALUES('$name')";

        $res = mysqli_query($con,$sql);

        if($res == 1){
            
            echo "<h1>Video Inserted Successfully</h1>";
        }

    }

?>