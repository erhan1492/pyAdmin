
<?php

session_start();
$deger=$_SESSION['uye'];


if(isset($deger))
{
	
	include("confic.php");
	
	
}


else{
	
	
	
	
	
	
	header("location:index.php");
}

?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		
		<style type="text/css">
			
			#deger{
				
				background-color: #86f709;
			}
			
			
			
			
		</style>
	</head>
	<body>
		
		
		<?php
		
		
		
		
		
		echo "hosgeldin  <strong> ".$_SESSION['uye']."</strong>";
		
		
		
		?>
		
		<br><br>
			
			<div id="deger">
				
				<a href="logout.php"> cikis-yap ||</a>
			
			
			
			<a href="update.php">  Guncelle</a>
			
			
			
			<a href="delete.php" onclick="return eylem();">  ||Uyelik Sil</a>
				
				
				
				
				
			</div>
			
			
			<script>
				
				function eylem()
				{
					
					return confirm("uyeliginiz silinecektir eminmisiniz  !!!!");
				}
				
				
			</script>
			
		
		
		
	</body>
</html>