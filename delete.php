
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
	</head>
	<body>
		
		
		
   	<?php
   	
   	error_reporting(0);
   	
   	session_start();
   	
   	$user=$_SESSION['uye'];
   	
   	
   	    $sil=mysqli_query($baglan,"delete from kullanici where name='$user'");
   	    
   	    if($sil)
   	    {
			echo "silinme islemi gerceklesti....";
			
			
			include_once("logout.php");
			
			
			
		}
   	else
   	{
		
		
		echo "silme sirasinda bir hata olustu...";
		header("refresh:3;url=profil.php");
		
	}
   	
   	
   	
   	
   	?>
   	
   	
   	
		
		
		
		
		
		
		
	</body>
</html>



