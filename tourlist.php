<?php
include 'mainconn.php';
$hashaccount = $_COOKIE['hash'];
$queryActiveUser = "SELECT user_login FROM users WHERE user_hash = '$hashaccount'";
$queryActiveUserResult = mysqli_query($link,$queryActiveUser);
$nameActiveUser = mysqli_fetch_array($queryActiveUserResult);
$query = "SELECT * FROM tourlist WHERE creator = '".$nameActiveUser['user_login']."'";
$select_note = mysqli_query($link,$query);
$clientsOrder = "SELECT name FROM clients";
$clientsResult = mysqli_query($link,$clientsOrder);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мои туры</title>
    <link rel="stylesheet" href="styles/tourlist.css">
    <link rel="stylesheet" href="styles/css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fon
    ts.googleapis.com/css2?family=Hind+Siliguri&family=Roboto&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/iconForMain.png">    
</head>
<body>
   <header>
        <img class="logo" src="img/rssu.jpg">
        <h1>Мои туры</h1>
        <a href="profile.php" id = "nameUser">
            <h4 class="name">
            <?php
            include 'mainconn.php';
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
        <div class="menu-list">
            <a href = "index.php" class="menu-link">
                <ul class="link" id="strelka">
                    <li><i class="fa fa-chevron-circle-left fa-4x" aria-hidden="true"></i></li>
                </ul>
            </a>
            <ul class="link" id="tourlist">
                    <li class="menu-icon">Мои туры</li>
            </ul>
            <a href = "" class="menu-link">
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
            <div class="createNewTour">
                <input class="createTourButton" type="button" onmousedown="document.location.href='createNewTour.php'" value="Создать новый тур">
            </div>
            <div class="menu-tour">
                <?php
                while($note = mysqli_fetch_array($select_note)){
                $photo = $note['photo'];
                ?>
                <div class='tours' id = "draggable">
                    <div class='info-tour'>
                        <?php echo '<img class="logo1" src="'.$photo.'">';?>
                        <div class='texttravel'>
                            <p><?php echo $note[nameTour];?></p>
                            <table cellspacing="5">
                                <tr>
                                    <td>Откуда:</td>
                                    <td class="from"><a class="linkCity" href="https://ru.wikipedia.org/wiki/<?php echo $note['start']?>" target="_blank"><?php echo $note['start']?></a></td>
                                </tr>
                                <tr>
                                    <td>Куда:</td>
                                    <td><a class="linkCity" href="https://ru.wikipedia.org/wiki/<?php echo $note['finish']?>" target="_blank"><?php echo $note['finish']?></a></td>
                                </tr>
                                <tr>
                                    <td>Цена(руб):</td>
                                    <td><?php echo $note['price']?></td>
                                </tr>
                            </table>
                                <!-- <span style="margin-bottom: 5px;">Откуда:></span>
                                <span style="margin-bottom: 5px;">Куда:</span>
                                <span>Цена:</span> -->
                                <div class="change">
                                    <div class="iconka">
                                        <a class="linkIconLeft" title="Клиенты"><i class="fa fa-users" id="client" aria-hidden="true" style="margin-right:1px;"></i></a><hr>
                                        <a class="linkIconRight" href="tourinfo.php?note=<?php echo $note['id'];?>" title="Параметры"><i class="fa fa-cog fa-lg" id="setting" aria-hidden="true"></i></a><hr>
                                        <a class="linkIconInfo" href="#" title="Информация"><i class="fa fa-info-circle fa-lg"id="info" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <footer><p id="per">© BoZhuR, 2021</p></footer>
    
    <script src="/jscode/clientList.js"></script>
</body>
</html>