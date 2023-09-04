<?php 

if(isset($_POST['insert'])){
    echo 'jebać kurwy';
    $connect = new mysqli('localhost', 'root', '', 'dariuszbaj');

    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO `posty`(`title`, `description`) VALUES ('$title','$description')";

    $result = mysqli_query($connect,$query);

    mysqli_close($connect);

    header('Location: ../');
}

?>