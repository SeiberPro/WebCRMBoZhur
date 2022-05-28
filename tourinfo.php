<?php
include 'mainconn.php';
$note_id = $_GET['note'];
$query = "SELECT * FROM tourlist WHERE id = $note_id";
$select_note = mysqli_query($link,$query);
$notes = mysqli_fetch_array($select_note);
if(isset($_POST['okay'])){
    $nameTour = $_POST['nameTour'];
    $start = $_POST['cityfrom'];
    $finish = $_POST['cityto'];
    $price = $_POST['price'];
    if(isset($_POST['okay'])){
        $update_query = "UPDATE tourlist SET start='$start', finish='$finish',price = '$price',nameTour = '$nameTour' WHERE id = '$note_id'";
        $result = mysqli_query ($link, $update_query);
        header('Location: tourlist.php');
    }else{
        $answer = 1;
    }
}
$firstname = 'photoTour/';
$uploadpath = 'photoTour/';
$uploadfile = $uploadpath . basename($_FILES['file']['name']);
$names = $_FILES['file']['name'];
if(move_uploaded_file($_FILES['file'][tmp_name],$uploadfile)){
    $fullname = $firstname . $names;
    $queryphoto = "UPDATE tourlist SET photo='$fullname' WHERE id = '$note_id'";
    $result = mysqli_query($link,$queryphoto);
}
// $firstname = 'photo/';
// $uploadpath = 'photo/';
// $uploadfile =  $uploadpath . basename($_FILES['file']['name']);
// $names = $_FILES['file']['name'];
// if(move_uploaded_file($_FILES['file'][tmp_name],$uploadfile)){
//     $hashaccount = $_COOKIE['hash'];
//     $fullname = $firstname . $names;
//     $query = "UPDATE users SET photo='$fullname' WHERE user_hash = '$hashaccount'";
//     $query_result = mysqli_query($link,$query);
//     header('Location: profile.php');
// };
if($_POST['yesdelet']){
    $delete_query = "DELETE FROM tourlist WHERE id = $note_id"; 
    $delete = mysqli_query($link,$delete_query);
    header('Location: tourlist.php');
}
if(isset($_POST['delete'])){
    $note_id = $_GET['$note'];
    echo '<form action="" method="POST">
    <div class="deleter">Вы уверены, что хотите удалить тур?
    <span style="margin-top:25px;width:100%; text-align:center;">
            <input class="inputdelet" type="submit" value="Да" name="yesdelet">
            <a onclick="javascript:history.back();return false;"><input type="submit" value="Нет" class="inputdelet"></a>
    </span>
    </div>
    </form>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Наш тур</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="styles/tourinfo.css">
    <link rel="shortcut icon" href="img/iconForMain.png">
</head>
<body>
    <div class="main">
        <div class="form">
            <div class="backinfo">
                <a class="backtotour"><i class="fa fa-reply-all fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="coord">
                <form class="changeform" enctype="multipart/form-data" method="post">
                    <div class="coord1">
                        <input name="nameTour" type="text" value="<?php echo $notes[nameTour];?>" id="nameTour">
                        <div class="fieldsinput">
                            <span style="width:30%; color:white;">Страна: </span>
                            <select name="country" class="cityfield" required="required" size="1">
                                <option selected disabled>--Смени страну--</option>
                                <?php
                                $query = 'SELECT name FROM country';
                                $query_result = mysqli_query($link,$query);
                                while($note = mysqli_fetch_array($query_result)){
                                ?>
                                <option class="opt" value="<?php echo $note['name']?>"><?php echo $note['name']?></option>
                                <?php }?>
                            </select>
                        </div>
                        <br>
                        <div class="fieldsinput">
                            <span style="width:30%; color:white;">Откуда: </span>
                                <select name="cityfrom" class="cityfield">
                                    <option class="opt" selected><?php echo $notes['start']?></option>
                                    <?php
                                    $querycity = 'SELECT name FROM city';
                                    $cityresult = mysqli_query($link,$querycity);
                                    while($city = mysqli_fetch_array($cityresult)){
                                    ?>
                                    <option class="opt" value="<?php echo $city['name']?>"<?php echo $city['name']?></option>
                                    <?php }?>
                                </select>
                        </div>
                        <br>
                        <div class="fieldsinput">
                            <span style="width:30%; color:white;">Куда: </span>
                                <select name="cityto" class="cityfield">
                                    <option class="opt" selected><?php echo $notes['finish']?></option>
                                    <?php
                                    $querycity = 'SELECT name FROM city';
                                    $cityresult = mysqli_query($link,$querycity);
                                    while($city = mysqli_fetch_array($cityresult)){
                                    ?>
                                    <option class="opt" value="<?php echo $city['name']?>"><?php echo $city['name']?></option>
                                    <?php }?>
                                </select>
                        </div>
                        <br>
                        <div class="fieldsinput">
                            <?php
                            $pricequery = "SELECT price FROM tourlist";
                            $resultprice = mysqli_query($link,$pricequery);
                            $price = mysqli_fetch_array($resultprice);
                            ?>
                            <span style="width: 30%;color: white;">Цена: </span>
                            <input type="number" name="price" class="cityfield" value="<?php echo $price['price'];?>">
                        </div>
                        <br>
                        <div class="inpi">
                            <input type="submit" value="Удалить" id="delete" name="delete"class="inpdel">
                            <input type="submit" value="Ок" name="okay" id="ok"class="inpdel">
                        </div>
                    </div>
                    <div class="changeInp">
                        <img src="<?php echo $notes['photo']?>" class="imageTour">
                        <!-- <button class="changeImg" id="divChange" onmousedown="changePhoto()">Сменить фото</button> -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                        <input type="file" id="fileDivChange" name="file" class="imageFile" accept="image/*">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/jscode/tourinfo.js"></script>
</body>
</html>