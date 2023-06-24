<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Tempahan Barang</title>
</head>

<body>

<?php
	
	include 'config.php';
	$id=$_GET['id'];
	
	
	if(empty($errors))
	{
		include 'config.php';
		
		
		$start_day = $_POST["start_day"];
		$end_day = $_POST["end_day"];
		$start_time = $_POST["start_time"];
		$end_time = $_POST["end_time"];
		$name = htmlspecialchars($_POST["name"]);
		$telefon = htmlspecialchars($_POST["telefon"]);
		$ck = "";
		//foreach($_POST['peralatan'] as $chk1)  
      // {
          //$chk.= $chk1." ";  
     //  }
		$jawatan = $_POST["jawatan"];
		$jabatan = htmlspecialchars($_POST["jabatan"]);
	    $unit = htmlspecialchars($_POST["unit"]);
		$majlis = htmlspecialchars($_POST["majlis"]);
		$lokasi = htmlspecialchars($_POST["lokasi"]);
		$lain = htmlspecialchars($_POST["lainLokasi"]);
		if(isset($_POST['book']))
		{
   			$ck = implode(", ",$_POST['peralatan']);
		}
		
		// prevent double booking
		$sql= "SELECT *  FROM booking";
		
		$result =mysqli_query($connect,$sql);
		//$duplicate = mysqli_num_rows($query);
		if (mysqli_num_rows($result) >= 0)
		{
			
			
			$query1=mysqli_query($connect,"INSERT INTO booking (username, name, jawatan, jabatan, unit, telefon, majlis, lokasi, lainLokasi, peralatan, start_day, start_time, end_day, end_time, cancel)
			VALUES ('$id', '$name', '$jawatan', '$jabatan','$unit', '$telefon', '$majlis', '$lokasi','$lain','$ck', '$start_day', '$start_time', '$end_day', '$end_time', 0)");
			echo ("<script language='JavaScript' type='text/javascript'>
						window.location.href='form.php?id=$id';
		 				window.alert('Item Berjaya Ditempah!')
		 				</script>");
			
		}
		else
		{
			echo '<script language="javascript" type="text/javascript">';
			echo 'alert("Maaf '.$ck .' Telah di Tempah Buat Masa Ini ");';
			echo 'window.history.go(-1)';
			echo '</script>';
		}
		
		
		
		
		
		
		//$result = mysqli_query($link, $sql);
		
		//if (mysqli_num_rows($result) == 0) {
			//echo '<h3><font color="red">Unfortunately ' . $chk . ' has already been booked for the time requested.</font></h3>';
			 //handle every row
		//while($row = mysqli_fetch_array($result)) {
				// check overlapping at 10 minutes interval
			//for ($i = $start_day; $i <= $end_day;) {
				//if ($i>($row["start_day"]) && $i<($row["end_day"]) {
				//	echo 'alert("Item tak Berjaya di Tempah ");';
					//echo '<h3><font color="red">Unfortunately ' . $chk . ' has already been booked for the time requested.</font></h3>';
					
				//}
				//}
		 //}				
		//}
		

		//$sql = "INSERT INTO tablename (name, department, phone, majlis, location, item, start_day, start_time, end_day, end_time, canceled)
			//VALUES ('$name', '$department','$phone', '$majlis', '$location','$chk', '$start_day', '$start_time', '$end_day', '$end_time', 0)";
		//if (mysqli_query($link, $sql)) {
		    // echo '<script language="javascript" type="text/javascript">';
					//echo 'alert("Item Berjaya di Tempah ");';
			//echo 'window.location="index.php"';
				//echo '</script>';
		//} 
		//else {
			//echo "Error: " . $sql . "<br>" . mysqli_error($link);
		//}
		
		end:
		mysqli_close($connect);
	}
?>


</body>

</html>
