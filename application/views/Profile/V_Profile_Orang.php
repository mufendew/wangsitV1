<!DOCTYPE html>
<html lang="en">
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  	<title>WANGSIT</title>
  	
  	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/owl.theme.default.css">
	<?php $this->load->view('Fragment/Styling'); ?>  
</head>

<!-- Dropdown Test -->
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="<?php echo base_url();?>" class="wangsit-text"><b>Home</b></a></li>
    <li><a href="<?php echo base_url().$_SESSION['DataProfile']['USERNAME']; ?>" class="wangsit-text">Profil</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="<?php echo base_url().'profile/Me'; ?>" class="wangsit-text">Dashboard</a></li>
    <!-- <li><a href="#!" class="wangsit-text"><i class="material-icons">settings</i>Settings</a></li> -->
    <li><a href="<?php echo base_url();?>Propil/Googlee/logout" class="wangsit-text"><i class="material-icons">exit_to_app</i>Log Out</a></li>
  </ul>
    <ul id="dropdown3" class="dropdown-content">
    <li><a href="<?php echo base_url();?>" class="wangsit-text"><b>Home</b></a></li>
    <li><a href="<?php echo base_url().$_SESSION['DataProfile']['USERNAME']; ?>" class="wangsit-text">Profil</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="<?php echo base_url().'profile/Me'; ?>" class="wangsit-text">Dashboard</a></li>
    <!-- <li><a href="#!" class="wangsit-text"><i class="material-icons">settings</i>Settings</a></li> -->
    <li><a href="<?php echo base_url();?>Propil/Googlee/logout" class="wangsit-text"><i class="material-icons">exit_to_app</i>Log Out</a></li>
  </ul>
<!-- Dropdown Test -->

<!-- Sidenav Test -->
<?php if (isset($_SESSION['DataProfile'])) {
?>


<ul id="slide-out" class="sidenav">
	<li>
		<div class="user-view">
			<div class="background">
				<img src="<?php echo base_url(); ?>asset/img/bg-bawah.jpg">
			</div>
			<a href=""><img class="circle" src="<?php echo $_SESSION['DataProfile']['GAMBAR'] ?>"></a>
			<span class="white-text name"><b><?php echo $_SESSION['DataProfile']['USERNAME'] ?></b></span>
			<span class="white-text email"><?php echo $_SESSION['DataProfile']['NAMA'] ?></span>
		</div>
	</li>
	<li><a href="<?php echo base_url();?>academy" class="wangsit-text"><i class="material-icons">school</i><b>Academy</b></a></li>
	<li><a href="<?php echo base_url();?>article" class="wangsit-text"><i class="material-icons">book</i><b>Article</b></a></li>
	<!-- <li><a href="#!" class="wangsit-text"><i class="material-icons">shopping_cart</i><b>Market</b></a></li> -->
	<!-- <li class="divider" tabindex="-1"></li> -->
	<li><a href="<?php echo base_url();?>Article/My/Post" class="wangsit-text"><i class="material-icons">edit</i><b>Write Your Article</b></a></li>
	<!-- <li><a href="#!" class="wangsit-text"><i class="material-icons">work</i>Portfolio</a></li> -->
	<li class="divider" tabindex="-1"></li>
	<li><a href="<?php echo base_url();?>/dashboard" class="wangsit-text"><i class="material-icons">computer</i>Dashboard</a></li>
	<li><a href="<?php echo base_url(). $_SESSION['DataProfile']['USERNAME'];?>" class="wangsit-text"><i class="material-icons">person</i>Profile</a></li>
	<li class="divider"></li>
	<!-- <li><a href="#!" class="wangsit-text"><i class="material-icons">settings</i>Setting</a></li> -->
	<li><a href="<?php echo base_url();?>Propil/Googlee/logout" class="wangsit-text"><i class="material-icons">exit_to_app</i>Log Out</a></li>
</ul>
<!-- Sidenav Test -->
<?php } else { ?>

<ul id="slide-out" class="sidenav">
	<li><a href="<?php echo base_url();?>academy" class="wangsit-text"><i class="material-icons">school</i><b>Academy</b></a></li>
	<li><a href="<?php echo base_url();?>article" class="wangsit-text"><i class="material-icons">book</i><b>Article</b></a></li>
	<li class="divider" tabindex="-1"></li>
	<li><a class="btn btn-small" href="<?php echo base_url();?>/login">Login</a></li>
</ul>


<?php } ?>

<body>
<nav class="z-depth-0 transparent" style="position: absolute; z-index: 100">
	  <div class="nav-wrapper" style="background-color: rgba(0,0,0,0)!important;">
	   <div class="container">
		<a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only">
			<i class="material-icons white-text">menu</i>
		</a>

		<a href="<?php echo base_url(); ?>" class="brand-logo fontt"><img class="center-align" src="<?php echo base_url();?>asset/img/logoooo.png" style="width: 140px; margin-top: 7px;" alt=""></a>
		<ul class="right hide-on-med-and-down" style="margin-right: -100px;">
			<li><a class="white-text" href="<?php echo base_url();?>/academy"><b><i class="material-icons left">school</i>Academy</b></a></li>
			<li><a class="white-text" href="<?php echo base_url();?>/article"><b><i class="material-icons left">book</i>Article</b></a></li>
			<?php if (isset($_SESSION['DataProfile'])) { ?>
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown3"><img class="circle" src="<?php echo $_SESSION['DataProfile']['GAMBAR'] ?>" style="width: 40px; vertical-align:middle; margin-right: 10px; margin-top: -5px" alt=""><b><?php echo ucfirst($_SESSION['DataProfile']['USERNAME']); ?></b><i class="material-icons right" style="margin-left: 10px;">arrow_drop_down</i></a></li>
			<?php } else { ?>
				<li><a class="btn btn-small" href="<?php echo base_url();?>/login">Login</a></li>
			<?php } ?>

		</ul>
		<div id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 30px">
		</div>
		</div>
	  </div>
	</nav>


