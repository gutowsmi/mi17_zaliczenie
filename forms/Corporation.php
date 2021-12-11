<?php
require_once "../classes/corporation.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '' && @$_POST["branch"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $branch = $_POST["branch"];
    $object = new Corporation($name,$founder,$capital);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO corporation_objects (name,founder,capital,branch) VALUES ('$name','$founder',$capital,$branch)";
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
    <title>Corporation Form</title>
</head>
<body>
    <h1>Corporation</h1>
    <form action="Corporation.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <label for="branch">Branch:</label><br>
    <input type="number" name="branch"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
