<?php 

// include '../connect.php';
// if(isset($_POST['submit'])){
//     header("Location: ../index.php");
//     $title = $_POST['title'];
//     // $description = $_POST['description'];
//     // $attachment = "zero";

//     header("Location: ../index.php");


//     $sql="insert into `posty` (title)
//     values('$title')";
//     $result=mysqli_query($con,$sql);
//     if($result){
//         echo "Data inserted successfully";
//     } else {
//         echo die(mysqli_error($con));
//     }

//     header("Location: ../index.php");
// }

?>


<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1D1D1F">
    <link rel="stylesheet" href="../css/create-post.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../assets/icons/clipboard.svg" type="image/x-icon">
    <title>Dodaj Post</title>
</head>
<body>
    <header>
        <h1>Dodaj nowy post</h1>
    </header>
    <form action="insert_post.php" method="post">
        <h4>Tytuł posta</h4>
        <input type="text" name="title" id="input-title">
        <h4>Opis posta</h4>
        <textarea type="text" name="description" id="input-description"></textarea>
        <button name="insert" type="submit" id="add_post">Dodaj</button>
    </form>
    <form enctype="multipart/form-data" action="upload-file.php" method="post">
        <h4 class="infil">Dołącz plik</h4>
        <input type="file" name="file" id="input-file">
        <label for="input-file">
            <i class='bx bx-export'></i>
            Wybierz Plik
        </label>
        <button class="infil2" type="submit" id="upload_file">Załącz plik</button>
    </form>
</body>
</html>