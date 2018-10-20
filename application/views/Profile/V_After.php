<!DOCTYPE html>
<html lang="en">
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  	<title>KBMSI AUTH</title>

  	<!-- CSS  -->
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,800i,700" rel="stylesheet">
	<link href="<?php echo base_url();?>asset/css/materialize.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>asset/css/style.css" rel="stylesheet" type="text/css">  
</head>

<!-- dropdown untuk navbar logout -->
<div id="dropdown1" class="dropdown-content" style="color: black;">
  <div class="row">
    <div class="col l2">
      <img src="avatar.jpg" alt="" class="circle" width="50px" style="margin-top: 10px ">
    </div>
    <div class="col l5" style="margin-left: 20px">
      <p>Naufal Andika
        <br> andikaa.naufal@gmail.com</p>
    </div>
  </div>
  <div class="divider"></div>
  <div>
    <a class="waves-effect waves-light btn" style="margin: 25px">logout</a>
  </div>
</div>
<!-- dropdown untuk navbar logout -->
<!-- Dropdown Test -->
  <ul id='dropdown2' class='dropdown-content'>
    <li><a href="<?php echo base_url();?>Propil/Googlee/logout" class="wangsit-text"><i class="material-icons">exit_to_app</i>Log Out</a></li>
  </ul>
<!-- Dropdown Test -->


<div class="navbar-fixed">
	<nav class="z-depth-1 white">
	  <div class="nav-wrapper white">
	   <div class="container">

		<a href="#" class="brand-logo fontt"><img class="center-align" src="asset/img/logoo.png" style="width: 45px; " alt=""></a>
		<ul class="right hide-on-med-and-down" style="margin-right: -100px;">

			<li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><img class="circle" src="<?php echo $userdata['picture']."?sz=50";?> " style="width: 40px; vertical-align:middle; margin-right: 10px; margin-top: -5px" alt=""><b><?php echo ucwords($userdata['family_name']); ?></b><i class="material-icons right" style="margin-left: 10px;">arrow_drop_down</i></a></li>
		</ul>
		<div id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 30px">
		</div>
		</div>
	  </div>
	</nav>
</div>
<body>

<div class="container">

    <div class="row">
      <?php 
        if (isset($errorr)) {
     ?>

      <div class="col s12" style="margin-top: 25px;">
        <div class="chip red white-text" style="width: 100%; border-radius: 5px;">
          <?php echo $errorr ?>
          <i class="close material-icons">close</i>
        </div>
      </div>
      <?php
         }
      ?>

      <div class="col offset-l3 offset-m3 s12 m6 l6" style="margin-top : 25px; margin-bottom : 40px">
        <div class="card z-depth-1">
          <div class="card-content" style="padding-top: 10px;">

            <h6 class="fontt center-align" style=" margin-bottom: 20px; margin-top: 20px; font-size: 18px;">
              <b>Verifikasi Akun Anda</b>
            </h6>
            <form id="fadho" action="" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo ucwords($userdata['name']); ?>" id="disabled" type="text" class="validate" disabled>
                <label class="active" for="disabled">Nama</label>
              </div>
            </div>
            <input type="hidden" name="namaa" value="<?php echo ucwords($userdata['name']);?>">
            <input type="hidden" name="emaill" value="<?php echo $userdata['email']; ?>">
            <input type="hidden" name="uidd" value="<?php echo $userdata['id'];?>">
            <input type="hidden" name="gambarr" value="<?php echo $userdata['picture']; ?>">
            <div class="row">
              <div class="input-field col s12">
                <input disabled value="<?php echo $userdata['email']; ?>" id="disabled" type="text" class="validate" >
                <label class="active" for="disabled">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Masukan NIM anda" id="first_name" type="number" class="validate" name="nimm" required="" aria-required="true">
                <label class="active" for="first_name">NIM</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Username" id="first_name" type="text" class="validate" name="usernamee" required="" aria-required="true">
                <label class="active" for="first_name">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Password Baru" id="password" type="password" class="validate" name="passwordd" required="" aria-required="true">
                <label class="active" for="password">Password Baru</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Ketik Ulang Password Baru Anda" id="passwordConfirm" type="password" name="" required="" aria-required="true">
                <label class="active" id="lblPasswordConfirm" for="passwordConfirm" data-error="Password not match" data-success="Password Match">Ketik Ulang Password Baru Anda</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Masukan Nomor hp anda" type="tel" name="nohp" class="validate" required="" aria-required="true">
                <label>No Hp</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" id="first_name" type="text" class="active datepicker" name="lahirr" required="" aria-required="true">
                <label class="active" for="first_name">Tanggal Lahir</label>
              </div>
            </div>
            <div id="modal1" class="modal">
              <div class="modal-content center-align">
                <h5>Data yang sudah di insert tidak dapat di ganti untuk saat ini, Apakah anda sudah yakin dengan data yang anda isi ? <br>
                </h5>
                <div class="row" style="margin-top: 20px;">
                  <div class="col s6">
                    <a style="width: 100%" class=" btn btn-wangsit btn-large waves-effect red modal-close">Tidak</a>
                  </div>
                  <div class="col s6">
                    <button style="width: 100%" type="submit" name="btn_login" class=" btn btn-wangsit btn-large waves-effect green modal-close">Ya</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <a href="#modal1" class="modal-trigger"><button class="col s12 btn btn-wangsit btn-large waves-effect wangsit-color">Tambah Data</button></a>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
 
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/materialize.js"></script>
  <script src="<?php echo base_url();?>asset/js/init.js"></script>
  <script type="text/javascript">
      $('.datepicker').datepicker({
        showClearBtn : true,
        format: 'dd-mm-yyyy',
        defaultDate : new Date("1998-05-05"),
        yearRange : [1980,2005]
      });

      $("#password").on("focusout", function (e) {
      if ($(this).val() != $("#passwordConfirm").val()) {
          $("#passwordConfirm").removeClass("valid").addClass("invalid");
      } else {
          $("#passwordConfirm").removeClass("invalid").addClass("valid");
      }
      });
  
      $("#passwordConfirm").on("keyup", function (e) {
      if ($("#password").val() != $(this).val()) {
          $(this).removeClass("valid").addClass("invalid");
      } else {
          $(this).removeClass("invalid").addClass("valid");
      }
      });
  </script>
	</body>
</html>

