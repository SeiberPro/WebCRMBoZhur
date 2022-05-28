<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRM BoZhur</title>
    <link rel="stylesheet" href="styles/commerc.css">
    <link rel="shortcut icon" href="img/iconForMain.png">
</head>
<body >
    <div class="hello">
        <input type="button" onmousedown="clickMouse()" value="Появись" class="add">
        <input type="button" id="changeButton" value="Сменить текст" onmousedown="changeButton()">
        <div id="mainform">
            <div id="text"><span id="textMain">great</span></div>
            <!-- <form enctype="multipart/form-data" action=""method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="300000">>
            <input type="file" name="file" accept="image/*">
            <input type="submit" name="ok">
            <?php
            // $uploader = 'photo/';
            // $uploadfile = $uploader . basename($_FILES['file']['name']);
            // echo '<pre>';
            // if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
            //     echo "Файл загружен";
            // }else{
            //     echo "Файл сломался";
            // }
            // $names = $_FILES['file']['name'];
            // print_r($_FILES);
            // print "</pre>";
            ?>
            </form> -->
        </div>
        <input type="button" value="Создать блок" class="createButton" onmousedown="createDiv()">
        <button onmousedown="deleteBlock()">Удалить</button>
    </div>
    <div class="about">
        <div>
            2
            <button onclick = "alertBlock(goUp)">goooo</button>
        </div>
        <div>
            <input id = "inpTable" type="number">
            <button id = "vTable" onclick ="createTable()">Построить таблицу</button>
        </div>
    </div>
    <div class = "clickCommerc" onclick = "clickCommerc()">
        <h1 id="h3" style="font-size:4em;">Запустить таймер</h1>
    </div>
    <br><br>

    <!-- <iframe width="500" height="300" src="http://www.youtube.com/embed"style="border-radius:29px"></iframe> -->


    <!-- //////ScriptLink/////// -->
    <input type="text" placeholder="Введи число" id="textInper"><button id="but">ок</button><button id="delInner">X</button>
    <div class="uprazh">
        
    </div>
    <input id = "inputMassive" type="text" placeholder="Ввести число в массив" style = "width:300px; height: 50px;
    border-radius: 30px;">
    <button id = "buttonMassive">Ввести</button>
    <script src="/jscode/commerc.js"></script>
</body>
</html>