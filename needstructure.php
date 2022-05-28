<link rel="stylesheet" href="styles/needstyle.css">
<header>
    <img class="logo" src="img/rssu.jpg">
    <h1><?php echo $namePage;?></h1>
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