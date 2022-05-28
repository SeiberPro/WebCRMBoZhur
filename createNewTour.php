<?php
$namePage = "Создание тура";
include 'needstructure.php';
include 'mainconn.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание тура</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/iconForMain.png">
    <link rel="stylesheet" href="/styles/createNewPage.css">
    <link rel="stylesheet" href="/styles/css/font-awesome.css">
</head>
<body>
<div class="main">
        <div class="menu-list">
            <a href="index.php" class="menu-link">
                <ul class="link" id="strelka">
                    <li><i class="fa fa-chevron-circle-left fa-4x" aria-hidden="true"></i></li>
                </ul>
            </a>
            <a href="tourlist.php" class="menu-link">
                <ul class="link" id="tourlist">
                        <li class="menu-icon">Список туров</li>
                </ul>
            </a>
            <a href="" class="menu-link">
                <ul class="link">
                    <li class="menu-icon">Сообщения</li>
                </ul>
            </a>
            <a href="" class="menu-link">
                <ul class="link">
                    <li class="menu-icon">Создание тура</li>
                </ul>
            </a>
        </div>
        <div class="content">
            <div class="createForm">
                <form action="" method="post" enctype="multipart/form-data" class="formTour">
                    <div class="inpTour">
                        <?php
                        
                        ?>
                        <input type="text" placeholder="Введите название тура">
                        <span>Страна
                            <select name="" class="selecForm">
                                <option value="" class="optForm">hello</option>
                            </select>
                        </span>
                        <span>Откуда
                            <select name=""  class="selecForm">
                                <option value="" class="optForm"></option>
                            </select>
                        </span>
                        <span>Куда
                            <select name="" class="selecForm">
                                <option value="" class="optForm"></option>
                            </select>
                        </span>
                        <span>Цена
                            <select name=""  class="selecForm">
                                <option value="" class="optForm"></option>
                            </select>
                        </span>
                        <span>Еще что-то
                            <select name="" class="selecForm">
                                <option value="" class="optForm"></option>
                            </select>
                        </span>
                    </div>
                    <div class="imageTour">
                        <img src="" alt="Тур">
                    </div>
                </form>
            </div>
        </div>
</div>
<footer><p>© BoZhuR, 2021</p></footer>
</body>
</html>