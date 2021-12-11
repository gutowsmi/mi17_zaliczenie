<?php
require_once "../classes/partnership.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '' && @$_POST["HQLocation"]  != '' && @$_POST["profession"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $HQLocation = $_POST["HQLocation"];
    $profession = $_POST["profession"];
    $object = new Partnership($name,$founder,$capital,$HQLocation,$profession);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO partnership_objects (name,founder,capital,HQLocation,profession) VALUES ('$name','$founder',$capital,'$HQLocation','$profession')";
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
    <title>Partnership Form</title>
</head>
<body>
    <h1>Partnership</h1>
    <form action="Partnership.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <label for="HQLocation">HQLocation:</label><br>
    <input type="text" name="HQLocation"><br>
    <label for="profession">Profession:</label><br>
    <input type="text" name="profession"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
