<?php
include 'mainconn.php';
$firstname = 'photo/';
$uploadpath = 'photo/';
$uploadfile =  $uploadpath . basename($_FILES['file']['name']);
$names = $_FILES['file']['name'];
if(move_uploaded_file($_FILES['file'][tmp_name],$uploadfile)){
    $hashaccount = $_COOKIE['hash'];
    $fullname = $firstname . $names;
    $query = "UPDATE users SET photo='$fullname' WHERE user_hash = '$hashaccount'";
    $query_result = mysqli_query($link,$query);
    header('Location: profile.php');
};
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование профиля</title>
    <link rel="stylesheet" href="styles/photoprofile.css">
    <link rel="shortcut icon" href="img/iconForMain.png">
</head>
<body>
    <div class="glav">
        <div class="main">
            <form action="" enctype="multipart/form-data" method="post" class="form">
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
            <input type="file" name="file" accept="image/*"class="inp"><br><br>
            <input type="submit" name="ok" class="inp">
            </form>
        </div>
    </div>
</body>
</html>