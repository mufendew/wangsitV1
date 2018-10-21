<!DOCTYPE html>
<html lang="en">
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  	<title>Dashboard</title>

  	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.theme.default.css">
  	<?php $this->load->view('Fragment/Styling'); ?> 
</head>



<body>

<?php $this->load->view('Fragment/Navbar'); ?> 

<div class="container">
	<div class="section">
		<div class="row">
			<?php echo $belumAktivasi; ?>
			<div class="col l8 s12">
				<div class="card">
					<div class="card-content wangsit-color white-text" style="padding: 10px 30px 10px 15px;;">
				 		<div class="fontt"><b>Apps </b></div>
				 	</div>
					<div class="card-action">
						<div class="owl-carousel owl-theme">
						  <div class="item"><a href="https://ecomplaint.kbmsi.or.id/" target="_BLANK" style="margin: 0px;"><img src="<?php echo base_url();?>asset/img/pinjam-ruang.jpg" style="width: 100%; border-radius: 10px;"></a></div>
						  <div class="item"><a href="http://kbmsi.filkom.ub.ac.id" target="_BLANK" style="margin: 0px;"><img src="<?php echo base_url();?>asset/img/pinjam-ruangg.jpg" style="width: 100%; border-radius: 10px;"></a></div>
						  <div class="item"><a href="https://line.me/R/ti/p/%40hvu9898p" target="_BLANK" style="margin: 0px;"><img src="<?php echo base_url();?>asset/img/pinjam-ruanggg.jpg" style="width: 100%; border-radius: 10px;"></a></div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-content wangsit-color white-text" style="padding: 10px 30px 10px 15px;;">
				 		<div class="fontt"><b>Filkom Information</b></div>
				 	</div>
			
					<ul class="collection" style="margin-top: 0px;">

						<?php 

						foreach ($information as $key ) { ?>
							
						  <li class="collection-item">
							<div class="row" style="margin-bottom: 0px;">
								<div class="col s10 m11">
										<b><?php echo $key->nama ?></b>
										<br>
										<span class="grey-text"><?php echo $key->tanggal ?></span>	
								</div>
								<div class="col s2 m1" style="position: relative; top: 10px;">
									<a href="<?php echo $key->info ?>" target="_BLANK"><i class="material-icons">send</i></a>
								</div>
							</div>
						  </li>
						  <?php
							}
							?>
    				</ul>

					
				</div>
			</div>

			<div class="col l4 s12">
				<div class="card">
				<a href="<?php echo base_url()."Article/My/post"; ?>" class="btn btn-large" style="width: 100%;"><i class="material-icons right">add</i>Add Article</a>
				</div>
				<div class="card">
					<div class="card-image" style="z-index: 0">
						<img src="<?php echo base_url();?>asset/img/bg-bawah.jpg" style="height: 120px;" alt="">
					</div>
					<div class="card-content" style="padding-bottom: 0px;">	
						<center>
						<div style="position: relative;">
							<img class="circle z-depth-3 materialboxed" src="<?php echo $_SESSION['DataProfile']['GAMBAR']; ?>" style="border: solid white; width: 100px; height: 100px; margin-top: -75px;  z-index: 10;">
						</div>
						</center>
						<!-- <div style="position: relative; width: 100%; margin-top: -30px">
								<i class="material-icons" style="margin-top: -15px; margin-left: -15px;">settings</i>
								<i class="material-icons" style="float: right; margin-top: -10px; margin-right: -15px;">edit</i>
						</div> -->
						<div class="center-align" style="margin-top: 20px;">
							<h5 class="font" style="font-size: 18px;"><b><?php echo $_SESSION['DataProfile']['USERNAME'] ?></b></h5>
							<h5 class="font grey-text" style="font-size: 14px;"><?php echo $_SESSION['DataProfile']['NAMA'] ?></h5>
							<h5 style="font-size: 14px"><?php echo $_SESSION['DataProfile']['NIM'] ?></h5>
						</div>



					</div>
					<div class="card-action" style="padding-bottom: 5px; margin-top: 20px;">
						<div class="row" style="margin-left: -20px; margin-right: -20px;">
							<div class="col s12 center-align">
								<i class="material-icons" style="font-size: 40px;">person</i>
								<div class="font">Angkatan <?php echo '20'.substr($_SESSION['DataProfile']['NIM'],0,2); ?></div>
							</div>
							<!-- <div class="col s4 center-align">
								<i class="material-icons" style="font-size: 40px;">description</i>
								<div class="font">10 Artikel</div>
							</div>
							<div class="col s4 center-align">
								<i class="material-icons" style="font-size: 40px;">filter_tilt_shift</i>
								<div class="font">4 Circle</div>
							</div> -->
						</div>
					</div>
				</div>
				<div class="card">
				 	<div class="card-content wangsit-color white-text" style="padding: 10px 30px 10px 15px;;">
				 		<div class="fontt"><b>Happy Birthday to</b></div>
				 	</div>
					<ul class="collection" style="margin-top: 0px;">
						<?php if ($sbds==null) { ?>
						 <li class="collection-item center-align">
							Tidak ada yang berulang tahun hari ini
						  </li>	
						<?php
						}
						foreach ($sbds as $sbd) { 
						?>
						  <li class="collection-item">
							<span style="position: absolute;">
								<img src="<?php echo $sbd->GAMBAR;?>" class="circle" width="42px;" style="margin-left: -10px;" alt="">
							</span>
							<div style="margin-left: 45px;" class="wangsit-text">
								<b><?php echo $sbd->NAMA; ?></b>
								<br>
								<div class="grey-text"><?php echo $sbd->TTL ?></div></div>
						  </li>
						<?php } ?>
    				</ul>
				</div>
			</div>
		</div>
	</div>
</div>



 
 
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/materialize.js"></script>
  
  <script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
  <script>
  	$(document).ready(function(){
	  $('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		responsiveClass: true,
		responsive: {
		  0: {
			items: 1,
			nav: true
		  },
		  600: {
			items: 3,
			nav: false
		  },
		  1000: {
			items: 3,
			nav: false,
			loop: false,
			margin: 10
		  }
		}
	  });
	});
	</script>
	<script src="<?php echo base_url();?>asset/js/init.js"></script>
	</body>
</html>

