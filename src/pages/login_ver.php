<?php 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'administrator' && $password == 'testowehaslo123'){
        header('Location: ./create-post.php?li=518313611');
    } else{
        header('Location: ./login.php?fail=true');
    }
}

?>