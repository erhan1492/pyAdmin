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
		
		
		$sifre=$_POST['sifre'];
		
		session_start();
   	
   session_start();
   	
   $user=	$_SESSION['uye'];
   
   
   $sorgu=mysqli_query($baglan,"select * from kullanici where name='$user'");
   
   $liste=mysqli_fetch_array($sorgu);
  
  
   $parola=$liste['password'];
   $isim=$liste['name'];
   
   
   echo "kullanici adi : ".$isim." <br>   kullanici sifresi".$parola;
		
		
		
		?>
		
		
		<form action="update1.php" method="post">
			
			
			
			<table>
	<tr>
		<td><input type="text" name="sifre" value="<?php echo $parola; ?>" /></td>
	</tr>
	<tr>
		<td>sifre-guncelle</td>
	</tr>
	
	<tr>
		<td><input type="submit" value="sifre-degis"/></td>
	</tr>
</table>
			
			
			
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>