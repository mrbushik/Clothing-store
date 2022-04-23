<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="pre-header">
      <div class="pre-header-news">
        Лучшие новинки
      </div>
      <div class="pre-header-block"></div>
      <div class="pre-header-shiping">
          Именитые Бренды
      </div>
    </div>
	<div style="padding: 20px 0 50px" class="header-logo">Luxary Clothing Store</div>

  <div class="login">
	  <div class="log_container">
  	<h2 style="padding: 10px 0 0 0" class="logout">Вход</h2>
 
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label  style="padding: 10px">Имя</label>
  		<input type="text" name="username" placeholder="Логин">
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="password" placeholder="Пароль">
  	</div>
  	<div class="input-group">
  		<button  style="  background-color: #D3E2EB;padding: 5px 15px;border-radius: 5%;"type="submit" class="btn-log" name="login_user">Войти</button>
  	</div>
  	<p style="color: #B8B8B8">
  		Еще не зарегестрированны? <a style="color: #D3E2EB" href="register.php">Зарегестрироваться</a>
  	</p>
  </form>
  </div>
  </div>
</body>
</html>