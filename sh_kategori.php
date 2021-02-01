<!DOCTYPE html>
<?php
	define("TITLE", "Sherbime1 | DentalCare");
	
	include('includes/header.php');
?>
<html>
<head>
	<title>Sherbime</title>
	</head>
	<body>
	
	<?php 
echo "<br>";
echo "<h2> Kategorite e sherbimeve tona i gjeni te listuara me poshte :</h2>";
echo "<br>";
echo "<br>";
?>
<div style="background-image: url('img/sherbimii.jpg');
  background-repeat: no-repeat;
  background-attachment: relative;
  background-position:center;
  background-size: 130% 110%;">

<?php
echo "<p style='font-size:20px;'><em>Klikoni kategorine per te pare sherbimet perkatese</em></p>";
echo "<br>";
?>
<p>
	<ol>
<li> <a href="implantologji.php "> Implantologji</a></li>
<li> <a href="Kellef_UraPorcelani.php">Kellef Ura Porcelnai</a></li>
<li><a href="Ortodonci.php">Ortodonci</a></li>
<li> <a href="Proteza_te_levizshme.php"> Proteza te levizshme</a></li>
<li> <a href="Terapi_Mbushje.php"> Terapi mbushje</a></li>
<li> <a href="Punimet_tek_Femijet.php">Punimet tek femijet</a></li>
<li> <a href="kirurgji.php">Kirurgji</a></li>
<li> <a href="profilaksi.php">Profilaksi</a></li>
</ol>
</p>
<br>
<br>
<br>
</div>
	<hr>
<?php include('includes/footer.php'); ?>
</body>
</html>