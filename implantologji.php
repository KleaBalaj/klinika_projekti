<!DOCTYPE html>
<?php
	define("TITLE", "Sherbime1 | DentalCare");
	
	include('includes/header.php');
?>
<html>
<head>
	<title>Sherbime</title>
	<p style="background-image: url('img/sherbim.jpg');
  background-repeat: no-repeat;
  background-attachment: relative;
  background-position:center;
  background-size: 100% 130%;
  background-opacity:0.8;
  background-position: margin-left: 50%;">
	<title>Sherbime</title>
	<br>
	<br>
	<br>
	<br>
	<?php 
echo "<br>";
session_start();
$con = mysqli_connect('localhost', 'root', '');
$select = mysqli_select_db($con, 'klinika');
$sql = "select emri, Cmimi from sherbimi where ID_kategori=1";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<br>"."<strong> Titulli : </strong>".$row["emri"]."<br>".
			"<strong> Cmimi : </strong>".$row["Cmimi"]." euro"."<br>";
	}
}
?>
<br>
<br>
<br>
</head>
<body>
	<br>
<a href="sh_kategori.php" class="button">&laquo; Kthehu</a>
	<hr>
<?php include('includes/footer.php'); ?>
</body>
</html>
