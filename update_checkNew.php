<?php
if(isset($_POST["book"]))
{
	 $connect = mysqli_connect ("localhost", "root", "", "hpsf_booking");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
	
	$productID= $_GET["id"];
	$name = $_POST['name'];
	$jawatan = $_POST['jawatan'];
	$jabatan = $_POST['jabatan'];
	$unit = $_POST['unit'];
	$telefon = $_POST['telefon'];
	$majlis = $_POST['majlis'];
	$lokasi = $_POST['lokasi'];
	$start_day = $_POST['start_day'];
	$end_day = $_POST['end_day'];
	$start_time = $_POST['start_time'];
	$end_time = $_POST['end_time'];
	$canceled = $_POST['cancel'];
	
	$query = "UPDATE booking set name = '$name', jawatan= '$jawatan', jabatan = '$jabatan', unit='$unit', telefon= '$telefon', majlis= '$majlis', lokasi= '$lokasi', start_day = '$start_day', end_time= '$end_time', start_time= '$start_time', end_time= '$end_time', cancel = '$canceled' WHERE b_id= $productID";
	
	mysqli_query($connect, $query) or die("Error " . mysqli_error($connect));
    header ("Location: verify2.php");
	
	

}

?>