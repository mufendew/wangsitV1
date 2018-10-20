<!DOCTYPE html>
<html lang="en">
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  	<title>KBMSI AUTH</title>

  	<!-- CSS  -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,800i,700" rel="stylesheet">
	<link href="asset/css/materialize.min.css" rel="stylesheet" type="text/css">
	<link href="asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="asset/css/style.css" rel="stylesheet" type="text/css">  
</head>

<body>              
  
<div class="parallax-w">
	<div class="container">
		<div class="section">
			<div class="row">
				<div class="col s12 center-align" style="margin-bottom: 50px;">
					<h4 class="fontt" style="vertical-align: middle"><b><img class="center-align" src="asset/img/logoo.png" style="width: 50px; vertical-align: middle" alt=""> Wangsit</b></h4>
				</div>
				
				<div class="col m6 hide-on-small-and-down">
					<img class="center-block" src="asset/img/logo.png" style="width: 80%;" alt="">
					<h5 class="fontt"><b>Wangsit Profile</b></h5>
					<p class="">Adalah sebuah sistem autentikasi mahasiswa sistem informasi universitas brawijaya, yang dapat digunakan oleh beberapa aplikasi-aplikasi lain yang ada di KBMSI</p>
				</div>
				
				<div class="col m1"></div>
				
 				<div class="col s12 m5 white-text">
 					<div class="card z-depth-3">
						<div class="card-content" style="height: 60px; background-color: #54264E;">
							<span class="card-title fontt center-align white-text" style="margin-top: -10px;"><b>Login</b></span>
						</div>
						<div class="card-content wow-text" style="padding-left: 40px; padding-right: 40px; padding-bottom: 10px;">
							<form action="" method="post">
								<div class="row">
									<div class="input-field col s12">
									  <input name="NIM" type="text" class="validate" placeholder="">
									 <label for="icon_prefix">NIM atau Username</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12" style="margin-top: 0px;">
									  <input name="PASSWD" type="password" class="validate" placeholder="">
									  <label for="icon_prefix">Password</label>
									</div>
									<div class="col s12 left-align" style="margin-bottom: 0px;">
										  	<input type="checkbox" id="test5" />
										  	<label style="font-size: 12px;" for="test5">Remember Me</label>
									</div>
								</div>
								<div class="row">
									<button type="submit" name="btn_login" class="col s12 btn btn-wangsit btn-large waves-effect wangsit-color">Login</button>
								</div>
								</form>	
								<div class="row" style="margin-bottom: 10px;">
									<div class="col s5 center-align"><div style="border-top: 2px rgba(131,131,131,0.64) solid"></div></div>
									<center>
									<div class="col s2" style="padding: 0; margin-top: -13px"><p class="center-align fontt">Atau</p></div>
									</center>
									<div class="col s5 center-align"><div style="border-top: 2px rgba(131,131,131,0.64) solid"></div></div>
										
								</div>
								<div class="row">
									<a href="<?php echo $loginURL;?>"><button class="col s12 btn btn-large waves-effect red">daftar / Masuk dengan Google</button></a>
								</div>
								<div class="row" style="padding-bottom: 0px;">
									<center>
										<a class="grey-text" href="<?php echo $loginURL;?>">Belum punya akun ? Daftar</a>
									</center>
								</div>
							
						</div>
					</div>
 				</div>
			</div>
			<div class="row white-text center-align grey-text">
				<div class="col s12 grey-text">
					Made with <b>&#x2764;	</b> by <a class="brown-text text-lighten-3" href="http://kbmsi.filkom.ub.ac.id/lembaga/emsi/p2s/">P2S EMSI 2018</a>	
				</div>
			</div>
		</div>
	</div>
</div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="asset/js/materialize.js"></script>
  <script src="asset/js/init.js"></script>
</html>

