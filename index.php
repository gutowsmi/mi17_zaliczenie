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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
    <div class="holder">
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
    $data = [];
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "SELECT * FROM classes";
    $result = mysqli_query($db,$query);
    $counter = 0;;
    $data = [];
    while($row = mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
        $form = '"'."./forms/$row[1].php".'"';
        array_push($data,"<img src='img/placeholder.jpg' title='$row[3]' id='$counter' onclick='document.location = $form'>");
        $counter++;
    }
    ?>
    </table>
    </div>
    <div class="holder">
        <h1>Dziedziczenie</h1>
        <?php
        echo "<div>";
            echo "<div>";
            echo $data[0];
            echo "</div>";
                echo "<div id='diagram-1'>";
                echo $data[2];
                echo $data[1];
                echo $data[3];
                echo "</div>";
            echo "<div id='diagram-2'>";
                echo "<div id='diagram-3'>";
                echo $data[6];
                echo $data[7];
                echo "</div>";
                echo "<div id='diagram-4'>";
                echo $data[4];
                echo $data[5];
                echo "</div>";
            echo "</div>";
        echo "</div>";
    ?>
    </div>
</div>
<?php
    $db->close();

?>
</body>
</html>

