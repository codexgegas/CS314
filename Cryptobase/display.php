<?php
include_once "parts/config.php";
 $sql= "SELECT * FROM `coins`";
 $result=mysqli_query($conn, $sql);
 $nums= mysqli_num_rows($result);
echo $nums
?>
