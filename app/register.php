<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/style.min.css">
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
  <div  style="height: 385px; width: 332px;"class="log_container">
  	<h2 style="padding: 10px 0 0 0;color: #B8B8B8">Регистрация</h2>	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Имя</label>
  	  <input type="text" name="username" placeholder="Ваше имя" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email"placeholder="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1"placeholder="Пароль">
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label>
  	  <input type="password" name="password_2" placeholder="Подтвердите пароль">
  	</div>
  	<div class="input-group">
  	  <button style="  background-color: #D3E2EB;padding: 5px 15px;border-radius: 5%; type="submit" class="btn" name="reg_user">Зарегестрироваться</button>
  	</div>
  	<p style="color: #B8B8B8">
  		Уже зарегестрированны? <a style="color: #D3E2EB" href="login.php">Авторизация</a>
  	</p>
  </form>
  </div>
  </div>
</body>
</html>