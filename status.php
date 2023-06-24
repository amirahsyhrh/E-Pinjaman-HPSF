 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Staff | Status Pemohonan</title>
	
	
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<link href="jquery-ui.css" rel="stylesheet">
		<script src="jquery-1.10.2.js"></script>
		<script src="jquery-ui.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/app3.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>

	
<style>
	
	html *
{
   font-family: Arial !important;
}
			h1
	{
		text-align: left;
		padding-right: 10px;
		font-size: 30px;
		color: midnightblue;
		font-family: "Arial";
	}
	div
	{
		padding-left: 20px;
	}

		.no
		{
		  	border: black;
  			background-color: #110246;
  			padding: 6px 28px;
  			font-size: 16px;
 			display: inline-block;
			border-radius: 5px;
			color: white;
			pointer-events: none;
		}
		.no1
		{
		  	border: black;
  			background-color: #3F95C5;
  			padding: 6px 28px;
  			font-size: 16px;
 			display: inline-block;
			border-radius: 5px;
			color: white;
			pointer-events: none;
		}
		.no2
		{
		  	border: black;
  			background-color: #A80002;
  			padding: 6px 28px;
  			font-size: 16px;
 			display: inline-block;
			border-radius: 5px;
			color: white;
			pointer-events: none;
		}		
	.no3
		{
		  	border: black;
  			background-color: #E47119;
  			padding: 6px 28px;
  			font-size: 16px;
 			display: inline-block;
			border-radius: 5px;
			color: white;
			pointer-events: none;
		}
	.noo
	{
			border: black;
  			background-color: #E0C52C;
  			padding: 6px 28px;
  			font-size: 16px;
 			display: inline-block;
			border-radius: 5px;
			color: white;
			pointer-events: none;
	}
		.pulang
	{
			border: black;
  			background-color: #1C951A;
  			padding: 6px 28px;
  			font-size: 16px;
 			display: inline-block;
			border-radius: 5px;
			color: white;
			pointer-events: none;
	}
	
	input
	{
		width: 180px;
		text-align:justify;
	}
	.no-click {
    pointer-events: none;
}
#footer { 
            padding: 0px 10px 0px 0px; 
            bottom: 0; 
            width: 102%; 
            /* Height of the footer*/
	} 

	
	</style>	
	<?php
			include 'config.php';
			$id=$_GET['id'];
			$qry = "SELECT * FROM booking WHERE username = '$id'  ORDER BY b_id DESC";
			$qid = mysqli_query($connect,$qry);
			$row = mysqli_fetch_array($qid);
	?>
<!-- navigation Bar-->
<body id="page-top">
        <!-- Navigation-->
	        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="LOGO4.png" style="width:300px;height:80px;"></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="staff.php?id=<?php echo $id ?>">Laman Utama</a></li>
						<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="calendar.php?id=<?php echo $id?>">Kalendar Semakan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Log Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<br><br><br>
	

<section class="page-section" id="contact">
		 <div class="container">
		<h1>Status Pemohonan</h1><br>
			 
		 <div class="row">
          <div class="col-lg-8 mx-auto">
		
			<div class="normal-table-list">
            <div class="basic-tb-hd">
			<!--<table align="center"> -->
		<?php
				
				foreach($qid as $row)
				{
					
				
				?>
		<div style="" class="form-group row">
                <div class="col-md-5">
                  <label for="name" class="text-black">Nama</label>
                  <input id="try" name="name" class="form-control" required="required" type="text" value="<?php echo $row['name'];?>" disabled/>
                </div>
                <div class="col-md-5">
                  <label for="c_lname" class="text-black">Unit</label>
                  <input id="try" name="unit" class="form-control" required="required" type="text" value="<?php echo $row['unit'];?>"disabled/>
                </div>
		</div>
		
		<div class="form-group row">
			<div class="col-md-5">
			<label for="telefon" class= "text-black">Telefon</label>
			<input name="telefon" class="form-control" required="required" type="text" value="<?php echo $row['telefon'];?>"disabled/>
			</div>
			<div class="col-md-5">
			<label for="majlis" class= "text-black">Nama Majlis</label>
			<center><input name="majlis" class="form-control" required="required" type="text" value="<?php echo $row['majlis'];?>"disabled/></center>
			</div>	
		</div>
				
		<div class="form-group row">
			<div class="col-md-5">
			<label for="lokasi" class= "text-black">Lokasi</label>
			<input name="lokasi" class="form-control" required="required" type="text" value="<?php echo $row['lokasi'];echo $row["lainLokasi"];?>"disabled/>
			</div>
			<div class="col-md-5">
			<label for="peralatan" class= "text-black">Peralatan Dipohon</label>
			<input name="peralatan" class="form-control" required="required" type="text" value="<?php echo $row['peralatan'];?>"disabled/>
			</div>	
		</div>
				
		<div class="form-group row">
			<div class="col-md-5">
			<label for="telefon" class= "text-black">Tarikh Pinjaman</label>
			<input name="date" class="form-control" required="required" type="text" value="<?php echo $row['start_day']; echo " --- "; echo $row["end_day"];?>"disabled />
			</div>
			<div class="col-md-5">
			<label for="telefon" class= "text-black">Masa Pinjaman</label>
			<input name="time" class="form-control" required="required" type="text" value="<?php echo $row['start_time']; echo " --- "; echo $row["end_time"];?>"disabled />
			</div>	
		</div>
				<div class="form-group row">
				<div class="col-md-10">
				<label for="cancel" class= "text-black">Status</label><br>
					
						<?php if ($row['cancel'] == '0')
						{ ?>
							<button class="noo" class="no-click">Dalam Proses</button>
						<?php }
						if ($row['cancel'] == '1')
						{ ?>
							<button class="no1" class="no-click">Permohonan Diluluskan</button>
						<?php 
						}
						if ($row['cancel'] == '2')
						{
						?>
							<button class="no2" class="no-click">Permohonan Ditolak</button>
						<?php 
						}
						if ($row['cancel'] == '3')
						{
						 ?>
							<button class="no3" class="no-click">Batal Permohonan</button>
						<?php 
						}
						if ($row['cancel'] == '4')
						{
						?>
							<button class="no" class="no-click">Sedang Meminjam</button>
						<?php 
						}
						if ($row['cancel'] == '5')
						{ ?>
							<button class="pulang" class="no-click">Telah Pulang</button>
						<?php 
						}
						
						?>
					</div>
				</div>
				<br><br>
						<?php } ?>
			<!---</table>-->
			</div>
			</div>

			 </div>
			 </div>
		</div>

	</section>
	
<br><br><br><br><br><br><br>	
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