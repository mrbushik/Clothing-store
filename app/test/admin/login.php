<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="../css/style.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


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
  </form>
  </div>
  </div>
</body>
</html>