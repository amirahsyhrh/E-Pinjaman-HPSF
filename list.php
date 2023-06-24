<!DOCTYPE html>
<html lang="en">
<head>
			<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Admin | Sort by Month</title>
		<link href="jquery-ui.css" rel="stylesheet">
		<script src="jquery-1.10.2.js"></script>
		<script src="jquery-ui.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		
	
		<title>Sort by Month</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align:center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color:#373270;
  color: white;
}
		button
		{
			background-color: antiquewhite;
		}
		h1
	{
		text-align: left;
		font-size: 30px;
		color: midnightblue;
		font-family: "Arial";
	}	
	h2
	{
		text-align: center;
		font-size: 22px;
		color: black;
		font-family: "Arial";
	}
		.sansserif {
  font-family: Arial, Helvetica, sans-serif;
}
		
	.unit {
  border-collapse: collapse;
  width: 50%;

}

#page-top #mainNav .container #navbarResponsive .navbar-nav.ml-auto .nav-item.mx-0.mx-lg-1 .nav-link.py-3.px-0.px-lg-3.rounded.js-scroll-trigger {
	font-family: Gotham, Helvetica Neue, Helvetica, Arial, sans-serif;
}
	html *
{
   font-family: Arial !important;
}	
		
	.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
	font-size: 12;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
		table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}
		
.btn {
  	background-color: midnightblue;
  	border: none;
  	color: white;
  	padding: 5px 10px;
  	font-size: 16px;
	cursor: pointer;
	float: right;
}
.btn:hover{
  background-color: #4B61AC;
	color:#0A3C53;
		}

    </style>
	
</head>
	 <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="LOGO4.png" width="531" height="128" style="width:300px;height:80px;"></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="verify2.php">Senarai Pemohon</a></li>
						<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="bookCalendar.php">Kalendar Pinjaman</a></li>
						<div class="dropdown">
							<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Laporan</a></li>
  								<div class="dropdown-content">
    							<a href="month.php">Bulanan</a>
    							
							  </div>
					  </div>
						 <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Log Keluar</a></li>
                    </ul>
                </div>
            </div>
         </nav>
        <!-- Masthead-->
       
        <!-- Portfolio Section-->
        
        
        <!-- Contact Section-->
		<br><br><br>
        <section class="page-section" id="contact">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
						<h1> Maklumat Pemohon</h1>
						<br>
						<?php
							include 'config.php';
							$id=$_GET['id'];
							$qry = "SELECT * FROM booking WHERE username = '$id'  ORDER BY b_id DESC";
							$qid = mysqli_query($connect,$qry);
							$row = mysqli_fetch_array($qid);
						?>
						<a  href="updateData.php?id=<?php print $id;?>"><button title="Print" class="btn">Update <i class="fa fa-edit"  style="font-size:18px"></i></button></a><br>
						<br>
						
							<?php
							include 'config.php';
							$id=$_GET['id'];
							$qry = "SELECT * FROM booking WHERE b_id = '$id'";
							$qid = mysqli_query($connect,$qry);
							$row = mysqli_fetch_array($qid);
						 ?>
						<center>
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" height="46" >  </th>
							<th width="50%"> Maklumat  </th>

						  </tr>
							<?php
							
							echo "<tr>";
							echo "<td>"."<b>". "ID" . "</td>";
							echo "<td>". $row["b_id"]. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<b>". "Nama" ."</td>";
							echo "<td>" . $row["name"] . "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<b>". "Unit" ."</td>";
							echo "<td>" .$row["unit"] . "</td>";
							echo "</tr>";
							echo "<td>"."<b>". "No. Telefon" ."</td>";
							echo "<td>" .$row["telefon"] . "</td>";
							echo "</tr>"; 
							echo "<tr>";
							echo "<td>" ."<b>". "Lokasi" . "</td>";
							echo "<td>" . $row["lokasi"]. $row["lainLokasi"]. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>" ."<b>". "Peralatan" . "</td>";
							echo "<td>" . $row['peralatan'] . "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>" ."<b>". "Tarikh Peminjaman" . "</td>";
							echo "<td>" . $row['start_day'] ."---". $row["end_day"] . "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>" ."<b>". "Masa Peminjaman" . "</td>";
							echo "<td>" . $row['start_time'] ."---". $row["end_time"] . "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>" ."<b>". "Status" . "</td>";
							echo "<td>"; 
							if ($row["cancel"] == '0')
							{
								echo "Dalam Proses";
							}
							if ($row["cancel"] == '1')
							{
								echo "Diluluskan";
							}
							if ($row["cancel"] == '2')
							{
								echo "Ditolak";
							}
							if ($row["cancel"] == '3')
							{
								echo "Batal Permohonan";
							}
							if ($row["cancel"] == '4')
							{
								echo "Sedang Meminjam";
							}
							if ($row["cancel"] == '5')
							{
								echo "Telah Pulang";
							}
											  
							echo "</td>";
							echo "</tr>";
							
							?>
	 </table></center>
						
						
						<br><br><a href="bookCalendar.php" title="Kembali"><u>Kembali</u></a>
						
		 </section>
					
					
		 			  <!-- Footer-->
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © <b> UNIT ICT, HPSF.</b> All Rights Reserved</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>


        <!-- Bootstrap core JS-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
     <script src="assets/mail/jqBootstrapValidation.js"></script>
     <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
     <script src="js/scripts.js"></script>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
		</script>
			
		


</body>
</html>