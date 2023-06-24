<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin | Lupa Kata Laluan</title>
</head>

<body>
	<?php
	include "db_connect.php";
	
	$username= $_POST["username"];
	$password= md5($_POST["password"]);
	$count = 0;
	
	$sqli= "SELECT * FROM admin";
	$qid = mysqli_query($connect, $sqli);
	while($row = mysqli_fetch_array($qid))
	{
		if($row['admin_username'] === $username)
			$count = 1;
	}
	
	if($count==1)
	{
		$sql= "UPDATE admin SET admin_password='$password' WHERE admin_username= '$username'";
		$sendsql= mysqli_query($connect, $sql); ?>
		<html><script type="text/javascript">alert("Password Berjaya Ditukar"); window.location= "index.php";</script></html>
	<?php } 
	else
	{?>
		<html><script type="text/javascript">alert("Username Tidak Wujud/Salah"); window.history.go(-1);</script></html>
	<?php
	}
	
	?>
</body>
</html>