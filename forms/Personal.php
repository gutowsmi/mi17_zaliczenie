<?php
require_once "../classes/personal.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '' && @$_POST["HQLocation"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $HQLocation = $_POST["HQLocation"];
    $object = new Company($name,$founder,$capital,$HQLocation);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO personal_objects (name,founder,capital,HQLocation) VALUES ('$name','$founder',$capital,'$HQLocation')";
    mysqli_query($db,$query);
    $db->close();
    #header('Location: ../index.php');
    echo $query;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Form</title>
</head>
<body>
    <h1>Personal</h1>
    <form action="Personal.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <label for="HQLocation">HQLocation:</label><br>
    <input type="text" name="HQLocation"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
