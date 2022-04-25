<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>
<body>
<?php

echo "Welcome, ". $_POST["user"] . "!<br>";
echo "Password: " . $_POST["pwd"] . "<br>";
$prices = array("Free 7 day"=> 0, "over night"=> 50, "3 day"=> 5);

?>

<table>
    <tr>
        <th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th>
    </tr>
    <tr><?php
        echo "<th>Pebble</th><td>" . $_POST["sm"] . "</td><td>$0.50</td><td>$" . round(0.5 * $_POST["sm"], 2) . "</td>";
    ?></tr>
    <tr><?php
        echo "<th>Rock</th><td>" . $_POST["md"] . "</td><td>$1.00</td><td>$" . round($_POST["md"], 2) . "</td>";
    ?></tr>
    <tr><?php
        echo "<th>Boulder</th><td>" . $_POST["lg"] . "</td><td>$10.00</td><td>$" . round(10 * $_POST["lg"], 2) . "</td>";
    ?></tr>
    <tr><?php
        echo "<th>Shipping</th><td colspan=2>" . $_POST["ship"] . "</td><td>$" . $prices[$_POST["ship"]] . "</td>";
    ?></tr>
    <tr><?php
        echo "<th colspan=3>Total Cost</th> <th>$" . round((0.5 * $_POST["sm"]) + ($_POST["md"]) + (10 * $_POST["lg"]) + $prices[$_POST["ship"]], 2) . "</th>"
    ?></tr>
</table> 


</body>
</html>
