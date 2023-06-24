<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Check for Login</title>
</head>

<body>
	<?php
	include "db_connect.php";
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$count = 0;
	$sqli= "SELECT * FROM staff";
	$sqla = "SELECT * FROM admin";
	$qai = mysqli_query($connect, $sqla);
	$qid = mysqli_query($connect, $sqli);
	while($row = mysqli_fetch_array($qid))
	{
		if($row['staff_username'] === $username AND $row['staff_password'] === $password)
			$count = 1;
	}
		while($row = mysqli_fetch_array($qai))
	{
		if($row['admin_username'] === $username AND $row['admin_password'] === $password)
			$count = 2;
	}
	
	if($count==1)
	{
		?>
		<script type="text/javascript">alert("Log Masuk Berjaya");window.location ="../staff.php?id=<?php print $username ?>";</script>
	<?php
	}
		if($count==2)
	{
		?>
		<script type="text/javascript">alert("Log Masuk Berjaya");window.location ="../verify2.php?id=<?php print $username ?>";</script>
	<?php
	}
	else{
		
	?>
	
			<script type="text/javascript">alert("Username/Password Salah");window.history.go(-1)</script>
		<?php	
	}
	?>
</body>
</html>