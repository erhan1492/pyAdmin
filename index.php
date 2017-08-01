<?php

include("confic.php");



?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		
		<style type="text/css">
		
		
		#ptt{
			
			background-color: #3168ce;
			
			width: 250px;
			height: 50px;
			
			color: #060000;
		
			text-align: center;
			
			border-radius: 7px;
			margin-left: 40px;
			
			line-height: 50px;
			
			
			
		}
			
			
			
			
			
			
		</style>
		
		
		
	</head>
	<body>
		
		
		<div id="ptt">Turkiye ISBANKASI</div>
		
		
		
		<form action="" method="post">
			
			
			<table width="380" height="150">
	<tr>
		<td bgcolor="#4d85b3">AD:</td>
		<td  bgcolor="#4d85b3"><input type="text" name="user" /></td>
		
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td  bgcolor="#4d85b3">Parola:</td>
		<td  bgcolor="#4d85b3"><input type="password" name="password"  /></td>
		<td>&nbsp;</td>
		
	</tr>
	<tr>
		<td  bgcolor="#4d85b3"></td>
		<td  bgcolor="#4d85b3"><input type="submit" /></td>
	</tr>
</table>
			
			
			
			
			
		</form>
		
		
		
	</body>
</html>


<?php


error_reporting(0);

$user=$_POST['user'];

$password=$_POST['password'];


if($_POST['user'] and $_POST['password'])
{
	$sorgu=mysqli_query($baglan,"SELECT count(*) FROM kullanici WHERE name='$user' and password='$password'");
	
   $liste=mysqli_fetch_array($sorgu);
   
   $durum=$liste[0];
   
   
   if($durum==1)
   {
   	
   	echo "bu isim ve parolada uye zaten kayitli...";
   	
   	session_start();
   	
   	$_SESSION['uye']=$user;
   	
   	
          header("refresh:3;url=profil.php");
   	
   }
	else
	{
		
		
		        $ekle=mysqli_query($baglan,"insert into kullanici(name,password) values('$user','$password')");
		        
		        if($ekle)
		        {
					echo "uye kaydi yapilmistir...tekrar girin...";
				}
				
				else{
					
					echo "uye kaydinda sorun olustu...";
					
					
				    }
	}
	
	
}

else{
	echo "lutfen giris yapiniz....!!!";
}


?>




