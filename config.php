<?php 
//connection to mySQL
$host="localhost";
$username="root";
$password="";
$dbname = "hpsf_booking";

$connect = mysqli_connect($host, $username, $password, $dbname) or DIE ("Connection Failed");

// translate these
	$months = array('Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember');
	$headings = array('Ahad','Isnin','Selasa','Rabu','Khamis','Jumaat','Sabtu');
?>
