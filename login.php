<?php include('server.php') ?>
<?php
include('includes/header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Regjistrimi</title>
</head>
<body>
<div style="background-image: url('img/hyr.png');
  background-repeat: no-repeat;
  background-attachment: relative;
  background-position:center;
  background-size: 150% 160%;">
  <div class="login-box">
	  <div class="log">
  	<h2><strong>Hyr</strong></h2>
  
  <form method="post" action="login.php">
	  <?php include('errors.php'); ?>
	  
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username"  >
  	</div>
  	<div class="input-group">
  		<label>Fjalekalimi</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Nuk jeni regjistruar ende? <a href="register.php">Regjistrohu</a>
  	</p>
  </form>
  
</div>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br>	
</div>
  <style type="text/css">

form, {
	width: 60%;
	margin:0px auto;
	padding: 20px;
	background: white;
	opacity:0.5;
	border-radius: 0px 0px 10px 10px;
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
	background: #003380;
	border:none;
	border-radius: 5px;
}
.success{
	color:#3c763d;
	background: #dff0d8;
	border:1px solid #3c763d;
	margin-bottom:20px;
}
.login-box{
	margin: 20px 300px 0 -30px ;
  background-color:  #4d94ff;
  border: 1px solid black;
  opacity: 0.7;
  filter: alpha(opacity=60);
  width:450px;
  border-radius:5px;
}
.log{
	margin: 5%;
  font-weight: bold;
  color: #000000;
}

</style>
</body>
<hr>

</html>
<?php
include('includes/footer.php');
?>

