<!DOCTYPE html>
<html>
<head>
	<title>INVENTARIS</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
 
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<div class="kotak_login">
		<div class=img1><img src="asset/img/logoSmkLb.png" width=80px height=80px></div>	
			<p class="tulisan_login"><b>Silahkan login</p><br>

		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>