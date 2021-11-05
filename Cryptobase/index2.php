<?php include "parts/config.php"; ?>
<html>
<head>
    <title> </title>
    <style type=text/css> table{ boder: 2px solid red; background-color: #FFC; } th{ border-bottom:5px solid #000; } td{
        border-bottom:2px solid #666; } </style> </head> <body>
        <h1>Coin Table</h1>
        
<?php 
$sql="SELECT * from `coin_table`;";
$result= mysqli_query($conn, $sql) or die("error getting info");
?>
<table>
<tr> 
    <th>ID</th>
    <th>coin name</th>
    <th>coin symbol</th>
    <th>Current_Price</th> 
    <th>Persent Change 24h</th>
    <th>total volume</th>
    <th>Market Cap</th>

</tr>
<?php
while ($row = mysqli_fetch_assoc($result)){ 
?>
<tr><td> <?php echo  $row['id']; ?></td>
<td>
    <?php echo  $row['coin_id']; ?>
    </td>
    <td>
    <?php echo  $row['symbol']; ?>
    </td>
    <td>
    <?php echo  $row['price']; ?>
    </td>
    <td>
    <?php echo  $row['percent_change_24h']; ?>
    </td>
    <td>
    <?php echo  $row['total_volume']; ?>
    </td>
    <td>
    <?php echo $row['market_cap']; ?>
    </td>
    <td>
</tr>
<?php }?>
</table>
</body>
</html>