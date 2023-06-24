<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Masuk</title>
</head>
			<script type = "text/javascript">
		function validate()
		{
			if (document.myForm.password_2.value == "")
				{
					alert ("Masukkan Pengesahan Password!");
					document.myForm.password_2.focus();
					return false;
				}
			
			if (document.myForm.password_1.value != document.myForm.password_2.value)
				{
					alert ("Kedua-dua Password Tidak Sama!");
					document.myForm.password_1.focus();
					document.myForm.password_2.focus();
					return false;
				}

			   
			return (true);

		}
		
		
	</script>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<style>
	
body{
	font-family:verdana;
	background-color: #06023E;
	font-size: 14px;
}
 
.container{
	border-radius: 15px;
	width:50%;
	margin:4% auto;
	border:5px solid #84C4E1;
	background:#ffffff;
}
 
.container-dashboard{
	width:90%;
	border:5px solid #84C4E1;
	background:#ffffff;
	padding:10px;
	margin: 20px;
}
 
.field-container{
	margin:10px;
	width:400px;
}
	
h1{
	text-align:center;
	line-height:30px;
	font-size:24px;
	color:#061e5a;
}
 
label{
	display:block;
	padding-bottom:5px;
	color:black;
	font-weight:500;
}
 
input[type=text],input[type=password]{
	border:1px solid #eeeeee;
	width:100%;
	height:30px;
	padding-left:4px;
	
}
 
button{
	background:#061e5a;
	border:1px solid #061e5a;
	color:#ffffff;
	margin:10px 0px;
	padding:5px;
	width: 70px;
	border-radius: 10px;
	color: whitesmoke;
}
 
button:hover{
	background:#333333;
	border:1px solid #333333;
}
 
 
.error-msg{
	border:1px solid #ee0000;
	background:#ee0000;
	color:#ffffff;
	padding:2px;
	font-size:13px;
}
 
.success-msg{
	border:1px solid #0ebc6f;
	background:#0ebc6f;
	color:#ffffff;
	font-size:13px;
	padding:2px;
}
 
 
.user-name{
	color:#ee0000;
}
 
.logout-link{
	margin-top:10px;
	display:block;
	background:#061e5a;
	border:1px solid #061e5a;
	color:#ffffff;
	width:48px;
	padding:5px;
	text-decoration:none;
	font-size:13px;
}
	.txt1 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #999999;
  line-height: 1.5;
}

.txt2 {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #061e5a;
  line-height: 1.5;
}
	input[type=text] {
  width: 110%;
  padding: 12px 20px;
  margin: 3px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
		input[type=password] {
  width: 110%;
  padding: 12px 20px;
  margin: 3px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
	
	</style>
	

<body>
<div class="container" >
		<h1 style="font-size: 20px">Daftar Masuk</h1>
		<form name= "myForm" action="register_check.php" method="post" onSubmit="return(validate())">
		<div>
			<center>
					<div>
						<img width="150px" src="images/logo2.png"> </img>
					</div>
			</center>
			
		  <div class="field-container">
			  <div class="contentcontainer med left" style="margin-left: 70px;">
			<label>Username</label>
			  <input type="text" name="name" required placeholder="Username (IC Number)">
			  </div>
            
		  </div>
		  <div class="field-container">
			  <div class="contentcontainer med left" style="margin-left: 70px;">
				<label>Password</label>
				  <input type="password" name="password_1" required placeholder="Password">
			  </div>
				
		  </div>
			<div class="field-container">
			  <div class="contentcontainer med left" style="margin-left: 70px;">
				<label>Pengesahan Password</label>
				  <input type="password" name="password_2" required placeholder="Pengesahan Password">
			  </div>
				
		  </div>
		  <div class="field-container" style="margin-left: 80px;">
			  <button type="reset" name="submit">Cancel</button>
			  <button type="submit" name="submit">Daftar</button>
			</div>
			
			
		</form>
				<ul >
				<li class="m-b-8">
					<span class="txt1">
								Sudah Mendaftar?
					</span>

					<a href="../index.php" class="txt2">
						Log Masuk
					</a>
				</li>

					</ul>
	</div>
</body>
</html>