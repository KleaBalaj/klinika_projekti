<!DOCTYPE html>
<?php
	define("TITLE", "Sherbime1 | DentalCare");
	
	include('includes/header.php');
?>
<html>
<head>
	<title>Stafi</title>
	</head>
	
<body>
	<div style="background-image: url('img/staf2.jpg');
  background-repeat: no-repeat;
  background-attachment: relative;
  background-position:right;
  background-size: 70% 110%;
  background-opacity:0.8;
  background-position: margin-left: 50%;">
  <p style="width:500px">
	<?php 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
session_start();
$con = mysqli_connect('localhost', 'root', '');
$select = mysqli_select_db($con, 'klinika');
$sql = "select * from staf_foto where ID_foto=3";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<br>"."<strong>Emri: </strong>".$row["Emri"]."<br>".
			"<strong> Kualifikimet : </strong>".$row["info"]."<br>";
	}
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
</p>
</div>

<br>
<a href="stafi_db.php" class="button">&laquo; Kthehu</a>
	<hr>
<?php include('includes/footer.php'); ?>
</body>
</html>
