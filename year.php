<!doctype html>
<html><head>
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
					alert ("Pilih Tahun!");
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
	h2
	{
		font-size: 20px;
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

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
	
input
	{
		height: 25px;
		font-size: 15px;
	}
	select, option
	{
		overflow:scroll
	}
	
	.unit {
  border-collapse: collapse;
  width: 50%;

}

table, td, th {  
  border: 1px solid #ddd;
}
th, td {

  padding: 8px;
}


tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color:#373270;
  color: white;
text-align: center;
}
	
	}
#footer { 
            position: fixed; 
            padding: 0px 10px 0px 0px; 
            bottom: 0; 
            width: 10266%; 
            /* Height of the footer*/  
 
 
        } 

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
    							<a href="year.php">Tahunan</a>
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
		<h1>Laporan Tahunan</h1>
		<form name = "myForm" method="POST" action="year.php" class="register-form" id="booking-form" onSubmit="return(validate());">
			
		
			<center>
			<?php
				// set start and end year range
				$yearArray = range(2015, 2050);
				?>
				<label>Tahun</label>
				<!-- displaying the dropdown list -->
				<select name="year">
					<option value="">Pilih Tahun</option>
					<?php
					foreach ($yearArray as $year) {
						// if you want to select a particular year
						echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
					}
					?>
					</select> <input type=submit name = "submit" value=Tukar />
				
				</center>
			
		</form>
		
		<?php
		if (isset($_POST["submit"]))
		{
			include 'db_connect.php';
			$year = $_POST['year'];
			$sqli= "SELECT * FROM booking WHERE YEAR(start_day) = $year"; //==month and == year//
			$qid = mysqli_query($connect, $sqli);
			$la1  =0;
			$pa1 = 0;
			$lcd1 = 0;
			$ca1 = 0;
			
			$la2  =0;
			$pa2 = 0;
			$lcd2 = 0;
			$ca2 = 0;
			
			$la3  =0;
			$pa3 = 0;
			$lcd3 = 0;
			$ca3 = 0;
			
			$la4  =0;
			$pa4 = 0;
			$lcd4 = 0;
			$ca4 = 0;
			
			$la5  =0;
			$pa5 = 0;
			$lcd5 = 0;
			$ca5 = 0;
			
			$la6  =0;
			$pa6 = 0;
			$lcd6 = 0;
			$ca6 = 0;
			
			$la7  =0;
			$pa7 = 0;
			$lcd7 = 0;
			$ca7 = 0;
			
			$la8  =0;
			$pa8 = 0;
			$lcd8 = 0;
			$ca8 = 0;
			
			$la9  =0;
			$pa9 = 0;
			$lcd9 = 0;
			$ca9 = 0;
			
			$la10  =0;
			$pa10 = 0;
			$lcd10 = 0;
			$ca10 = 0;
			
			$la11  =0;
			$pa11 = 0;
			$lcd11 = 0;
			$ca11 = 0;
			
			$la12  =0;
			$pa12 = 0;
			$lcd12 = 0;
			$ca12 = 0;
			
			foreach($qid as $row)
			{
				$date = $row['start_day'];
				$month =  date('m', strtotime($date));
				if ($month == '1')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la1++;
						if ($my_Array == "PA System")
							$pa1++;
						if ($my_Array == "Lcd Projector")
							$lcd1++;
						if ($my_Array == "Camera")
							$ca1++;
					}
				}
				if ($month == '2')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la2++;
						if ($my_Array == "PA System")
							$pa2++;
						if ($my_Array == "Lcd Projector")
							$lcd2++;
						if ($my_Array == "Camera")
							$ca2++;
					}
				}
				if ($month == '3')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la3++;
						if ($my_Array == "PA System")
							$pa3++;
						if ($my_Array == "Lcd Projector")
							$lcd3++;
						if ($my_Array == "Camera")
							$ca3++;
					}
				}
				if ($month == '4')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la4++;
						if ($my_Array == "PA System")
							$pa4++;
						if ($my_Array == "Lcd Projector")
							$lcd4++;
						if ($my_Array == "Camera")
							$ca4++;
					}
				}
				if ($month == '5')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la5++;
						if ($my_Array == "PA System")
							$pa5++;
						if ($my_Array == "Lcd Projector")
							$lcd5++;
						if ($my_Array == "Camera")
							$ca5++;
					}
				}
				if ($month == '6')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la6++;
						if ($my_Array == "PA System")
							$pa6++;
						if ($my_Array == "Lcd Projector")
							$lcd6++;
						if ($my_Array == "Camera")
							$ca6++;
					}
				}
				if ($month == '7')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la7++;
						if ($my_Array == "PA System")
							$pa7++;
						if ($my_Array == "Lcd Projector")
							$lcd7++;
						if ($my_Array == "Camera")
							$ca7++;
					}
				}
				if ($month == '8')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la8++;
						if ($my_Array == "PA System")
							$pa8++;
						if ($my_Array == "Lcd Projector")
							$lcd8++;
						if ($my_Array == "Camera")
							$ca8++;
					}
				}
				if ($month == '9')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la9++;
						if ($my_Array == "PA System")
							$pa9++;
						if ($my_Array == "Lcd Projector")
							$lcd9++;
						if ($my_Array == "Camera")
							$ca9++;
					}
				}
				if ($month == '10')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la10++;
						if ($my_Array == "PA System")
							$pa10++;
						if ($my_Array == "Lcd Projector")
							$lcd10++;
						if ($my_Array == "Camera")
							$ca10++;
					}
				}
				if ($month == '11')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la11++;
						if ($my_Array == "PA System")
							$pa11++;
						if ($my_Array == "Lcd Projector")
							$lcd11++;
						if ($my_Array == "Camera")
							$ca11++;
					}
				}
				if ($month == '12')
				{
												//split item	
					$item = $row["peralatan"];
					$myArray = explode(', ', $item);
					foreach($myArray as $my_Array)
					{
						if ($my_Array == "Laptop")
							$la12++;
						if ($my_Array == "PA System")
							$pa1++;
						if ($my_Array == "Lcd Projector")
							$lcd12++;
						if ($my_Array == "Camera")
							$ca12++;
					}
				}
				
			}
			?>
		<h1><?php echo $year; ?></h1>
		<?php
			?><center>
				<h2>Januari</h2>
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la1 . "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa1."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd1 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca1. "</td>";
							echo "</tr>";
								?>
							</table>

						<br>	
					<h2>Febuari</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la2. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa2."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd2 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca2. "</td>";
							echo "</tr>";
							?>
							
							</table>
							<br>	
						<h2>March</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la3. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa3."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd3 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca3. "</td>";
							echo "</tr>";
							?>
							
							</table>
					<br>	
					<h2>April</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la4. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa4."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd4 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca4. "</td>";
							echo "</tr>";
							?>
							
							</table>
				<br>	
					<h2>Mei</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la5. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa5."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd5 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca5. "</td>";
							echo "</tr>";
							?>
							
							</table>
						<br>	
					<h2>June</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la6. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa6."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd6 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca6. "</td>";
							echo "</tr>";
							?>
							
							</table>
					<br>	
					<h2>Julai</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la7. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa7."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd7 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca7. "</td>";
							echo "</tr>";
							?>
							
							</table>
					<br>	
					<h2>Ogos</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la8. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa8."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd8 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca8. "</td>";
							echo "</tr>";
							?>
							
							</table>
					<br>	
					<h2>September</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la9. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa9."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd9 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca9. "</td>";
							echo "</tr>";
							?>
							
							</table>
					<br>	
					<h2>Oktober</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la10. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa10."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd10 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca10. "</td>";
							echo "</tr>";
							?>
							
							</table>
						<br>	
					<h2>November</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
							echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la11. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa11."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd11 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca11. "</td>";
							echo "</tr>";
							?>
							
							</table>
						<br>	
					<h2>Disember</h2>
				
						<table  class="unit" border = 1>
						  <tr>
							<th width="50%" > Peralatan </th>
							<th width="50%"> Jumlah </th>
						  </tr>
							<?php
								echo "<tr>";
							echo "<td>". "<center>"."Laptop" ."</td>";
							echo "<td>". "<center>". $la12. "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td>"."<center>". "PA System" ."</td>";
							echo "<td>" ."<center>". $pa12."</td>";
							echo "</tr>";
							echo "<td>"."<center>". "LCD Projector" ."</td>";
							echo "<td>" ."<center>". $lcd12 . "</td>";
							echo "</tr>";
							echo "<td>". "<center>"."Camera" ."</td>";
							echo "<td>" ."<center>". $ca12. "</td>";
							echo "</tr>";
							?>
							
							</table>
			
		<?php } ?>
							</div>
		</center>
	 </center>
	</section>
	<br><br><br><br><br><br><br>
	 <!-- Footer-->
<div id="footer">
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © <b> UNIT ICT, HPSF.</b> All Rights Reserved</small></div>
        </div>
      </div>  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        

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
	</div>
	</body>
</html>