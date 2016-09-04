<?php
$con=mysqli_connect("localhost","root","","redirect");
$result = mysqli_query($con,"SELECT link FROM links ORDER BY RAND() LIMIT 1");

 while($row = mysqli_fetch_array($result))
    {
        header('Location: '.$row['link']);
    }
?>