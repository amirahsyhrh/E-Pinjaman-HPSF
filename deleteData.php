<?php 
 include 'config.php';
       //delete data
       $delete_id=$_GET['id']; //nak tahu id sape
	   $query = "DELETE FROM booking WHERE b_id= $delete_id";
	  
	   $result = mysqli_query($connect,$query) or die("Query failed");
	  
       if ($result == true)
	 	{ echo '<script language="javascript" type="text/javascript">';
					
			echo 'window.location="verify2.php"';
				echo '</script>'; }
		else if($result1 == false)
		{ echo '<script language="javascript" type="text/javascript">';
					
			echo 'window.location="verify2.php"';
				echo '</script>';}
	   mysqli_close($link);  
?>
