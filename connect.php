<?php 
		$host = "localhost";
		$user = "root";
		$pass = "";
		$database = "ogani";
		$ketnoi = new mysqli($host, $user, $pass, $database);
		if ($ketnoi -> connect_error) 
		{
			die("Lỗi: ".$ketnoi -> connect_error);
		}
		else
		{
			//echo "Kết nối thàng công <br>";
		}
?>