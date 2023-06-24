<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin | Check for Login</title>
</head>

<body>
	<?php
	include "db_connect.php";
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$count = 0;
	
	$sqli= "SELECT * FROM admin";
	$qid = mysqli_query($connect, $sqli);
	while($row = mysqli_fetch_array($qid))
	{
		if($row['admin_username'] === $username AND $row['admin_password'] === $password)
			$count = 1;
	}

	if($count==1)
	{
		?>
		<script type="text/javascript">alert("Log Masuk Berjaya");window.location ="../verify2.php";</script>
	<?php
	}
	else
	{
		?>
			<script type="text/javascript">alert("Username/Password Salah");window.history.go(-1);</script>
		<?php	
	}
	?>
</body>
</html>