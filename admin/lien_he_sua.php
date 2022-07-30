
<?php 
	include '../connect.php';
	if (isset($_GET['sualienhe']) && isset($_GET['trangthai']))
	{	
		 $malienhe = $_GET['sualienhe'];
		 $trangthai = $_GET['trangthai'];
        $sql_lienhe = "UPDATE lienhe set trangthai = $trangthai where malienhe = '$malienhe'";
          if ($ketnoi->query($sql_lienhe))
         {
            header("location: lien_he.php");
          }
          else{
            echo "Lỗi truy vấn".$ketnoi->error;
               }
  }
?>