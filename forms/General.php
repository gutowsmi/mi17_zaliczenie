<?php
require_once "../classes/general.php";
if(@$_POST["name"] != '' && @$_POST["founder"]  != '' && @$_POST["capital"]  != '' && @$_POST["HQLocation"]  != '' && @$_POST["DateOfDisabling"]  != '')
    {
    $name = $_POST["name"];
    $founder = $_POST["founder"];
    $capital = $_POST["capital"];
    $HQLocation = $_POST["HQLocation"];
    $DateOfDisabling = $_POST["DateOfDisabling"];
    $object = new General($name,$founder,$capital,$HQLocation,$DateOfDisabling);
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "INSERT INTO general_objects (name,founder,capital,HQLocation,DateOfDisabling) VALUES ('$name','$founder',$capital,'$HQLocation',$DateOfDisabling)";
    mysqli_query($db,$query);
    $db->close();
    $getdata= "Objekt General [name=$name founder=$founder capital=$capital HQLocation=$HQLocation DateOfDisabling=$DateOfDisabling] został zapisany";
    header("Location: ../index.php?text=$getdata");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Form</title>
</head>
<body>
    <h1>General</h1>
    <form action="General.php" method="post" >
    <label for="name">Name:</label><br>
    <input type="text" name="name"><br>
    <label for="founder">Founder:</label><br>
    <input type="text" name="founder"><br>
    <label for="capital">Capital:</label><br>
    <input type="number" name="capital"><br>
    <label for="HQLocation">HQLocation:</label><br>
    <input type="text" name="HQLocation"><br>
    <label for="DateOfDisabling">Date Of Disband:</label><br>
    <input type="text" name="DateOfDisabling"><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>
