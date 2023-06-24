<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Staff | Simpan Maklumat Register</title>
</head>

<body>
	<?php
	include "db_connect.php";
	
	$username= $_POST["name"];
	$password= md5($_POST["password_1"]);
	$count = 0;
		
	//untk kira pnjng username//
	
	$usernamelength= strlen($username);
			
	$string = $username;
	if( $string !== str_replace(' ','',$string) ){ 
	?>
	
		<script type="text/javascript">alert("Username Mempunyai Space");window.history.go(-1);</script>
			
	<?php }
	else
	{
		$sqli= "SELECT * FROM staff";
		$qid = mysqli_query($connect, $sqli);
		while($row = mysqli_fetch_array($qid))
		{
			if($row['staff_username'] === $username)
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
			//encrypted the password
			
			$sql= "INSERT INTO staff (staff_username, staff_password) VALUES ('$username', '$password')";
			$sendsql= mysqli_query($connect, $sql); ?>
			<html><script type="text/javascript">alert("Telah Berjaya Mendaftar");window.location="../index.php";</script></html>
		<?php
		}//dont have whitespace
	}
	
	?>
</body>
</html>