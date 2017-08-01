
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
   	
   session_start();
   	
   $user=	$_SESSION['uye'];



$parola=$_POST['sifre'];


echo "kullanici sifresi  :  ".$parola;

$guncelle=mysqli_query($baglan,"update kullanici set password='$parola' where name='$user'");



if($guncelle)
{
	
	echo "    sifreniz basariyla guncellendi  : ".$parola;
}


else
{
	
	echo "guncellemede bir sorun olustu....!!!";
}








?>
	
	
	<br><br>
	
	
	<a href="logout.php"><strong>cikisyap</strong></a>
	
	
		
	</body>
</html>













