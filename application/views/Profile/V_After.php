<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 <title>Validasi - KBMSI AUTH</title>

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
          <li>
            <a class="dropdown-trigger" href="#!" data-target="dropdown2">
              <img class="circle" src="<?php echo $userdata['picture']."?sz=50";?> " style="width: 40px; vertical-align:middle; margin-right: 10px; margin-top: -5px" alt="">
              <b><?php echo ucwords($userdata['family_name']); ?></b>
              <i class="material-icons right" style="margin-left: 10px;">arrow_drop_down</i>
            </a>
          </li>
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
              <b>Validasi Akun Anda</b>
            </h6>
            <form id="fadho" action="" method="POST">
              <input type="hidden" name="namaa" value="<?php echo ucwords($userdata['name']);?>">
              <input type="hidden" name="emaill" value="<?php echo $userdata['email']; ?>">
              <input type="hidden" name="uidd" value="<?php echo $userdata['id'];?>">
              <input type="hidden" name="gambarr" value="<?php echo $userdata['picture']; ?>">
              <div class="row">
                <div class="input-field col s12">
                  <input value="<?php echo ucwords($userdata['name']); ?>" type="text" class="disabled validate" disabled>
                  <label class="active" for="disabled">Nama</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input disabled value="<?php echo $userdata['email']; ?>" type="text" class="disabled validate" >
                  <label class="active" for="disabled">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Masukan NIM anda" id="nim" type="text" class="validate" name="nimm" required="" aria-required="true" pattern="[0-9]{15}" title="Masukkan 15 digit NIM">
                  <label class="active" for="nim">NIM</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Masukkan Username anda" id="username" type="text" class="validate" name="usernamee" required="" aria-required="true" minlength="6" onkeyup="validatePassword()">
                  <label class="active" for="username">Username</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Masukkan Password anda" id="password" type="password" class="validate" name="passwordd" required="" aria-required="true" minlength="6" onkeyup="validatePassword()">
                  <label class="active" for="password">Password</label>
                  <span class="helper-text" id="usernameHelper"></span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12" id="passconfirm">
                  <input placeholder="Masukkan ulang Password anda" id="passwordConfirm" type="password" name="" required="" aria-required="true" onkeyup="validatePassword()">
                  <label class="active" id="lblPasswordConfirm" for="passwordConfirm">Ketik Ulang Password Anda</label>
                  <span class="helper-text" id="passwordHelper"></span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Masukan nomor HP anda" type="tel" name="nohp" class="validate" required="" aria-required="true" pattern="\d*" minlength="11" maxlength="13">
                  <label class="active" for="first_name">No Handphone</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="" id="first_name" type="date" class="active datepicker" name="lahirr" required="" aria-required="true">
                  <label class="active" for="first_name">Tanggal Lahir</label>
                </div>
              </div>
              <div id="modal1" class="modal">
                <div class="modal-content center-align">
                  <h5>Data yang dimasukkan tidak dapat diganti untuk saat ini, apakah anda sudah yakin dengan data yang anda isi ? <br>
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
                <a href="#modal1" class="modal-trigger"><button id="verifikasi" class="disabled col s12 btn btn-wangsit btn-large waves-effect wangsit-color">Validasi Akun</button></a>
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

    //set Numeric only
    $('#nim').keypress(function (e) {
      var regex = new RegExp("^[0-9]+$");
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
        return true;
      }
      e.preventDefault();
      return false;
    });

    //set Alphanumeric and _ only
    $('#username').keypress(function (e) {
      var regex = new RegExp("^[a-zA-Z0-9_]+$");
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
        return true;
      }
      e.preventDefault();
      return false;
    });

    //set Alphanumeric only
    $('#password').keypress(function (e) {
      var regex = new RegExp("^[a-zA-Z0-9]+$");
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
        return true;
      }
      e.preventDefault();
      return false;
    });

    //set Alphanumeric only
    $('#passwordConfirm').keypress(function (e) {
      var regex = new RegExp("^[a-zA-Z0-9]+$");
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
        return true;
      }
      e.preventDefault();
      return false;
    });

    //prevent Space
    // function avoidSpace(){
    //   var uname = $("#username").val();
    //   var temp = uname.split(' ').join('');
    //   $("#username").val(temp);
    // }
    
    // function buttonAppear(){
    //   var allinput = $('input').val();
    //   var pass = $("#password").val();
    //   var passconf = $("#passwordConfirm").val();
    //   console.log("test")
    //   if (allinput != '' && pass == passconf) {
    //     $("#verifikasi").removeClass("disabled");
    //   } else {
    //     $("#verifikasi").addClass("disabled");
    //   }
    // }

    function validatePassword(){
      var uname = $("#username").val();
      var pass = $("#password").val();
      var passconf = $("#passwordConfirm").val();
      if (uname != pass) {
        $("#usernameHelper").text("");
        if (pass == passconf) {
          $("#passwordHelper").text("Password Match!");
          $("#passwordHelper").css("color", "#4caf50");
          $("#verifikasi").removeClass("disabled");
        } else {
          $("#passwordHelper").text("Password isn't match!");
          $("#passwordHelper").css("color", "#f44336");
          $("#verifikasi").addClass("disabled");
        }
      } else {
        $("#usernameHelper").text("Username dengan Password tidak boleh sama!");
        $("#usernameHelper").css("color", "#f44336");
        $("#verifikasi").addClass("disabled");
      }
    };

    $(document).ready(function(){
      $("button").click(function(){
        alert("Background color = " + $("p").css("background-color"));
      });
    });

    $('.datepicker').datepicker({
      showClearBtn : true,
      format: 'yyyy-mm-dd',
      defaultDate : new Date("1991-01-01"),
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

