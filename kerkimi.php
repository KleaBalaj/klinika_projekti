<?php
include('includes/header.php');
?>
<h2>Kerko sherbim:</h2>
	
    <div class="search_box">
      <form method="post">
        <input type="text" placeholder="Kerko sherbim ..." name="sherbim">
        <button type="submit" name="submit" class="butoni" id="kerko">Kerko!</button>
      </form>
  </div>
  
      <?php 
      if(isset($_POST['submit'])){
          $sherbimi = $_POST['sherbim'];
          $con = mysqli_connect('localhost', 'root', '','klinika');
          $kerko = "select * from sherbimi where emri like '%".$sherbimi."%' ";
          $rez = mysqli_query($con, $kerko);
           $n = mysqli_num_rows($rez);
           if($n > 0){
               echo "<h2>Rezultatet e kerkimit </h2>";
           while($row = mysqli_fetch_assoc($rez)){
               $id = $row["ID_sherbimi"];
               echo "<br><p><pre>"."<strong> Titulli : </strong>".$row["emri"]."<br>".
              "<strong> Cmimi : </strong>".$row["cmimi"]."euro"."<br>".
              "</pre></p>";
          }
      }
          else{
              echo "Ne nuk e ofrojme kete sherbim per momentin!";
          }
      }
      ?>
    </div>
    <?php
include('includes/footer.php');
?>
<style>
		h2{
			font-style: italic;
			font-family: Book Antiqua, serif;
			font-weight: lighter;
			text-align: center;
		}
		
  }
	  .butoni{
			background-color: black;
			color: white;
			padding: 15px;
			font-family: Book Antiqua, serif;
	}

.search_box input[type="text"]{
		  width: 45%;
		  padding: 20px;
		  padding-right: 20px;
		  box-sizing: border-box;
		  background: rgba(150,150,150,0.3);
		  border: 1px solid #fff;
		  border-radius: 10px;
		  font-size: 15px;
		  color: black;
		  outline: none;
}
#kerko{
	border-radius: 30%;
	
}


</style>