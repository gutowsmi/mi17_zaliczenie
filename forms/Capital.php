<?php
require_once "../classes/capital.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '' && @$_POST["StockExchange"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $StockExchange = $_POST["StockExchange"];
    $object = new Capital($name,$founder,$capital,$StockExchange);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO capital_objects (name,founder,capital,StockExchange) VALUES ('$name','$founder',$capital,'$StockExchange')";
    mysqli_query($db,$query);
    $db->close();
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital Form</title>
</head>
<body>
    <h1>Capital</h1>
    <form action="Capital.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <label for="StockExchange">Stock Exchange:</label><br>
    <input type="text" name="StockExchange"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
