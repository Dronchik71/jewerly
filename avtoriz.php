<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
   <link rel="stylesheet" type="text/css" href="css/1.css">
		<meta charset="utf-8">
		<script src="https://kit.fontawesome.com/d79a40c9ad.js"></script>
        <title>Вход и Регистрация</title>
		
		 

		
		
		
   </head>
   <body>
   <div  id="block1">
        <div align="left">
        <div id="o"> 
            <font color="black"> 8-800-555-66-66</font>
        </div> 
    </div>
        <div align="right"  >
        <ul class="verx">
            <li><a href="php/kontakty.php">Контакты</a></li>
            <li><font color="black">|</font></li>
            <li><a href="avtoriz.php">Вход</a></li > <li> <a href="registr.php" target="_self">Регистрация</a></li> 
        </ul>
    </div>
</div>
</div>
<br>
        </br>
        <div class="container">
            <div align="right">
                 <a class="header__cart" href="php/korzina.php">
                    <span class="header__cart-num">0</span>
                    <span class="header__cart-price">
                        Нет товаров  
                    </span>
                </a>
            </div>

            <div id="p">
             <input type="search" name="#e" placeholder="Поиск по каталогу"> 
             <input type="submit" value="Найти">

                </div>
        
        <div align="center">
        <div class="header__logo">
            <a class="logo-block" href="index.php">       
                <img src="img/logo.PNG">
            </a>
        </div>
    
        </div>
        <h1 style="position: relative;text-align: center;">Авторизация</h1>
        <div align="center">
        <ul class="niz">
        <li><a href="obkompanii.php">Об компании</a></li>
            <li><a href="akcii.php">Акции</a></li>
            <li><a href="pomosh.php">Помощь</a></li>
            <li><a href="inet.php">Интернет-магазин</a></li>
            <li><a href="otziv.php">Отзывы</a></li>
           </ul>
        </div>
        <br>
        </br>

    <?php
        require('connect.php');
        if(isset($_POST['username']) and isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
    
                $query = "SELECT * FROM user WHERE username='$username' and password='$password'";
                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                $count = mysqli_num_rows($result);
    
                if($count == 1) {
                    $_SESSION['username'] = $username;
                } else {
                    $fmsq = "Ошибка - неверное имя или пароль";
                }
            }
    
        if(isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "<center><h1 style=color:'white';>Добро пожаловать, $username</h1></center> ";
                echo "<center><a href='logaut.php'><h1>Выйти</h1></a></center>";
            }
        


    ?>


   
      <div class="contentRigistr">
		
		
		<div class="blockRegistr">
		
			
            <div class="regaa">
            
            

            
            <?php  if(isset($fmsq)) {  ?><div class="alert-false" role="alert"> <center><?php echo $fmsq; ?></center> </div><?php } ?>


			<form class="form-avt" method="POST">
				
				<center><input type="text" name="username" placeholder="Username" required></center>
				<center><input type="password" name="password" placeholder="Password" required></center>
				
				<center><button type="submit" id="avt">Войти</button><center>
				
			</form>
			</div>
			
			
		
		</div>
		
		
	  </div>
		
		
		<br>
        <br>
        <br>
        <br>
	  
   </body>
   <div  id="block2"  align="center">
                    <div id="tt">
                <h3><font color="#808080">Бесплатный звонок по России</font></h3> 
                <h3><font color="#808080">ежедневно 9:00 - 17:00</font></h3>
                <h2><font color="#333">8-800-555-66-66</font></h2>
                <h3><font color="#808080">&copy Дементьев Андрей</font></h3>
            </div>

                <div id="ttt" align="center">
                    <a href=""><h4 align="center"><font color="#000000">Интернет-магазин</font></h4></a>
                    <hr align="center" width="20" size="2" color="black" />
                    <ul align="center">
                        <li>
                            <a href="php/inet.php"><font color="#000000"></font>Кольца</font></a>
                        </li>
                        <li>
                            <a href="php/inet.php"><font color="#000000">Серьги</font></a>
                        </li>
                        <li>
                            <a href="php/inet.php"><font color=#000000>Подвески</font></a>
                        </li>
                        <li>
                            <a href="php/inet.php"><font color="#000000">Золото</font></a>
                        </li>
                        <li>
                            <a href="php/inet.php"><font color="#000000">Серебро</font></a>
                        </li>
                        <li>
                            <a href="php/akcii.php"><font color="#000000">Акции</font></a>
                        </li>
                    </ul>
                </div>

          <div id="tttt" align="center" >
            <a href=""><font color="#000000"><h4  align="center">Информация</font></h4></a>
            <hr align="center" width="20" size="2" color="black" />
            <ul align="center">
                <li><a href="php/dostavka.php"><font color="#000000">Доставка и оплата</font></a></li>
                <li><a href="php/garantiya.php"><font color="#000000">Гарантия и возврат</font></a></li>
                <li><a href="php/akcii.php"><font color="#000000">Подарочные сертификаты</font></a></li>
            </ul>
        </div>
                </div>
</html>