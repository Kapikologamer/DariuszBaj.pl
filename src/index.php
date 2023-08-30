<?php 

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1D1D1F">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Slider_TEST</title>
</head>
<body>
    <header>
        <div class="header_top">
            <i class='bx bx-menu' onclick="mobile_menu()"></i>
            <h1>DariuszBaj.pl</h1>
            <a href="https://zsp1.siedlce.pl"><i class='bx bx-home'></i></a>
        </div>
        <div class="header_banner">
            <div class="content">
                <div class="dummy"></div>
            </div>
        </div>
        <div class="navbar">
            <div class="dropdown" onclick="dropdown_arrow(1), dropdown(1)">Rozwiń <i id="dropdown_arrow1" class='bx bx-chevron-down'></i></div>
            <div class="dropdown" onclick="dropdown_arrow(2), dropdown(2)">Rozwiń <i id="dropdown_arrow2" class='bx bx-chevron-down'></i></div>
            <div class="dropdown" onclick="dropdown_arrow(3), dropdown(3)">Rozwiń <i id="dropdown_arrow3" class='bx bx-chevron-down'></i></div>
        </div>
        <div class="dropdown_container">
            <ul style="display: none;" id="dropdown1">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
            </ul>
            <ul style="display: none;" id="dropdown2">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
            </ul>
            <ul style="display: none;" id="dropdown3">
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>
    </header>
    <div id="mobile_menu" style="display: none;">
        <h1>Menu</h1>
        <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
            <li><a href="#">Link 5</a></li>
        </ul>
        <i class='bx bx-x' onclick="mobile_menu()"></i>
    </div>
    <main>
        <h3 class="main_title">Posty</h3>
        <div class="card_wrapper">
            <div class="card">
                <div class="img">
                    <i class='bx bx-image'></i>
                </div>
                <h3 class="card_title">Tytuł posta</h3>
                <a href="#">Czytaj</a>
            </div>
        </div>
    </main>
    <!-- <div class="scroll"></div> -->
    <footer>
        <div class="footer_content">
            <h2>Dariusz Baj</h2>
            <h4>Krótki opis siebie, życiowe motto, hobby</h4>
        </div>
        <div class="footer_content">
            <h4>Kontakt</h4>
            <li><a href="#">Email</a></li>
            <li><a href="#">Facebook</a></li>
        </div>
        <div class="footer_content">
            <h4>Szkoła</h4>
            <li><a href="#">Pracę uczniów</a></li>
            <li><a href="#">Konkursy</a></li>
        </div>
        <div class="footer_content">
            <h4>O mnie</h4>
            <li><a href="#">O mnie</a></li>
        </div>
    </footer>
    <script src="./app.js"></script>
</body>
</html>