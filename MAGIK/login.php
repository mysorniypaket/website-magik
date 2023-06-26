

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/shapka.css">
</head>
<body>
    
<header>
        <div class="container">
            <a class="logo" href="index.php">MAGIK</a>
            <a class="menu" href="#"> <img src="../MAGIK/assets/images/menu.png" 
                style="width: 30px; height: 30px; margin-top: 11px;"> </a>
    
            <a class="poisk" href="#"> <img src="../MAGIK/assets/images/iconslupa.png" 
                style="width: 30px; height: 30px;"> </a>
    
            <a class="user" href="account.php"> <img src="../MAGIK/assets/images/user.png" 
                style="width: 30px; height: 30px; "> </a>
    
            <a class="favorite" href="#"> <img src="../MAGIK/assets/images/iconsheart.png" 
                style="width: 34px; height: 30px;"> </a>     
    
            <a class="korzina" href="korzina.php"><img src="../MAGIK/assets/images/iconskorzina.png"
                style="width: 31px; height: 30px;" ></a>
                
            
        </div>
    </header>
    




<div class="echo" style="padding-top: 250px;padding-left: 43%;">

<?php 
require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

if(empty($login) || empty($password)) 
{
    echo "Заполните все поля";

} else 
    {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);
    }
 if ($result->num_rows > 0)
 {












    while($row = $result->fetch_assoc()) 
    {
        echo "
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        Добро пожаловать " . $row ['login'];
        
    }
    
 } else {
    echo " Нет такого пользователя";
}

?>

</div>
<div class="sylka" style="color: black; padding-left: 30%; text-decoration:none;">
<a href="index.php">Нажмите здесь чтобы перейти на главную страницу за покупками</a>

</div>
</body>
</html>