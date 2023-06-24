<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session End for Logout</title>
</head>

<body>
	<?php   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
header("location:/booking1/index.php"); //to redirect back to "index.php" after logging out
exit();
?>
</body>
</html>