

<!-- Dropdown Test -->
  <ul id="dropdown2" class="dropdown-content">
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



<div class="navbar-fixed">
	<nav class="z-depth-1 white nempel">
	  <div class="nav-wrapper white">
	   <div class="container">
		<a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only">
			<i class="material-icons icon-wangsit">menu</i>
		</a>

		<a href="<?php echo base_url(); ?>" class="brand-logo fontt"><img class="center-align" src="<?php echo base_url();?>asset/img/logooo.png" style="width: 140px; margin-top: 7px;" alt=""></a>
		<ul class="right hide-on-med-and-down" style="margin-right: -100px;">
			<li><a href="<?php echo base_url();?>academy"><b><i class="material-icons left">school</i>Academy</b></a></li>
			<li><a href="<?php echo base_url();?>article"><b><i class="material-icons left">book</i>Article</b></a></li>
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
</div>