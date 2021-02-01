<!DOCTYPE html>
<?php

session_start(); 
include('includes/header.php');
?>
<html>
<head>
<title>Shfaq te dhenat</title>
</head>
<body>
    <table class="tabela" >
            <tr>
                <th colspan="2" style="text-align:center;height: 60px;width:360px;font-size:20px;">Te dhenat qe plotesuat </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Username </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['username']; ?></th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Emri</th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['emri']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Mbiemri </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['mbiemri']; ?></th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Mosha </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['mosha']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Gjinia </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['gjinia']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Data </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['data']; ?> </th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Ora </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['ora']; ?></th>
            </tr>
            <tr>
                <th style="text-align:left;height: 50px;width:150px;">Kategori </th>
                <th style="text-align:left;height: 50px;width:210px;"> <?php echo $_SESSION['kategori']; ?> </th>
            </tr>
</table>

    <table class="djathtas" >
    <tr > 
    <th colspan=5 style="text-align:center;height: 60px;width:360px;font-size:20px;"> Llogaria juaj </th> </tr>
	<tr>
    <th colspan="5" style="text-align:center;height: 60px;width:360px;font-size:20px;">Historiku rezervimeve:</th></tr>
    <tr>
                <th style="text-align:left;height: 50px;width:100px;">Username </th>
                <th style="text-align:left;height: 50px;width:200px;">Data </th>
                <th style="text-align:left;height: 50px;width:100px;">Ora </th>
                <th style="text-align:left;height: 50px;width:200px;">Kategoria </th>
				<th style="text-align:left;height: 50px;width:100px;">Konfirmimi</th>
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
       
    
<a href="rezervo.php" class="btn">Kthehu</a>
<a href="rezervo.php?logout='1'" style="text-align:right; font-size:20px;color: red;margin:-100px 0 0 30px;">Dil</a><br><br><br><br>
<hr>
</body>
<?php include('includes/footer.php'); ?>
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
.djathtas{
    float:right;
    border-collapse: collapse;
	width:450px;
	background:#e0ebeb;
	color:black;
	font-weight:4px;
    font-size:14px;
	border: 5px solid black;
    margin:-550px 50px;
}
.tabela{
	border-collapse: collapse;
	width:360px;
	margin-left:170px;
	background:#e0ebeb;
	color:black;
	font-weight:4px;
    font-size:14px;
	border: 5px solid black;
    margin:50px 0px 80px 30px;
}
.tabela, td, th{
	border-collapse: collapse;
	border: 3px solid black;
}
</style>