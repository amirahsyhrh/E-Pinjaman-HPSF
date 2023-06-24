<?php
include 'config.php';

	$valueToSearch = $_REQUEST['valueToSearch'];
	$query = "SELECT * FROM booking WHERE name LIKE '%".$valueToSearch. "%' OR unit LIKE '%".$valueToSearch. "%'";
	$result = mysqli_query( $connect,$query) or die("Query failed");

?>
<html lang="en">

    <head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>Admin | Senarai Carian</title>
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
		
	
		<title>Senarai Carian </title>
		<style>
			
			title
			{
				color: antiquewhite;
			}
th {
  background-color:#373270;
  color: white;
	text-align: center;
}
table, td, th {  
  border: 1px solid #ddd;
}

table {
  border-collapse: collapse;
  width: 100%;
}
tr:nth-child(even){background-color: #f2f2f2}
th, td {
  padding: 10px;
}
p
{
	text-align: left;
	font-size: 30px;
	color: midnightblue;
	font-family: "Arial";
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
  padding: 10px 10px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #4B61AC;
	color:#0A3C53;
}
			

		</style>
	</head>
	 <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
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
    							<a style="font-size: 15px" href="month.php">Bulanan</a>
							  </div>
							</div>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Log Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </nav><br><br>
	        <section class="page-section" id="contact">
          
                <!-- Contact Section Heading-->
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
				         <br><p><b>Senarai Carian</b>
			             </p>
                </form>
							<?php
						include "db_connect.php";
						$count = 0;
						$valueToSearch = $_REQUEST['valueToSearch'];
						$sqli= "SELECT * FROM booking WHERE name LIKE '%".$valueToSearch. "%' OR unit LIKE '%".$valueToSearch. "%'";
						$qid = mysqli_query($connect, $sqli);

							if($qid)
						{ ?>
						<table border = 1>
						  <tr>
							  <th>ID</th>
							<th width="9%" align="center">Nama</th>
							<th width="7%" align="center">Unit</th>
							<th width="11%">No. Telefon</th>
							<th width="10%">Lokasi</th>
							<th width="12%">Peralatan</th>
							<th width="17%">Tarikh Peminjaman</th>
							<th width="15%">Masa Peminjaman</th>
							<th width="8%">Status</th>
							<th width="10%">Action</th>
						  </tr>
							<?php
							foreach ($qid as $row){
							echo "<tr>";
							echo "<td>". $row ["b_id"]. "</td>";
							echo "<td>" .$row["name"]. "</td>";
							echo "<td>" .$row["unit"]. "</td>";
							echo "<td>" .$row["telefon"]. "</td>";
							echo "<td>" .$row["lokasi"]. $row['lainLokasi']. "</td>";
							echo "<td>" .$row["peralatan"]. "</td>";
							echo "<td>" .$row["start_day"]."---". $row["end_day"]."</td>";
							echo "<td>" .$row["start_time"]."---". $row["end_time"]."</td>";
							echo "<td>"; if($row["cancel"] == '0')
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
								"</td>";
							?>
							<td><a  href="updateData.php?id=<?php print($row['b_id']);?>"><button title="Edit" class="btn"><i class="fa fa-edit"></i></button></a>
							<a href="deleteData.php?id=<?php print($row['b_id']);?>" onclick="return confirm('Anda pasti untuk padam data?')"><button title= "Delete" class="btn"><i class="fa fa-trash"></i></button></a></td>
							<?php
							echo "</tr>"; 
							$count++;
							}
							}?>
							</table>
						<?php
						if ($count <= 0)
							echo "<br>"."<center>"."No Record". "</center>";
						
						?>
						<br><a href="verify2.php" title="Kembali"><u>Kembali</u></a>
						
		 </section>
        </section>
		</body>
	</html>