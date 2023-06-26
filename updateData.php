<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
	session_start();
	include 'config.php';?>
<html lang="en">

    <head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Admin | Update Booking</title>
		<link href="jquery-ui.css" rel="stylesheet">
		<script src="jquery-1.10.2.js"></script>
		<script src="jquery-ui.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/edit.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
		button {
  border: black;
  background-color: #110246;
  padding: 6px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
	border-radius: 10px;
			color: white;}
	
	}
	h4
	{
		text-align: left;
		padding-right: 10px;
		font-size: 300px;
		color: midnightblue;
		font-family: "Arial";
	}

	

</style>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Booking</title>
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<!--<script src="lang/datepicker-fi.js"></script>-->
<script>
    $(function() {
	<!--$.datepicker.setDefaults($.datepicker.regional['fi']);-->
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
	  regional: "fi",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });  </script>

</head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="LOGO4.png" style="width:300px;height:80px;"></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="verify2.php">Senarai Pemohon</a></li>
						<li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="bookCalendar.php">Kalendar Pinjaman</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Log Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<body>
  
<br>
		<br><br>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading--><br>
              <br>
              <h4 style="color: midnightblue">Permohonan Barang ICT</h4><br><br>
                <!-- Icon Divider-->
                <!-- <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-lisne"></div>
                </div>-->
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
						<?php
							include 'config.php';
							$id=$_GET['id'];
							$qry = "SELECT * FROM booking WHERE b_id = '$id'";
							$qid = mysqli_query($connect,$qry);
							$row = mysqli_fetch_array($qid);
						 ?>		
						
                <form name = "borang" action="update_checkNew.php?id=<?php echo $id ?>" method="post">	
		
			<div class="normal-table-list">
                       <div class="basic-tb-hd">
			<table align="center">
				<tr>
                    <td>ID</td>
                    <td height="55"><input style="width: 20px; padding: 0" type="hidden" name="id"  value="<?php echo $row['b_id'];?>" >
					<input style="width: 200px; padding: 0" type="text" class = "form-control" name="id" value="<?php echo $row['b_id'];?>" disabled></td>
                </tr>
				<tr>
					<td height="55">Nama</td>
					<td> <input name="name" class="form-control" required="required" type="text" value="<?php echo $row['name'];?>"></td>
					
				</tr>
				
				<tr>
					<td height="55">Jawatan</td>
					<td> <input name="jawatan" class="form-control" required="required" type="text" value="<?php echo $row['jawatan'];?>" /></td>
					
				</tr>
				
				<tr>
					<td height="55">Jabatan</td>
					<td> <input name="jabatan" class="form-control" required="required" type="text" value="<?php echo $row['jabatan'];?>" /></td>
					
				</tr>
				
				<tr>
					<td height="55">Unit</td>
					<td><input name="unit" class="form-control" required="required" type="text" value="<?php echo $row['unit'];?>"/></td>
					
				</tr>
				
				<tr>
					<td height="55">Telefon</td>
					<td><input name="telefon" class="form-control" required="required" type="text" value="<?php echo $row['telefon'];?>"/></td>
					
				</tr>
				<tr>
					<td height="55">Nama Majlis</td>
					<td> <input name="majlis" class="form-control" required="required" type="text" value="<?php echo $row['majlis'];?>" /></td>
					
				</tr>
				
				<tr>
					<td height="55">Lokasi Majlis</td>
					<td> <input name="lokasi" class="form-control" required="required" type="text" value="<?php echo $row['lokasi'];echo $row['lainLokasi'];?>" /></td>
					
				</tr>
				
				<tr>
				<td>Peralatan dipohon</td>
				<td><br><?php echo $row["peralatan"]; ?><br><br></td>		
			
			</tr>
				<tr>
					<td>Tarikh awal dan akhir pinjaman &emsp;</td>
					<td>
					<input id="from" name="start_day" required="" type="date" value="<?php echo $row['start_day'];?>" />-----
					<input id="to" name="end_day" required="" type="date" value="<?php echo $row['end_day'];?>"/></td>
				</tr>
				
				<tr>
					<td><br>Masa awal dan akhir pinjaman</td>
					<td> <br><input name="start_time" required="" type="time" value="<?php echo $row['start_time'];?>" />-----
					 <input name="end_time" required="" type="time" value="<?php echo $row['end_time'];?>" /><br></td>
				</tr>
				
				<tr>
					<td>Status </td>
					<td><br><input type="radio" name="cancel" value="0" <?php if( $row['cancel'] == '0'){echo'checked';}?>/>Dalam Proses<br>
					<input type="radio" name="cancel" value="1" <?php if($row['cancel']== '1'){echo"checked";}?>/>Permohonan Diluluskan<br>
					<input type="radio" name="cancel" value="2" <?php if($row['cancel']== '2'){echo"checked";}?>/>Permohonan Ditolak<br>
					<input type="radio" name="cancel" value="3" <?php if($row['cancel']== '3'){echo"checked";}?>/>Batal Permohonan<br>
					<input type="radio" name="cancel" value="4" <?php if($row['cancel']== '4'){echo"checked";}?>/>Sedang Meminjam<br>
					<input type="radio" name="cancel" value="5" <?php if($row['cancel']== '5'){echo"checked";}?>/>Telah Pulang<br>
					</td>
				</tr>
				
			</table>
			</div>
			</div>
			<div align="right">
			<button name="book" type="submit" >Hantar</button>
			</div>
		</form>
                    </div>
                </div>
            </div>
        </section>
	
<br><br><br>
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
		</body>
</html>
	