<div class="parallax-container" style="height: 450px;">
  		<div class="container" style="margin-top: 80px;">
  			<div class="center">
  				<img src="<?php echo $user->GAMBAR;?>" style="width: 100px;" class="circle center-align">

  			</div>
  			<h2 class="header center white-text logoo"><b><?php echo $user->NAMA; ?></b></h2>
    		<div class="row center">
      		<h5 class="header col s12 white-text">- <?php echo $user->USERNAME; ?> -</h5>
    		</div>
    		<!-- <div class="row center">
      			<a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light cyan">Get Started</a>
    		</div> -->
  		</div>
	<div class="parallax"><img src="<?php echo base_url();?>asset/img/bg.jpg"></div>
</div>




<div id="wakwaw">

	<nav class="z-depth-1 white pushpin-demo-nav" role="navigation" data-target="wakwaw" style="z-index: 11">
	  <div class="nav-wrapper white">
	   <div class="container">
		<a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only">
			<i class="material-icons icon-wangsit">menu</i>
		</a>

		<a href="<?php echo base_url(); ?>" class="brand-logo fontt"><img class="center-align" src="<?php echo base_url();?>asset/img/logooo.png" style="width: 140px; margin-top: 7px;" alt=""></a>
		<ul class="right hide-on-med-and-down" style="margin-right: -100px;">
			<li><a href="<?php echo base_url();?>/academy"><b><i class="material-icons left">school</i>Academy</b></a></li>
			<li><a href="<?php echo base_url();?>/article"><b><i class="material-icons left">book</i>Article</b></a></li>
			<?php if (isset($_SESSION['DataProfile'])) { ?>
			<li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><img class="circle" src="<?php echo $_SESSION['DataProfile']['GAMBAR'] ?>" style="width: 40px; vertical-align:middle; margin-right: 10px; margin-top: -5px" alt=""><b><?php echo ucfirst($_SESSION['DataProfile']['USERNAME']); ?></b><i class="material-icons right" style="margin-left: 10px;">arrow_drop_down</i></a></li>
			<?php } else { ?>
				<li><a class="btn btn-small" href="<?php echo base_url();?>/login">Login</a></li>
			<?php } ?>

		</ul>
		<div id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 30px">
		</div>
		</div>
	  </div>
	</nav>

<div class="container">
	<div class="section">
		<div class="row">
			<div class="col l8 s12">
				<div class="card">
					<div class="card-content wangsit-color white-text" style="padding: 10px 30px 10px 15px;;">
				 		<div class="fontt"><b>Article</b></div>
				 	</div>
				</div>

					<?php
					if ($Article==null) { ?>
						
						<div class="card">
							<div class="card-content">
								Belum ada Article
							</div>
						</div>
					<?php
					}
					foreach ($Article as $key) { ?>
					<div class="card" style="margin-bottom: 0px;">		
						<div class="card-content" style="padding-bottom: 50px;">
							<div class="right grey-text"><?php echo date_format(date_create($key->TANGGAL),"d F Y");?></div>
							<div class="card-title" style="margin-bottom: 0px;"><b><?php echo $key->JUDUL;?></b></div>
							<div class="grey-text" style="margin-bottom: 10px;">By <?php echo $key->USERNAME;?></div>
							<div style="margin-bottom: 10px;">
								<p><?php echo $key->DESKRIPSI;?></p>
							</div>
							<div class="right">
								<a href="<?php echo base_url();?><?php echo $key->USERNAME;?>/<?php echo $key->SLUG;?>" class="btn wangsit-color">View More</a>
							</div>
						</div>
						
					</div>
				<?php } ?>
				<?php echo $pagination;?>
			</div>
			<div class="col l4 s12">
				<?php echo $canEdit; ?>
				<div class="card">
					<div class="card-image" style="z-index: 0">
						<img src="<?php echo base_url();?>asset/img/bg-bawah.jpg" style="height: 120px;" alt="">
					</div>
					<div class="card-content" style="padding-bottom: 0px;">	
						<center>
						<div style="position: relative;">
							<img class="circle z-depth-3 materialboxed" src="<?php echo $user->GAMBAR; ?>" style="border: solid white; width: 100px; height: 100px; margin-top: -75px;  z-index: 10;">
						</div>
						</center>
						<div class="center-align" style="margin-top: 20px;">
							<h5 class="font" style="font-size: 18px;"><b><?php echo $user->USERNAME; ?></b></h5>
							<h5 class="font grey-text" style="font-size: 14px;"><?php echo $user->NAMA; ?></h5>
							<h5 style="font-size: 14px"><?php echo $user->NIM; ?></h5>
						</div>
					</div>
					<div class="card-action" style="padding-bottom: 5px; margin-top: 20px;">
						<div class="row" style="margin-left: -20px; margin-right: -20px;">
							<div class="col s12 center-align">
								<i class="material-icons" style="font-size: 40px;">person</i>
								<div class="font">Angkatan <?php echo '20'.substr($user->NIM,0,2); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</div>
 
 
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>asset/js/materialize.js"></script>
  <script type="text/javascript">
  	  $('.pushpin-demo-nav').each(function() {
      var $this = $(this);
      var $target = $('#' + $(this).attr('data-target'));
      $this.pushpin({
          top: $target.offset().top,
          bottom: $target.offset().top + $target.outerHeight() - $this.height()
      });
    });
  </script>
  <script src="<?php echo base_url();?>asset/js/init.js"></script>
  <script>
            
	</script>
	</body>
</html>

