<!DOCTYPE html>

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php
include('includes/header.php');
?>

<html>
<head>
	<title>Rezervo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
<div class="content">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="font-size:20px; text-align:center;"><strong>Mireserdhe <?php echo $_SESSION['username']; ?>!</strong><br>
		<em>Ketu mund te kryesh rezervimin per viziten tende prane nesh.</em></p>
    	<p><em> <a href="rezervo.php?logout='1'" style="color: red; font-size:25px; margin-left:50%;">Dil</a></em> </p>
    <?php endif ?>
</div>

<div class="login-box">
	  <div class="log">

<form method="post" action="validim_rez.php">
	<div class="majtas">
<p style="text-decoration:underline;"><b>Te dhenat personale</b></p>
<label style="margin-right:20px;">Username </label>
  	  <input type="text" name="username" readonly value="<?php echo $_SESSION['username']; ?>" ><br> 

  	  <label style="margin-right:59px;">Emri</label>
		<input type="text" name="emri" ><br>

		<label style="margin-right:35px;">Mbiemri</label>
		<input type="text" name="mbiemri"><br>
  
  	  <label style="margin-right:45px;">Mosha</label>
  	  <input type="text" name="mosha"><br>
  
  	  <label style="margin-right:45px;">Gjinia</label>
		<input type="radio" name="gjinia" value="Femer" checked>F
		<input type="radio" name="gjinia" value="Mashkull" >M<br><br>
	</div>
	<div class="djathtas">
<p style="text-decoration:underline;"><b>Te dhenat e rezervimit</b></p>
  	  <label style="margin-right:44px;">Data</label>
		<input type="date" name="data" ><br>

		<label style="margin-right:50px;">Ora</label>
  	  <input type="time" name="ora" ><br>
  	
		<label for="kategori" style="margin-right:15px;">Kategori</label>
		<select id="kategori" name="kategori">
		<?php
$con = mysqli_connect('localhost', 'root', '','klinika');
$sql = "select * from kategori_sherbimi ";
$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
                   echo  "<option>" .$row['kategori']. "</option>";
                }
           ?>
		   </select>
	</div>

	<input style="margin:20px 320px;" type="submit" class="btn" name="rez" value="Rezervo">
	</form>
	</div>
  </div>
  <hr>

  <div class="tabeladergim">
	<h2 style="margin-left:400px;color:black;"> Llogaria juaj </h2>
	<h2 style="margin-left:350px;color:black;"><em>Historiku rezervimeve:</em> </h2>
	<table class="tabela" >
            <tr>
                <th style="text-align:left;height: 50px;width:200px;">Emaili </th>
                <th style="text-align:left;height: 50px;width:100px;">Data </th>
                <th style="text-align:left;height: 50px;width:100px;">Ora </th>
                <th style="text-align:left;height: 50px;width:150px;">Kategoria </th>
				<th style="text-align:left;height: 50px;width:400px;">Konfirmimi</th>
            </tr>
			<?php


$con = mysqli_connect('localhost', 'root', '','klinika');
$sql = "select * from rezervim where username='{$_SESSION['username']}'";
$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr>";
                   echo  "<td>"   .$row['username'].  "</td>";
                    echo "<td>"   .$row['data']." </td>";
                    echo "<td>"   .$row['ora']. "</td>";
                    echo "<td>"   .$row['kategoria']. " </td>";
					echo  "<td>"  .$row['Konfirmimi']. "</td>";
                    echo "</tr>";
                }
           ?>

        </table>
</div>
<br><br><br><hr>
<?php include('includes/footer.php'); ?>
</body>
<style type="text/css">

form, {
	width: 60%;
	margin:0px auto;
	padding: 20px;
	background: white;
	opacity:0.5;
	border-radius: 0px 0px 10px 10px;
}
.btn{
	padding: 10px;
	font-size:15px;
	color:white;
	background: #003380;
	border:none;
	border-radius: 5px;
}

.login-box{
	background-image: url('img/rezervo.jpg');
	background-repeat: no-repeat;
  background-attachment: relative;
  background-position:top;
	margin: -20px 100px 20px ;
  background-color:  #8cb3d9;
  border: 5px solid #2d5986;
  opacity:1;
  width:800px;
  height:480px;
  border-radius:18%;
  background
}
.log{
	margin: 5%;
  font-weight: bold;
  color: #000000;
}
.majtas{
	float:left;
	width:320px;
	border:2px solid #2d5986;
	margin:160px 0px 0 30px;
	height:170px;
	padding-left:5px;
	
}
.djathtas{
	float:right;
	width:320px;
	border:2px solid #2d5986;
	margin:160px 30px 0 0px;
	height:170px;
	padding-left:5px;
}
.tabela{
	border-collapse: collapse;
	width:700px;
	margin-left:170px;
	background:#8cb3d9;
	color:black;
	font-weight:4px;
	border: 5px solid #2d5986;
}
.tabela, td, th{
	border-collapse: collapse;
	border: 5px solid #2d5986;
}
}

</style>
</html>
