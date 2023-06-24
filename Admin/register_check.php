<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin | Simpan Maklumat Register</title>
</head>

<body>
	<?php
	include "db_connect.php";
	
	$username= $_POST["name"];
	$password= md5($_POST["password_1"]);
	$count = 0;

	
	$string = $username;
	if( $string !== str_replace(' ','',$string) ){ 
	?>
	
		<script type="text/javascript">alert("Username Mempunyai Space");window.history.go(-1);</script>
			
	<?php }
	else
	{
		$sqli= "SELECT * FROM admin";
		$qid = mysqli_query($connect, $sqli);
		while($row = mysqli_fetch_array($qid))
		{
			if($row['admin_username'] === $username)
				$count = 1;
		}

		if ($count==1)
		{
		?>
		<script type="text/javascript">alert("Username Telah Wujud");window.history.go(-1);</script>
		<?php
		}
		else
		{
			$sql= "INSERT INTO admin (admin_username, admin_password) VALUES ('$username', '$password')";
			$sendsql= mysqli_query($connect, $sql); ?>
			<html><script type="text/javascript">alert("Telah Berjaya Mendaftar");window.location="index.php";</script></html>
		<?php
		}//dont have whitespace
	}
	
	?>
</body>
</html>