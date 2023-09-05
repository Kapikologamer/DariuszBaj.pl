<?php 

$connect = new mysqli('localhost', 'root', '', 'dariuszbaj');

$rid = $_GET['id'];

$query = "SELECT * FROM `posty` WHERE ID = $rid;";

$result = mysqli_query($connect,$query);


while ($row = mysqli_fetch_assoc($result)) {
    $pid = $row['id'];
    $pt = $row['title'];
    $pd = $row['description'];
}

mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No siema siema</title>
</head>
<body>
    <h1>Heja to jest post</h1>
    <h2><?php echo $pt ?></h2>
    <h3>ID posta to: <?php echo $pid ?></h3>
    <h4>Opis posta: </h4>
    <h5><?php echo $pd ?></h5>
</body>
</html>