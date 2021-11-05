<?php include "parts/config.php"; ?>
<html>
<head>
    <title> </title>
    <style type=text/css> table{ boder: 2px solid red; background-color: #FFC; } th{ border-bottom:5px solid #000; } td{
        border-bottom:2px solid #666; } </style> </head> <body>
        <h1>Coin Table</h1>
        
<?php 
$sql="SELECT * from `coins`;";
$result= mysqli_query($conn, $sql) or die("error getting info");
?>
<table>
<tr> 
    <th>ID</th>
    <th>coin name</th>
    <th>coin symbol</th>
    <th>Current_Price</th> 
    <th>High 24</th>
    <th>low 24</th>
    <th>Market Cap</th>

</tr>
<?php
while ($row = mysqli_fetch_assoc($result)){ 
?>
<tr><td> <?php echo  $row['ID']; ?></td>
<td>
    <?php echo  $row['Coin_name']; ?>
    </td>
    <td>
    <?php echo  $row['Coin_symbol']; ?>
    </td>
    <td>
    <?php echo  $row['Current_Price']; ?>
    </td>
    <td>
    <?php echo  $row['High_24h']; ?>
    </td>
    <td>
    <?php echo  $row['Low_24h']; ?>
    </td>
    <td>
    <?php echo $row['Market_cap']; ?>
    </td>
    <td>
</tr>
<?php }?>
</table>
</body>
</html>