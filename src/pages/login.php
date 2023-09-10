<?php 

if(isset($_GET['fail'])){
    $fail = $_GET['fail'];
    if($fail){
        echo 'Błędne hasło lub nazwa użytkownika';
    } else{
        return;
    }
}




?>


<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1D1D1F">
    <link rel="stylesheet" href="../css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../assets/icons/user.svg" type="image/x-icon">
    <title>Strona Logowania</title>
</head>
<body>

    <form action="login_ver.php" method="post">
        <div class="box_wrapper">
            <div class="login_box">
            <h1>Logowanie</h1>
            <div class="input_field">
                <input type="text" placeholder="Nazwa użytkownika" spellcheck="false" name="username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input_field">
                <input type="password" placeholder="Hasło" name="password" required>
                <i class="bx bx-lock"></i>
            </div>
            <div class="input_field">
                <button type="submit" name="submit">Zaloguj się</button>
            </div>
        </div>
    </form>
    
    <script src="./app.js"></script>
</body>
</html>