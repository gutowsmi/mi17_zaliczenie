<?php
foreach (glob("classes/*.php") as $filename)
{
    require_once $filename;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasy</title>
</head>
<body>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>imgSrc</th>
        <th>title</th>
        <th>level</th>
        <th>parentId</th>
    </tr>
<?php
$db = mysqli_connect("localhost","root","","zaliczenie");
$query = "SELECT * FROM classes";
$result = mysqli_query($db,$query);
while($row = mysqli_fetch_array($result)){

}
?>
</table>
</body>
</html>

