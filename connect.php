<?php
            //mysql connection
			
			$server = "localhost";
			$username = "root";
			$password = "Şifre gircen";
			$database = "faceb";
			
			$connect = @mysql_connect($server,$username,$password);
			
				$db_select = @mysql_select_db($database,$connect);
				
				
			
			
?>
