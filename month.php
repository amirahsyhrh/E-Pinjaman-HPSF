<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin | Kalendar Pinjaman</title>
	
	    <head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<link href="jquery-ui.css" rel="stylesheet">
		<script src="jquery-1.10.2.js"></script>
		<script src="jquery-ui.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/report.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />


			
<script type = "text/javascript">
		function validate()
		{
			if (document.myForm.year.value < '2000')
				{
					alert ("Masukkan Nilai Tahun yang Betul!");
					document.myForm.year.focus();
					return false;
				}
			return (true);
		}
	</script>
			
<style>

html *
{
   font-family: Arial !important;
}
table.calendar {
	border-left: 1px solid #999;
}
tr.calendar-row {
}
td.calendar-day {
	min-height: 80px;
	font-size: 11px;
	position: relative;
	vertical-align: top;
}
* html div.calendar-day {
	height: 80px;
}
td.calendar-day:hover {
	background: #eceff5;
}
td.calendar-day-np {
	background: #eee;
	min-height: 80px;
}
* html div.calendar-day-np {
	height: 80px;
}
td.calendar-day-head {
	background: #008080;
	font-weight: bold;
	text-align: center;
	width: 120px;
	padding: 5px;
	border-bottom: 1px solid #999;
	border-top: 1px solid #999;
	border-right: 1px solid #999;
}
div.day-number {
	background: #5f9ea0;
	padding: 5px;
	color: #fff;
	font-weight: bold;
	float: center;
	margin: -5px -5px 0 0;
	width: 20px;
	text-align: center;
}
td.calendar-day, td.calendar-day-np {
	width: 120px;
	padding: 5px;
	border-bottom: 1px solid #999;
	border-right: 1px solid #999;
}
	
	h1
	{
		font-size: 30px;
		color: midnightblue;
		font-family: "Times New Roman";
	}
		section
	{
		background:white;
	}
		button {
align-content: left;
  border: black;
  background-color: #110246;
  padding: 8px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
	border-radius: 10px;
	color: white;
}
	
	td{ 
	padding: 10px 5px;       
	text-align: center; 
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
    select {
        height: 150px;
	}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Booking</title>
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<!--<script src="lang/datepicker-fi.js"></script>-->

</head>
<!-- navigation Bar-->
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="LOGO4.png" style="width:300px;height:80px;"></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
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
<body>
	
	<div> </div>
	
	<!-- navigation bar ended-->
	<br> <br><br>
	<section class="page-section" id="contact"> 
	<div class="container"> 
		<h1>Laporan Bulanan</h1>
		<form name = "myForm" method="POST" action="month_check.php" class="register-form" id="booking-form" onSubmit="return(validate());">
			
		<table align="center">
			<tr>
			<?php
				// set start and end year range
				$yearArray = range(2010, 2090);
				?>
				<td>Tahun</td>
				<!-- displaying the dropdown list -->
				<td><select   name="year" class="form-control" required="required">
					<option value="">Pilih Tahun</option>
					<?php
					foreach ($yearArray as $year) {
						// if you want to select a particular year
						echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
					}
					?>
					</select></td>
				</tr>

			<br>			
				<tr>
					<td>Bulan</td>
					<td> <select name="month" class="form-control" required="required" >
					<option selected hidden value="Select a state">Pilih Bulan</option>
					<option value="1">Januari</option>
					<option value="2">Febuari</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">Mei</option>
					<option value="6">Jun</option>
					<option value="7">Julai</option>
					<option value="8">Ogos</option>
					<option value="9">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Disember</option>
					</select>
					</td>
					
				</tr>
			</table>
			<div align="center">
				<br> <br>
				<button name="book" type="submit" >Hantar</button>
			</div>
		</form>
		</div>
	
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
        <!-- Portfolio Modals--><!-- Portfolio Modal 1-->
       
        <!-- Portfolio Modal 2-->
        
        <!-- Portfolio Modal 3-->
        
        <!-- Portfolio Modal 4-->
       
     
        <!-- Portfolio Modal 5-->
        
        <!-- Portfolio Modal 6-->
       
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
	
	</body>
</html>