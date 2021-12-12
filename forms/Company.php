<?php
require_once "../classes/company.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $object = new Company($name,$founder,$capital);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO company_objects (name,founder,capital) VALUES ('$name','$founder',$capital)";
    mysqli_query($db,$query);
    $db->close();
    $getdata= "Objekt Company [name=$name founder=$founder capital=$capital] został zapisany";
    header("Location: ../index.php?text=$getdata");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Form</title>
</head>
<body>
    <h1>Company</h1>
    <form action="Company.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
