<?php
foreach (glob("classes/*.php") as $filename)
{
    require_once $filename;
}
function EchoForm($fieldid){
    return "<div>
    <form action='upload.php' method='post' enctype='multipart/form-data'>
    <input type='file' name='fileToUpload' id='fileToUpload'><br>
    <input type='hidden' name='field_id' value=$fieldid>
    <input type='submit' value='Zapisz' name='submit'>
    </form></div>";
}
function printTree($print_index, $connection) {
    $query = "SELECT * FROM classes WHERE parentId = $print_index";
    $res = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($res)) {
        $form = '"'."./forms/".$row['name'].".php".'"';
        $uploadform = EchoForm($row['id']);
        $img = $row['imgSrc'];
        $title = $row['title'];
        echo "<div class='col'><div><img src=$img title=$title onclick='document.location = $form'>$uploadform</div><div class='row'>";
            printTree($row['id'], $connection);
        echo "</div></div>";
    }
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
    $db = mysqli_connect("localhost","root","","zaliczenie");
    $query = "SELECT * FROM classes";
    $result = mysqli_query($db,$query);
    while($row = mysqli_fetch_array($result)){
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
    }
    ?>
    </table>
    </div>
    <div class="holder">
        <h1>Dziedziczenie</h1>
        <?php
        printTree(0, $db);
    ?>
    </div>
</div>
<?php
    $db->close();
    @$alert = $_GET["text"];
    if ($alert != ''){
        echo " <script>alert('$alert')</script>";
    }
?>
</body>
</html>

