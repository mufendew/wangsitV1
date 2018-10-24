<!DOCTYPE html>
<html lang="en">
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  	<title>KBMSI AUTH</title>

    <?php $this->load->view('Fragment/Styling'); ?>  
</head>

<!-- Dropdown Test -->
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="<?php echo base_url();?>Propil/Googlee/logout" class="wangsit-text"><i class="material-icons">exit_to_app</i>Log Out</a></li>
  </ul>
<!-- Dropdown Test -->

<div class="navbar-fixed">
  <nav class="z-depth-1 white">
    <div class="nav-wrapper white">
     <div class="container">

    <a href="#" class="brand-logo fontt"><img class="center-align" src="asset/img/logoo.png" style="width: 45px; " alt=""></a>
    <ul class="right hide-on-med-and-down" style="margin-right: -100px;">
      <li><a href="<?php echo base_url();?>wkwkwkwk"><b>home</b></a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><b>admin</b><i class="material-icons right" style="margin-left: 10px;">arrow_drop_down</i></a></li>
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
      <div class="col offset-l3 offset-m3 s12 m6 l6" style="margin-top : 25px; margin-bottom : 40px">
        <div class="card z-depth-1">
          <div class="card-content" style="padding-top: 10px;">

            <h6 class="fontt center-align" style=" margin-bottom: 20px; margin-top: 20px; font-size: 18px;">
              <b>Edit Admin</b>
            </h6>
            <form id="fadho" action="" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input value="<?php echo ucwords($orang->NAMA); ?>" id="disabled" type="text" class="validate" name="namaa" placeholder="">
                <label class="active">Nama</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Masukan NIM anda" value="<?php echo $orang->NIM; ?>" id="first_name" type="number" class="validate" name="nimm" required="" aria-required="true">
                <label class="active" for="first_name">NIM</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Username" id="first_name" value="<?php echo $orang->USERNAME; ?>" type="text" class="validate" name="usernamee" required="" aria-required="true">
                <label class="active" for="first_name">Username</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Masukan Nomor hp anda" type="tel" value="<?php echo $orang->HP; ?>" name="nohp" class="validate" required="" aria-required="true">
                <label>No Hp</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="" id="first_name" type="text" class="active datepicker" value="<?php echo $orang->TTL; ?>" name="lahirr" required="" aria-required="true">
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
        format: 'yyyy-mm-dd',
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

