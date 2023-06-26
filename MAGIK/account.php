
<!DOCTYPE html>
<html lang="en">
<head>     
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/account.css">
    <title>MAGIK</title>
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
    



    <div class="container1">
        <div class="screen">
            <div class="screen__content">
                <div class="social-login1" style="padding-top: 23px;">
                    <h4>Вход</h4>
                    
                </div>
                <form action="login.php" class="login" method="post">
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="Логин/Email" name="login">
                    </div>

                    <div class="login__field" style="padding-top: 10px;">
                        <i class="login__icon fas fa-lock" style="padding-top: -10px;" ></i>
                        <input type="password" class="login__input" placeholder="Пароль" name="password">
                    </div>
                    

                    <button  class="button login__submit">
                         <span class="button__text" >ВОЙТИ</span> 
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                            <form action="register.php"> 
                                 <button class="button login__submit1">
                                    <span class="button__text1" >РЕГИСТРАЦИЯ</span>
                                     <i class="button__icon fas fa-chevron-right1"></i>
                                 </button>		
                            </form>

              

                    


                    <div class="social-login" style="padding-top: -15px;">
                        <h3 style="font-family: soledago" >Вход <br> с помощью:</h3>
                        <div class="social-icons">
                            <a href="https://vk.com/feed"> <img src="../MAGIK/assets/images/vk.png " style="width: 65px; height: 48px; ">
    
                            </a>
                            <a href="https://web.telegram.org/a/"> <img src="../MAGIK/assets/images/tg.png" style="width: 47px; height: 47px; "></a>
                            <a href="#" class="social-login__icon fab fa-twitter"></a>
                        </div>
                    </div>
    
                    



            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>		
        </div>
    </div>


    <div class="container-footer w-container">
        <div class="w-row">
          <div class="footer-column w-clearfix w-col w-col-4" ><img src="../MAGIK/assets/images/icon.png " alt="" width="40" class="failory-logo-image" style="padding-left: 13px;">
            <h3 class="footer-failory-name"style="padding-left: 55px;" >MAGIK</h3>
            <p class="footer-description-failory"style="padding-left: 55px;">Магазин  одежды <br>только для тебя<br></p>
          </div>


          <div class="footer-column w-col w-col-8">
            <div class="w-row">
              <div class="w-col w-col-8">
                <div class="w-row">
                  <div class="w-col w-col-7 w-col-small-6 w-col-tiny-7" style="padding-right: 25px;">
                    <h3 class="footer-titles">Компания</h3>
                    <p class="footer-links"><a href="" target="_blank"><span class="footer-link">О компании<br></span></a>
                        <a href=""><span class="footer-link">Новости<br></span></a>
                        <a href=""><span class="footer-link"></span>Контакты</a>
                        <span><br></span>
                        <a href=""><span class="footer-link">Работай у нас<br></span></a>
                        
                           
                            <strong><br></strong></p>
                  </div>
                  <div class="w-col w-col-5 w-col-small-6 w-col-tiny-5" style="padding-right: 10px;">
                    <h3 class="footer-titles">Информация</h3>
                    <p class="footer-links">
                        <a href=""><span class="footer-link">Оффлайн-Магазины<br></span></a>
                        <a href=""><span class="footer-link">Условия оплаты<br></span></a>
                        <a href=""><span class="footer-link">Условия доставки</span></a>
                        <a href=""><span class="footer-link">Возврат<br></span></a>
                        
                        <a href=""><span class="footer-link">FAQ</span></a>
                        <strong><br></strong></p>
                  </div>
                </div>
              </div>
              <div class="column-center-mobile w-col w-col-4" style="padding-left: 55px;">
                <h3 class="footer-titles" >Подпишись на нас!</h3>
                <a href="https://vk.com/MagikClothing" target="_blank" class="footer-social-network-icons w-inline-block"><img src="../MAGIK/assets/images/vkwhiteblack.png" width="21" alt="Pinterest Icon" class=""></a>
                <a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbfe70fcf5a0514c5b1da_Instagram%20Icon.svg" width="20" alt="Instagram icon"></a>
                
                <a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="..//MAGIK/assets/images/tgblackwhite.png" width="21" alt="LinkedIn Icon"></a>
                
          
        </div>
      </div>
    </div>
  </div>
</div>
