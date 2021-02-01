<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'klinika');

if (isset($_POST['rez'])) {

    $emri = $_POST['emri'];
  $mbiemri =$_POST['mbiemri'];
  $username=$_POST['username'];
  $mosha = $_POST['mosha'];
  $gjinia = $_POST['gjinia'];
  $data = $_POST['data'];
  $ora = $_POST['ora'];
  $kategori = $_POST['kategori'];
}
$query = "INSERT INTO rezervim (Emri, mbiemri,username, mosha, gjinia, data, ora, kategoria) 
  			  VALUES('$emri', '$mbiemri','$username', '$mosha','$gjinia','$data','$ora', '$kategori')";
      mysqli_query($db, $query);

      $_SESSION['emri'] = $emri;
      $_SESSION['mbiemri'] = $mbiemri;
      $_SESSION['username'] = $username;
      $_SESSION['mosha'] = $mosha;
      $_SESSION['gjinia'] = $gjinia;
      $_SESSION['data'] = $data;
      $_SESSION['ora'] = $ora;
      $_SESSION['kategori'] = $kategori;      

      header('location:shfaq.php')

?>