
<?php

include("confic.php");


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		
		
		<?php
		
		
		$sorgu=mysqli_query($baglan,"select *from kullanici");
		
		
		while($row=mysqli_fetch_array($sorgu))
		{
			
			$kullanici=$row['name'];
			$parola=$row['password'];
			
			
			echo " adi :    $kullanici  <br>   parola : $parola"."<br>";
			
			echo "<hr>";
			
			
		}
		
		
		
		
		
		
		
		?>
		
		
		
	</body>
</html>

