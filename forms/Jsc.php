<?php
require_once "../classes/jsc.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '' && @$_POST["StockExchange"]  != '' && @$_POST["stockprice"]  != '' && @$_POST["stocks"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $StockExchange = $_POST["StockExchange"];
    $stockprice = $_POST["stockprice"];
    $stocks = $_POST["stocks"];
    $object = new Jsc($name,$founder,$capital,$StockExchange,$stockprice,$stocks);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO jsc_objects (name,founder,capital,StockExchange,stockprice,stocks) VALUES ('$name','$founder',$capital,'$StockExchange',$stockprice,$stocks)";
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
    <title>JSC Form</title>
</head>
<body>
    <h1>JSC</h1>
    <form action="Jsc.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <label for="StockExchange">Stock Exchange:</label><br>
    <input type="text" name="StockExchange"><br>
    <label for="stockprice">Stock price:</label><br>
    <input type="number" name="stockprice"><br>
    <label for="stocks">Stocks:</label><br>
    <input type="number" name="stocks"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
