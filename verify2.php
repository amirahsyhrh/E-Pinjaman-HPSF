<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Senarai Pemohon</title>
		<link href="jquery-ui.css" rel="stylesheet">
		<script src="jquery-1.10.2.js"></script>
		<script src="jquery-ui.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/list.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
		
	
	<title>Senarai Pemohon</title>
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
	
	
<script type = "text/javascript">
		function validate()
		{
			if (document.myForm.valueToSearch.value == "")
				{
					alert ("Fill in The Search Box!");
					document.myForm.valueToSearch.focus();
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
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  text-align: center;
  padding: 8px;
}
		td{
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
#page-top #mainNav .container #navbarResponsive .navbar-nav.ml-auto .nav-item.mx-0.mx-lg-1 .nav-link.py-3.px-0.px-lg-3.rounded.js-scroll-trigger {
	font-family: Impact, Haettenschweiler, Franklin Gothic Bold, Arial Black, sans-serif;
}
    #page-top #mainNav .container #navbarResponsive .navbar-nav.ml-auto .nav-item.mx-0.mx-lg-1 .nav-link.py-3.px-0.px-lg-3.rounded.js-scroll-trigger {
	font-family: Gotham, Helvetica Neue, Helvetica, Arial, sans-serif;
}
    #page-top form h1 {
	font-family: Gotham, Helvetica Neue, Helvetica, Arial, sans-serif;
}
		
		
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position:inherit;
  display: table-row-group;
}

.dropdown-content {
  display:none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 18px;
  text-decoration: none;
  display: block;
	font-size: 12;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.btn {
  background-color: midnightblue;
  border: none;
  color: white;
  padding: 5px 10px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #4B61AC;
	color:#0A3C53;
}
		#footer {
            padding: 0px 10px 0px 0px; 
            bottom: 0; 
            width: 102%; 
            /* Height of the footer*/   
		} 
    </style>

</head>
	 <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="LOGO4.png" style="width:300px;height:80px;" align="bottom"></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
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
		<br>
        <section class="page-section" id="contact" style="width: 100%">
          
                <!-- Contact Section Heading--><br><br>
                
                <!-- Icon Divider-->
                <!-- <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>-->
                <!-- Contact Section Form--> 
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                       <form name = "myForm" action="verifyCheck.php" method="post" onsubmit = "return(validate());">
						 <ol>
						   <blockquote>
						     <h1> Senarai Pemohon</h1>
					       </blockquote>
						   <li>
						     <input type="text" name="valueToSearch" placeholder="What to Search">
						     <input name="search" type="submit" class="border-0" value="Search"><br>
					       </li>
						 </ol>
	 </form>
					
						<table border = 1>
						  <tr>
							<th>ID</th>
							<th width="9%" align="center">Nama</th>
							<th width="11%" align="center">Unit</th>
							<th width="10%">No. Telefon</th>
							<th width="10%">Lokasi</th>
							<th width="11%">Peralatan</th>
							<th width="19%">Tarikh Peminjaman</th>
							<th width="14%">Masa Peminjaman</th>
							<th width="7%">Status</th>
							<th width="9%">Action</th>
						  </tr>
							
						<?php 
							include 'config.php';
							$qry = "SELECT * FROM booking ORDER BY b_id DESC";
							$qid = mysqli_query($connect,$qry);
							while($row = mysqli_fetch_array($qid))
							{?>
						  <tr>
							<td><?php echo $row["b_id"]; ?></td>
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["unit"]; ?></td>
							<td><?php echo $row["telefon"]; ?></td>
							<td><?php echo $row["lokasi"];
								echo $row["lainLokasi"];?></td>
							<td><?php
							 
								$array = (explode(", ",$row["peralatan"]));
								foreach($array as $element)
								{
    								echo $element . "<br>";
    							}

    							?></td>
							<td><?php echo $row["peralatan"] ?></td>
							<td><?php echo $row["start_day"] ?> --- <?php echo $row["end_day"]; ?></td>
							<td><?php echo $row["start_time"] ?> --- <?php echo $row["end_time"]; ?></td>
							<td><?php if($row['cancel'] == 0 )
											echo 'Dalam Proses';
										if ($row['cancel'] == 1)
											 echo 'Diluluskan';
										if($row['cancel'] == 2)
											echo 'Ditolak';
							 			if ($row['cancel'] == 3)
											echo "Batal Pemohonan";
										if ($row['cancel'] == 4)
											echo "Sedang Meminjam";
										if ($row['cancel'] == 5)
											echo "Telah Pulang";
								?></td>
							  	
							 
							<td>
							 	
							<a  href="updateData.php?id=<?php print($row['b_id']);?>"><button title="Edit" class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="deleteData.php?id=<?php print($row['b_id']);?>" onclick="return confirm('Anda pasti untuk padam data?')"><button title= "Delete" class="btn"><i class="fa fa-trash"></i></button></a>
							  </td>
						  </tr>
							<?php } ?>
							</table>
						
		 </section>
		 			  <!-- Footer-->
        <div id="footer" style="width: 102%">
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © <b> UNIT ICT, HPSF.</b> All Rights Reserved</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
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