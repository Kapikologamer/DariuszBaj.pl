<?php 

include '../connect.php';

$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$attachment="zero";

$sql = " INSERT INTO posty VALUES ('$title','$description','$attachment')";

if(mysqli_query($con,$sql)){
    echo "mam wyjebane";
} else {
    echo "no coś sie spierdoliło";
}

?>