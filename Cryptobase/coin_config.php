<?php
$servername = "localhost";
$db = "cryptobase";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
if ($_GET["name"])

{
    
    if ($_GET["name"]== "('all')" || $_GET["name"]== "('All')" ) {
      
      $sql = "SELECT * from `coins`;";
      
    } 
    else {
      $sql = "SELECT * from `coins` where `Coin_name` in " . $_GET["name"] . ";";
 
    }
    
    $result = mysqli_query($conn, $sql) or die("error getting info");


    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr><td> ." . $row["ID"] . "</td><td>" . $row["Coin_name"] . "</td><td>" . $row["Coin_symbol"] . "
    </td>
    <td>
    " . $row["Current_Price"] . "
    </td>
    <td>
    " . $row["High_24h"] . "
    </td>
    <td>
    " . $row["Low_24h"] . "
    </td>
    <td>" . $row["Market_cap"] . "
    </td>
    <td>
</tr>";
    }
    
}
exit();

