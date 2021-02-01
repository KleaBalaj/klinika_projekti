<?php include('server.php') ?>
<?php
include('includes/header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Regjistrimi </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Regjistrohu</h2>
  </div>
	<div class="login-box">
		<div class="log">
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Fjalekalimi</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Konfirmo fjalekalimin</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Regjistrohu</button>
  	</div>
  	<p>
  		Jeni te regjistruar? <a href="login.php">Hyr</a>
  	</p>
  </form>
</div>
</div>
  <style type="text/css">
.header{
    width: 59%;
    height: 40px;
	margin: 10px auto 0px;
	color:white;
	background: #5F9EA0;
	text-align:center;
	border:1px solid #B0C4DE;
	border-bottom:none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
.login-box{
	margin: 0px 250px 0 184px ;
  background-color:white;
  border: 1px solid black;
  opacity: 0.9;
  filter: alpha(opacity=60);
  width:63%;
}
.log{
	margin: 5%;
  font-weight: bold;
  color: #000000;
}

.input-group{
	margin: 10px 0px 10px 0px;
}
.input-group label{
	display: block;
	text-align:left;
	margin:2px;
}
.input-group input{
	height:30px;
	width: 50%;
	padding: 5px 10px;
	font-size:16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn{
	padding: 10px;
	font-size:15px;
	color:white;
	background: #5F9EA0;
	border:none;
	border-radius: 5px;
}
</style>
</body>

</html>
<?php
include('includes/footer.php');
?>
