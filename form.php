<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Staff | Permohonan</title>
	
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
        <link rel="icon" type="image/x-icon" href="assets/img/app3.ico" />
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

	
	h1
	{
		font-size: 30px;
		color: midnightblue;
		font-family: "Times New Roman";
	}
	button {
  border: black;
  background-color: #110246;
  padding: 6px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
	border-radius: 10px;
	color: white;
}
	
	h2
	{
		font-size: 15px;
		color: red;
		font-style: italic;
	}
</style>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Staff | Permohonan</title>
<link href="jquery-ui.css" rel="stylesheet">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<!--<script src="lang/datepicker-fi.js"></script>-->

</head>
<!-- navigation Bar-->
<body id="page-top">
	     	<?php
			include 'config.php';
			$id=$_GET['id'];
			$qry = "SELECT * FROM staff WHERE staff_username = '$id'";
			$qid = mysqli_query($connect,$qry);
						 ?>	
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="LOGO4.png" style="width:300px;height:80px;"></a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="staff.php?id=<?php echo $id ?>">Laman Utama</a></li>
						 <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="calendar.php?id=<?php echo $id ?>">Kalendar Semakan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="status.php?id=<?php echo $id ?>">Status Permohonan</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Log Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	<!-- navigation bar ended-->
	
	
	<br> <br> <br>
	<section class="page-section" id="contact"> 
	<div class="container"> 
		<h1>  Pemohonan Barang ICT</h1>
		
		
		
		<form method="POST" action="book.php?id=<?php echo $id;?>" class="register-form" id="booking-form">
			
		<table align="center">
				<tr>
					<td height="55">Nama</td>
					<td> <input name="name"  class="form-control" required="required" type="text" /></td>
					
				</tr>
			
				<tr>
					<td height="55">Jawatan</td>
					<td> <select name="jawatan" class="form-control" required="required" >
					<option selected hidden value="Pilih Jawatan">Pilih Jawatan</option>
					<opyion value = "Tidak Dinyatakan">Tidak Dinyatakan</opyion>
					<option value="Pegawai Teknologi Maklumat">Pegawai Teknologi Maklumat</option>
					<option value="Pegawai Perubatan(X-Ray)">Pegawai Perubatan(X-Ray)</option>
					<option value="Juru X-Ray">Juru X-Ray</option>
					<option value="Jururawat">Jururawat</option>
					<option value="Pembantu Tadbir(Perkeranian/Operasi)">Pembantu Tadbir(Perkeranian/Operasi)</option>
					<option value="Juru Proses Filem X ray">Juru Proses Filem X ray</option>	
					<option value="Pembantu Perawatan Kesihatan">Pembantu Perawatan Kesihatan</option>
					<option value="Penolong Pegawai Perubatan">Penolong Pegawai Perubatan</option>	
					<option value="Jururawat Masyarakat">Jururawat Masyarakat</option>
					<option value="Penolong Pegawai Tadbir">Penolong Pegawai Tadbir</option>	
					<option value="Pegawai Dietetik">Pegawai Dietetik</option>
					<option value="Penolong Pegawai Penyediaan Makanan">Penolong Pegawai Penyediaan Makanan</option>	
					<option value="Pembantu Penyediaan Makanan">Pembantu Penyediaan Makanan</option>
					<option value="Pekerja Awam Khas">Pekerja Awam Khas</option>	
					<option value="Juruteknik Komputer">Juruteknik Komputer</option>
					<option value="Akauntan">Akauntan</option>
					<option value="Pembantu Tadbir (W17)">Pembantu Tadbir (W17)</option>
					<option value="Pembantu Akauntan">Pembantu Akauntan</option>
					<option value="Pembantu Tadbir">Pembantu Tadbir</option>	
					<option value="Pakar Perubatan">Pakar Perubatan</option>
					<option value="Pegawai Perubatan">Pegawai Perubatan</option>
					<option value="Pegawai Perubatan Dlm Latihan (HO)">Pegawai Perubatan Dlm Latihan (HO)</option>
					<option value="Pegawai Pemulihan Perubatan (Pertuturan)">Pegawai Pemulihan Perubatan (Pertuturan)</option>
					<option value="Pegawai Pemulihan Perubatan (Pendengaran)">Pegawai Pemulihan Perubatan (Pendengaran)</option>
					<option value="Pegawai Kerja Sosial Perubatan">Pegawai Kerja Sosial Perubatan</option>
					<option value="Pegawai Kebajikan Perubatan">Pegawai Kebajikan Perubatan</option>
					<option value="Penolong Pegawai Kebajikan Perubatan">Penolong Pegawai Kebajikan Perubatan</option>
					<option value="Pemandu">Pemandu</option>
					<option value="Pegawai Farmasi">Pegawai Farmasi</option>
					<option value="Penolong Pegawai Farmasi">Penolong Pegawai Farmasi</option>
					<option value="Pembantu Rendah Awam">Pembantu Rendah Awam</option>
					<option value="Pen.Peg.Penerangan">Pen.Peg.Penerangan</option>
					<option value="Pegawai Khidmat Pelanggan">Pegawai Khidmat Pelanggan</option>
					<option value="JUSA C">JUSA C</option>
					<option value="Pegawai Optometris">Pegawai Optometris</option>
					<option value="Pegawai Tadbir Diplomatik">Pegawai Tadbir Diplomatik</option>
					<option value="Pegawai Pendidikan Kesihatan">Pegawai Pendidikan Kesihatan</option>
					<option value="Pembantu Am Pejabat">Pembantu Am Pejabat</option>
					<option value="Penolong Pegawai Penerangan">Penolong Pegawai Penerangan</option>
					<option value="Jurutera">Jurutera</option>
					<option value="Penolong Jurutera">Penolong Jurutera</option>
					<option value="Kaunselor">Kaunselor</option>
					<option value="Juruteknologi Makmal Perubatan">Juruteknologi Makmal Perubatan</option>
					<option value="Pegawai Sains">Pegawai Sains</option>	
					<option value="Pakar Perubatan Kaji Penyakit">Pakar Perubatan Kaji Penyakit</option>
					<option value="Penolong Pegawai Keselamatan">Penolong Pegawai Keselamatan</option>
					<option value="Pembantu Keselamatan">Pembantu Keselamatan</option>
					<option value="Pegawai Pemulihan Perubatan(Carakerja)">Pegawai Pemulihan Perubatan(Carakerja)</option>
					<option value="Jurupulih Perubatan(Carakerja)">Jurupulih Perubatan(Carakerja)</option>	
					<option value="Penyelia Asrama">Penyelia Asrama</option>
					<option value="Penolong Kesihatan Awam">Penolong Kesihatan Awam</option>
					<option value="Jurupulih Perubatan(Fisioterapi)">Jurupulih Perubatan(Fisioterapi)</option>
					<option value="Pegawai Seranta">Pegawai Seranta</option>
					<option value="Penolong Pegawai Tadbir (Rekod Perubatan)">Penolong Pegawai Tadbir (Rekod Perubatan)</option>
					<option value="Pegawai Tadbir, Rekod Perubatan">Pegawai Tadbir, Rekod Perubatan</option>
					<option value="Pembantu Am Rendah">Pembantu Am Rendah</option>
					<option value="Penolong Pegawai Kesihatan (Persekitaran)">Penolong Pegawai Kesihatan (Persekitaran)</option>
					<option value="Pembantu Perpustakaan">Pembantu Perpustakaan</option>
					<option value="Pegawai Penyediaan Makanan">Pegawai Penyediaan Makanan</option>
					<option value="Pegawai Pergigian">Pegawai Pergigian</option>
					<option value="Pembantu Pembedahan Pergigian">Pembantu Pembedahan Pergigian</option>
					<option value="Juruteknologi Pergigian">Juruteknologi Pergigian</option>
					<option value="Pakar Bedah Mulut">Pakar Bedah Mulut</option>
					<option value="Pegawai Pemulihan Perubatan (Fisioterapi">Pegawai Pemulihan Perubatan (Fisioterapi</option>
					<option value="Setiausaha Pejabat">Setiausaha Pejabat</option>
					<option value="Penolong Akauntan">Penolong Akauntan</option>
					<option value="Pembantu Operasi">Pembantu Operasi</option>	
					</select>	
					</td>
				</tr>
			
				<tr>
					<td height="55">Jabatan</td>
					<td> <select name="jabatan" class="form-control" required="required" >
					<option selected hidden value="Pilih Jabatan">Pilih Jabatan</option>
					<option value="Anaestesia">Jabatan Anaestesia</option>
					<option value="Bedah Mulut">Jabatan Bedah Mulut</option>
					<option value="Dietetik & Sajian">Jabatan Dietetik & Sajian</option>
					<option value="Dermatologi">Jabatan Dermatologi</option>
					<option value="Farmasi & Bekalan">Jabatan Farmasi & Bekalan</option>
					<option value="Fisioterapi">Jabatan Fisioterapi</option>	
					<option value="Kecemasan Dan Trauma">Jabatan Kecemasan & Trauma</option>
					<option value="Kerja Sosial Perubatan">Jabatan Kerja Sosial Perubatan</option>	
					<option value="Obstetrik & Ginekologi">Jabatan Obstetrik & Ginekologi</option>
					<option value="Oftalmologi">Jabatan Oftalmologi</option>	
					<option value="Orthopedik">Jabatan Orthopedik</option>
					<option value="Otorinolaringologi">Jabatan Otorinolaringologi</option>	
					<option value="Patologi">Jabatan Patologi</option>
					<option value="Pediatrik/Neonatal">Jabatan Pediatrik/Neonatal</option>
					<option value="Pembedahan">Jabatan Pembedahan</option>
					<option value="Pendidikan Kesihatan">Jabatan Pendidikan Kesihatan</option>
					<option value="Pengurusan">Jabatan Pengurusan</option>
					<option value="Perubatan">Jabatan Perubatan</option>
					<option value="Psikiatri">Jabatan Psikiatri</option>
					<option value="Radiologi">Jabatan Radiologi</option>
					<option value="Rekod Perubatan">Jabatan Rekod Perubatan</option>
					<option value="Terapi Carakerja">Jabatan Terapi Carakerja</option>
						</select>
					
					</td>
				</tr>
				<tr>
					<td height="55">Unit</td>
					<td><select name="unit" id="" class="form-control" required="required">
					<option selected hidden value="Pilih Unit">Pilih Unit</option>
					<option value="A&E(Doktor)">A&E(Doktor)</option>
					<option value="A&E(Jururawat)">A&E(Jururawat)</option>
					<option value="A&E(PPK)">A&E(PPK)</option>
					<option value="A&E(PPP)">A&E(PPP)</option>
					<option value="A&E(PPW)">A&E(PPW)</option>
					<option value="Bedah Mulut">Bedah Mulut</option>
					<option value="Carakerja">Carakerja</option>
					<option value="CRC">Clinical Research Centre</option>
					<option value="CPU(Komuniti)">CPU(Komuniti)</option>
					<option value="Dewan Bedah(Doktor)">Dewan Bedah(Doktor)</option>
					<option value="Dewan Bedah(Jururawat)">Dewan Bedah(Jururawat)</option>
					<option value="Dewan Bedah(PPK & PPP)">Dewan Bedah(PPK & PPP)</option>
					<option value="Dewan Bersalin">Dewan Bersalin</option>
					<option value="Dietetik & Sajian">Dietetik & Sajian</option>
					<option value="Excellent Centre">Excellent Centre</option>
					<option value="Farmasi">Farmasi</option>
					<option value="Fisioterapi">Fisioterapi</option>
					<option value="Hematologi">Hematologi</option>
					<option value="HO A&E">HO A&E</option>
					<option value="HO Anestesiologi">HO Anestesiologi</option>
					<option value="HO O&G">HO O&G</option>
					<option value="HO Orthopedik">HO Orthopedik</option>	
					<option value="HO Pediatrik">HO Pediatrik</option>	
					<option value="HO Pembedahan">HO Pembedahan</option>
					<option value="HO Perubatan">HO Perubatan</option>
					<option value="HO Psikiatri">HO Psikiatri</option>
					<option value="Houseman">Houseman</option>	
					<option value="Jururawat Kilinik ENT">Jururawat Kilinik ENT</option>
					<option value="Jururawat Orthopedik">Jururawat Orthopedik</option>
					<option value="Jururawat SOPD">Jururawat SOPD</option>	
					<option value="Jururawat XRAY">Jururawat XRAY</option>	
					<option value="Kilinik Dada">Klinik Dada</option>
					<option value="Kilinik ENT">Kilinik ENT</option>
					<option value="Klinik MOPC">Klinik MOPC</option>
					<option value="Klinik Onkologi">Klinik Onkologi</option>
					<option value="Klinik Pakar Kanak-Kanak">Klinik Pakar Kanak-Kanak</option>	
					<option value="Kilinik Pakar Kulit">Kilinik Pakar Kulit</option>
					<option value="Kilinik Pakar Mata">Kilinik Pakar Mata</option>
					<option value="Klinik Pakar O&G (Jururawat & PPK)">Klinik Pakar O&G (Jururawat & PPK)</option>
					<option value="Klinik Pakar O&G (MO & Pakar)">Klinik Pakar O&G (MO & Pakar)</option>
					<option value="Klinik Pakar Ortopedik">Klinik Pakar Ortopedik</option>
					<option value="Kilinik Pakar Psikiatri">Kilinik Pakar Psikiatri</option>
					<option value="Klinik Sejahtera">Klinik Sejahtera</option>
					<option value="Klinik SOPD">Klinik SOPD</option>
					<option value="Mikrobiologi">Mikrobiologi</option>
					<option value="Patologi">Patologi</option>
					<option value="Patologi Anatomi">Patologi Anatomi</option>
					<option value="Patologi Kimia">Patologi Kimia</option>
					<option value="Pej Penyelia Hosp">Pejabat Penyelia Hospital</option>
					<option value="Pej Penyelia Jururawat">Pejabat Penyelia Jururawat</option>	
					<option value="Pendidikan Kesihatan">Pendidikan Kesihatan</option>	
					<option value="Pengimejan & Diagnostik">Pengimejan & Diagnostik</option>
					<option value="Pengurusan Patologi ">Pengurusan Patologi </option>
					<option value="Pej Pengarah">Pejabat Pengarah</option>
					<option value="Pusat Rawatan Harian Onkologi">Pusat Rawatan Harian Onkologi</option>
					<option value="Pusat Sumber Diabetis ">Pusat Sumber Diabetis</option>
					<option value="Rekod Perubatan">Rekod Perubatan</option>
					<option value="Sosial Perubatan">Sosial Perubatan</option>
					<option value="Tabung Darah">Tabung Darah</option>
					<option value="Komunikasi Korporat">Unit Komunikasi Korporat</option>
					<option value="Unit Angkut">Unit Angkut</option>
					<option value="Unit Aset">Unit Aset</option>
					<option value="Unit Bilik Daftar Masuk & Hasil">Unit Bilik Daftar Masuk & Hasil</option>
					<option value="Unit CSSD">Unit CSSD</option>
					<option value="Unit Endoskopi">Unit Endoskopi</option>	
					<option value="Unit Forensik">Unit Forensik</option>
					<option value="Unit Gaji">Unit Gaji</option>
					<option value="Unit ICT">Unit ICT</option>
					<option value="Unit Kawalan Infeksi">Unit Kawalan Infeksi</option>
					<option value="Unit Kejuruteraan">Unit Kejuruteraan</option>
					<option value="Unit Keselamatan">Unit Keselamatan</option>
					<option value="Unit Kesihatan Awam">Unit Kesihatan Awam</option>
					<option value="Unit Kewangan">Unit Kewangan</option>
					<option value="Unit Medicolegal">Unit Medicolegal</option>
					<option value="Unit Nefrologi">Unit Nefrologi</option>
					<option value="Unit Pengambilan Darah">Unit Pengambilan Darah</option>
					<option value="Unit Pengangkutan">Unit Pengangkutan</option>
					<option value="Unit Pentadbiran">Unit Pentadbiran</option>
					<option value="Unit Perolehan">Unit Perolehan</option>
					<option value="Unit Pusat Sumber">Unit Pusat Sumber</option>
					<option value="Unit Rawatan Rapi">Unit Rawatan Rapi</option>
					<option value="Unit Rawatan Rapi(PPK & PPP)">Unit Rawatan Rapi(PPK & PPP)</option>
					<option value="Unit Stor Alat Tulis">Unit Stor Alat Tulis</option>
					<option value="Unit Sumber Manusia">Unit Sumber Manusia</option>
					<option value="Unit Transplant">Unit Transplant</option>
					<option value="Wad 1(L)">Wad 1(L)</option>
					<option value="Wad 1(P)">Wad 1(P)</option>
					<option value="Wad 10">Wad 10</option>
					<option value="Wad 11">Wad 11</option>
					<option value="Wad 12">Wad 12</option>
					<option value="Wad 13">Wad 13</option>
					<option value="Wad 14">Wad 14</option>
					<option value="Wad 15">Wad 15</option>
					<option value="Wad 16(CCU)">Wad 16(CCU)</option>
					<option value="Wad 16 (HDW)">Wad 16 (HDW)</option>
					<option value="Wad 17">Wad 17</option>
					<option value="Wad 18">Wad 18</option>
					<option value="Wad 2(L)">Wad 2(L)</option>
					<option value="Wad 2(Isoloasi)">Wad 2(Isolasi)</option>
					<option value="Wad 3">Wad 3</option>
					<option value="Wad 4">Wad 4</option>
					<option value="Wad 5">Wad 5</option>
					<option value="Wad 6">Wad 6</option>
					<option value="Wad 7">Wad 7</option>
					<option value="Wad 8">Wad 8</option>
					<option value="Wad 9">Wad 9</option>
					<option value="Wad NICU">Wad NICU</option>
					</select>
						
					</td>
					
					
					
				</tr>
				<tr>
					<td height="55">Telefon</td>
					<td><input name="telefon" class="form-control" required="" type="text" placeholder="(Eg:0123456789)" /></td>
					
				</tr>
			
				<tr>
					<td height="55">Nama acara/majlis</td>
					<td> <input name="majlis" class="form-control"required="" type="text" /></td>
				</tr>
			
			<tr style="line-height: 1.5">
				
				<td height="55"> Lokasi</td>
				<td> <select name="lokasi" class="form-control">
					<option selected hidden value="">Lokasi</option>
					<option value = "Dewan Semarak"> Dewan Semarak</option>
					<option value="Dewan Saujana"> Dewan Saujana</option>
					<option value = "Dewan Bestari"> Dewan Bestari</option>
					<option value="Dewan Serbaguna">Dewan Serbaguna </option>
					<option value="Makmal Komputer">Makmal Komputer</option>
					<input name="lainLokasi" class="form-control" type="text" placeholder="Lain-lain Lokasi" />
					</td>
			</tr>
			
			
				<tr style="line-height: 1.5">
				<td>Peralatan dipohon</td>
				<td><input  name="peralatan[]" type="checkbox" value="Laptop" />Laptop <br>
					<input name="peralatan[]" type="checkbox" value="Lcd Projector" />LCD Projector <br>
					<input name="peralatan[]" type="checkbox" value="Camera" />Camera <br>
					<input name="peralatan[]" type="checkbox" value="PA System" />PA System<br></td><br>
					
			</tr>
			
				<tr>
					<td height="55"> Tarikh awal dan akhir pinjaman &nbsp;</td>
					<td>
			<input id="from" name="start_day" required="" type="date" placeholder="MM/DD/YYYY"/>-----
					<input id="to" name="end_day" required="" type="date" placeholder="MM/DD/YYYY" /></td>
				</tr>
			
				<tr>
					<td height="55">Masa awal dan akhir pinjaman</td>
					<td><input name="start_time" required="" type="time" />-----
					 <input name="end_time" required="" type="time" /></td>
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