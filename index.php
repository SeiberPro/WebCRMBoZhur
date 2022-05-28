<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRM BoZhur</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Roboto&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="img/iconForMain.png">
    </head>
    <body>
        <header>
            <img class="logo" src="img/rssu.png">
            <h1>CRM BoZhur</h1>
            <a href="profile.php">
                <h4 class="name">
                    <?php
                    include 'mainconn.php';
                    $hashaccount = $_COOKIE['hash'];
                    $query = "SELECT surname,photo FROM users WHERE user_hash ='$hashaccount'";
                    $resultquery = mysqli_query($link,$query);  
                    $notes = mysqli_fetch_array($resultquery);
                    echo $notes['surname'];
                    ?>
                </h4>
                <img class="logotype" src="<?php echo $notes['photo']?>" alt="Ты">
            </a>
        </header>
        <div class="main">
            <div class="menu">
                <ul class="menu-list">
                    <a class="menu-link" href="tourlist.php"><li class="menu-icon">Мои туры</li></a>
                    <a class="menu-link" href=""><li class="menu-icon">Сообщения</li></a>
                    <a class="menu-link" href=""><li class="menu-icon">Создание тура</li></a>
                    <a class="menu-link" href="commerc.php"><li class="menu-icon">Главная тест</li></a>
                    <a class="menu-link" href="main.php"><li class="menu-icon">Пароль тест</li></a>
                </ul>
            </div>
            <div class="main-content">

            </div>
        </div>
        <footer><p>© BoZhuR, 2021</p></footer>
    </body>
</html>