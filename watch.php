<?php

    include('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT name FROM videos WHERE id = '$id'";
        $res = mysqli_query($con,$sql);

        $row = mysqli_fetch_assoc($res);

        $name = $row['name'];

        echo "<h1>You Are Watching:". $name ."</h1>";
        ?>

         <video height="315" width="615" controls autoplay loop>
            <source src="videos/<?php echo $name; ?>" type="video/mp4">
         </video>

         <?php
    }

?>