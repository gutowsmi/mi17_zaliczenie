<?php
require_once "../classes/llc.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '' && @$_POST["StockExchange"]  != '' && @$_POST["HeadOfAdministration"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $StockExchange = $_POST["StockExchange"];
    $HeadOfAdministration = $_POST["HeadOfAdministration"];
    $object = new Llc($name,$founder,$capital,$StockExchange,$HeadOfAdministration);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO llc_objects (name,founder,capital,StockExchange,HeadOfAdministration) VALUES ('$name','$founder',$capital,'$StockExchange','$HeadOfAdministration')";
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
    <title>LLC Form</title>
</head>
<body>
    <h1>LLC</h1>
    <form action="Llc.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <label for="StockExchange">Stock Exchange:</label><br>
    <input type="text" name="StockExchange"><br>
    <label for="HeadOfAdministration">Head Of Administration:</label><br>
    <input type="text" name="HeadOfAdministration"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
