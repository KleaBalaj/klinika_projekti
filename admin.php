<!DOCTYPE>
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
<html>
<head>
<?php
include('includes/header.php');
?>
<title>Admin</title>
<h2 style="text-align:center;">Mireserdhe Admin</h2>
<img src="/detyra1/img/admin.jpg" style="width:80px; height:80px;margin:0 0 -10px 450px;">
</head>
<body>

<?php 
$con = mysqli_connect('localhost', 'root','');

	$select = mysqli_select_db($con, 'klinika');
?>
<br>
 <table class="tabela">
            <tr>
              
				 <th> ID_rez</th>
                <th> Username</th>
                <th> Emri </th>
                <th> Mbiemri </th>
				 <th> Gjinia </th>
				  <th>Mosha </th>
				  <th>Data </th>
				  <th>Ora</th>
                  <th>Kategori</th>
                  <th>Konfirmimi</th>
                  <th>.</th>

            </tr>
            <?php
                $s = "SELECT * FROM rezervim";
                $query = mysqli_query($con, $s);

                while($row = mysqli_fetch_array($query))
                {
					echo "<form action='dergokonfirmim.php' method='post'>";
                    echo "<tr>";
					 echo "<td>" . $row['ID_rez'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['Emri'] . "</td>";
                        echo "<td>" . $row['mbiemri'] . "</td>";
						echo "<td>" . $row['gjinia'] . "</td>";
						echo "<td>" . $row['mosha'] . "</td>";
                        echo "<td>" . $row['data'] . "</td>";
                        echo "<td>" . $row['ora'] . "</td>";
                        echo "<td>" . $row['kategoria'] . "</td>";
                        echo "<td>" . $row['Konfirmimi'] . "</td>";
			 echo "<td><input type='checkbox' name='zgjidh[]' value='".$row['ID_rez']."'</td></tr>";
			 
                }
				echo "</tbody></table><input type='submit' name='konfirmo' value='Konfirmo'></form>";
            ?>
            <a href="rezervo.php?logout='1'" style="text-align:right; font-size:20px;color: red;margin:-100px 0 0 30px;">Dil</a>
</body>
<?php
include('includes/footer.php');
?>
</html>
<style type="text/css">
.btn{
	padding: 10px;
	font-size:15px;
	color:white;
	background: #0B4C5F;
	border:none;
    border-radius: 5px;
    font-size:20px;
    margin:-100px 0 100px 50px;
}
.tabela{
    border-collapse: collapse;
  width: 80%;
	background:white;
	color:black;
	font-weight:4px;
    font-size:14px;
	border: 3px solid black;
    margin:30px -50px 50px 100px;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>