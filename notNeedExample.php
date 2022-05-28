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
    $query = mysqli_query($link,"SELECT id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."'LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    $passw_hash=md5(md5($data['user_password']));
    if($passw_hash===md5(md5($_POST['password']))){
        $hash = md5(generateCode(10));
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."'WHERE id='".$data['id']."'");
        setcookie("id",$data['user_id'],time()+60*60*24*30,"/");
        setcookie("hash",$hash, time()+60*60*24*30,"/",null,null,true);
        header("Location: https://htmlweb.ru/php/example/avtorizacija2.php");exit();
    }else{
        print "Вы ввели неправильные данные <br>";
    }
}
?>