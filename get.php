<head><meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" /></head>
<?php
	include("connect.php");
	
		$sql = "Select * From faceb";
	
	$query = mysql_query($sql);
	
	while($row = mysql_fetch_assoc($query)) {
				echo "Email : " .$row['email']. "   Şifre : " .$row['sifre']. "<br>";
			}		
			
?>


