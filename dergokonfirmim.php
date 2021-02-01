<?php
include('includes/header.php');
?>
<?php
$connection = mysqli_connect("localhost", "root", "", "klinika");


			if(isset($_POST['konfirmo'])){
				if(empty($_POST['zgjidh']))
				{
					die ("Nuk konfirmuat asnje nga rezervimet.");
				}
				else {
					$nr=count($_POST['zgjidh']);
				}
			}
		?>


<?php
		
		$po='po';
		$query="select * from rezervim ";
			mysqli_query($connection, $query);
			
		for($i=0; $i<$nr; $i++){
			$s= " UPDATE rezervim SET Konfirmimi='".$po."' WHERE ID_rez='".$_POST['zgjidh'][$i]."' ";	
		mysqli_query($connection,$s);
				
			}
			header('location:admin.php');
			echo"<script>
			 window.alert('rezervimet u konfirmuan me sukses!');
			</script>";
		
		?>
        <?php
include('includes/footer.php');
?>