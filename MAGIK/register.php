<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/register.css">
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
    
            <a class="korzina" href="#"><img src="../MAGIK/assets/images/iconskorzina.png"
                style="width: 31px; height: 30px;" ></a>
                
            
        </div>
        </header>

        <div class="container1">
        <div class="screen">
            <div class="screen__content">
                <div class="social-login1" style="padding-top: 23px;">
                    <h4>  РЕГИСТРАЦИЯ</h4>
                    
                </div>
                    <form action="registers.php" class="register" method="post">
                    <div class="register__field">
                        <i class="register__icon fas fa-user"></i>
                        <input type="text" class="register__input" placeholder="Логин/Email" name="login">
                    </div>

                    <div class="register__field" style="padding-top: 10px;">
                        <i class="register__icon fas fa-lock" style="padding-top: -10px;" ></i>
                        <input type="password" class="register__input" placeholder="Пароль" name="password">
                    </div>
            
                    <div class="register__field" style="padding-top: 10px;">
                        <i class="register__icon fas fa-lock" style="padding-top: -10px;" ></i>
                        <input type="password" class="register__input" placeholder="Повторите пароль" name="repeatpassword">
                    </div>
                    
                                 <button class="button register__submit1">
                                    <span class="button__text1" >РЕГИСТРАЦИЯ</span>
                                     <i class="button__icon fas fa-chevron-right1"></i>
                                 </button>		
                            </form>

            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>






</body>
</html>