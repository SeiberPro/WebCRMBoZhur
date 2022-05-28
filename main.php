<?php
function generateCode($length=6){
    $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code="";
    $clen=strlen($chars)-1;
    while(strlen($code) < $length){
        $code.=$chars[mt_rand(0,$clen)];
    }
    return $code;
}
$link=mysqli_connect("localhost","root","root","bozhur");
if(isset($_POST['submit'])){
    $query = mysqli_query($link,"SELECT * FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."'LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    $passw_hash=md5(md5($data['user_password']));
    if($passw_hash===md5(md5($_POST['password']))){
        $hash = md5(generateCode(10));
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."'WHERE id='".$data['id']."'");
        // mysqli_query($link, "UPDATE tourlist SET creator='".$data['user_login']."'WHERE user_id ='".$data['id']."'");
        setcookie("id",$data['id'],time()+60*60*24*30,"/");
        setcookie("hash",$hash, time()+60*60*24*30,"/",null,null,true);
        header("Location: index.php");exit();
    }else{
        $alert=1;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>CRM BoZhur</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="shortcut icon" href="img/iconForMain.png">
</head>
<body>
    <form method="post">
        <div class="main">
            <div class="password">
               <div class="field">
                   <span>Логин</span>
               </div>
               <hr><br>
               <input required="required" type="text" class="fieldinp" name="login">
               <div class="field">
                   <span>Пароль</span>
               </div>
               <hr><br>
               <input required="required" type="password" class="fieldinp" name="password">
               <input type="submit" value="Войти" class="okay" name="submit">
               <br>
               <?php
               if($alert==1){
                   echo '<div class="alert">Вы ввели неверные данные</div>';
               }
               ?>
            </div>
        </div>
    </form>
</body>
</html>