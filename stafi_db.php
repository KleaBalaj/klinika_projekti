<?php
define("TITLE", "Stafi | DentalCare");
include('includes/header.php');
?>
<div id="staf" class="cf">
    <h1>Stafi yne</h1>
		<p style="font-size:20px; text-decoration:underline; color:  #194d33;"><strong>Tek ne do te merni sherbimin cilesor nga nje staf i perzgjedhur dhe me cmime te arsyeshme per kedo.</strong></p>

		<hr>
		<div style="background-image: url('img/stafiii.jpg');
  background-repeat: no-repeat;
  background-attachment: relative;
  background-position:center;
  background-size: 160% 150%;">
        <?php 
        session_start();
$mysqli=new mysqli('localhost','root','','klinika') or die($mysqli->connect_error);
$sql = "select * from staf_foto";
$result = mysqli_query($mysqli, $sql);
$num = mysqli_num_rows($result);
$link1='ina.php';
if($num > 0){
	while($row = mysqli_fetch_assoc($result)){
		echo"<img style='width:20%; border: 4px solid #194d33;border-radius: 50%; margin: 0 -10px 0 100px;' src='{$row['img_dir']}' width='40%' height='40%' />";
    echo "<a class='button' href='".$row['Emri'].".php'>".$row['Emri']."</a>";  
	}
}
?> 
</div>
<br>
 <hr>
</div>
<?php include('includes/footer.php'); ?>
