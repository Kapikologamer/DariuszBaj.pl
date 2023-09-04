<?php 

$con=new mysqli('localhost', 'root', '', 'dariuszbaj');

if(!$con){
    echo die(mysqli_error($con));
} else {
    // header('location:index.php');
    echo 'Poprawnie połączono z bazą danych';
}



?>