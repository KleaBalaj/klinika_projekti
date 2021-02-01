<!DOCTYPE html>
<?php
	define("TITLE", "Sherbime1 | DentalCare");
	
	include('includes/header.php');
?>
<html>
<head>
	<title>Sherbime</title>
	<?php 
echo "<br>";
session_start();
$con = mysqli_connect('localhost', 'root', '');
$select = mysqli_select_db($con, 'klinika');
$sql = "select emri, Cmimi from sherbimi where ID_kategori=7";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo "<br>"."<strong> Titulli : </strong>".$row["emri"]."<br>".
			"<strong> Cmimi : </strong>".$row["Cmimi"]." euro"."<br>";
	}
}
?>
</head>
<body>
<br>
<a href="sh_kategori.php" class="button">&laquo; Kthehu</a>
	<hr>
<?php include('includes/footer.php'); ?>
</body>
</html>
