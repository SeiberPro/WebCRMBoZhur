<?php
$namePage = "Личный кабинет";
include 'needstructure.php';
include 'mainconn.php';
$hashaccount = $_COOKIE['hash'];
$query = "SELECT * FROM users WHERE user_hash ='$hashaccount'";
$resultquery = mysqli_query($link,$query);  
$info = mysqli_fetch_array($resultquery);

if(isset($_POST['exampleSub'])){
    $example = $_POST['exInp'];
    echo "<script>alert(\"Вы вошли на сайт, как гость.\");</script>"; 
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $info['name'] ." ".$info['surname']?></title>
    <link rel="stylesheet" href="styles/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="shortcut icon" href="img/iconForMain.png">
</head>
<body>
    <div class="main">
        <div class="menu">
            <ul class="menu-list">
                <a onclick = "history.back()" class="menu-link">
                    <li class="menu-icon" id="back"><i class="fa fa-chevron-circle-left fa-4x" aria-hidden="true"></i></li>
                </a>
                <a href="tourlist.php" class="menu-link">
                    <li class="menu-icon">Мои туры</li>
                </a>
                <a href="" class="menu-link">
                    <li class="menu-icon">Сообщения</li>
                </a>
                <a href="" class="menu-link">
                    <li class="menu-icon">Создание тура</li>
                </a>
            </ul>
        </div>
        <div class="content">
            <div class="content-menu">
                    <div class="aboutu">
                        <div class="aboba">
                            <ul class="zaglav"><i class="fa fa-address-card-o" aria-hidden="true"></i>Личные Данные</ul>
                            <hr style="width:80%; margin-left:10%;background:black;border: 1px solid black;">
                            <div class="table">
                                <table class="stat">
                                <tr><td>Фамилия:<?php echo $info['surname'];?></td></tr>
                                <tr><td>Имя:<?php echo $info['name']?></td></tr>
                                <tr><td>Отчество:<?php echo $info['patronymic']?></td></tr>
                                <tr><td>Группа:<?php echo $info['groups']?></td></tr>
                                <tr><td></td></tr>
                                <!-- <tr><td class="settings"><a href="photoprofile.php" class="photolink"><i class="fa fa-cogs fa-lg" aria-hidden="true"></i></a></td></tr> -->
                                </table>
                                <div id="photoChange">
                                    <img src="<?php echo $info['photo']?>"id="photoAccount" value="Сменить фото">
                                    <button>Сменить фото</button>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                </a>-->
                <a href="#">
                    <div class="aboutu">
                        <div class="aboba">
                            <ul class="zaglav"><i class="fa fa-users" aria-hidden="true"></i>  Мои клиенты</ul>
                            <hr style="width:80%; margin-left:10%;">
                            <ul class="stat">
                               <li>1:<input type="text"></li>
                               <li>2:<input type="text"></li>
                               <li>3:<input type="text"></li>
                               <li>4:<input type="text"></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a>
                    <div class="aboutu">
                        <div class="aboba">
                            <ul class="zaglav"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Заметки</ul>
                            <hr style="width:80%; margin-left:10%; border: 1px solid black;">
                            <ul class="stat">
                               <li class="listNote">1:<input type="text" class = "noteNeed"></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="aboutu">
                        <div class="aboba">
                            <ul class="zaglav"><i class="fa fa-suitcase" aria-hidden="true"></i>  Нужные Города</ul>
                            <hr style="width:80%; margin-left:10%;">
                            <ul class="stat">
                               <li>1:<input type="text"></li>
                               <li>2:<input type="text"></li>
                               <li>3:<input type="text"></li>
                               <li>4:<input type="text"></li>
                            </ul>
                        </div>
                    </div>
                </a>
                <br><br><br><br><br>
                <div class="infoStudentStat">
                    Info
                </div>
            </div>
        </div>
    </div>
    <footer>
    <p>© BoZhuR, 2021</p> 
    </footer>
    <script src="jscode/profile.js"></script>
</body>
</html>