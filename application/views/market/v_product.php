<!DOCTYPE html>
<html>
<head>
	<title>Wangsit Market</title>
	<meta name="viewport" content="width=device-width">

	<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>favicon.png"/>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<script src="<?php echo base_url();?>assets/semantic/dist/semantic.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</head>
<body>
	<!-- Header -->
	<div class="ui inverted vertical center aligned segment">
		<!-- Nav -->
		<div class="ui inverted borderless stackable main menu segment">
			<div class="ui text container">
				<a href="<?php echo base_url();?>market" class="header item">
					<img class="logo" src="<?php echo base_url();?>assets/media/general/logo-white.png"> Wangsit<span style="color:#88d317"> Market</span>
				</a>
				<div class="right menu">
					<!-- Login True -->
					<!-- <a href="#" class="item disabled">Hello, Radea!</a> -->
					<!-- Login True -->
					<div class="ui simple dropdown item">
						Menu
						<i class="dropdown icon"></i>
						<div class="menu">
							<!-- Log In False -->
							<a href="#" class="item" id="login">Sell Something!</a>
							<div id="login-modal" class="ui small modal">
								<div class="header">Already have account?</div>
								<div class="content">
									<form action="#" method="post" class="ui form">
										<div class="field">
											<label>Email</label>
											<input type="text" name="email" placeholder="Email">
										</div>
										<div class="field">
											<label>Password</label>
											<input type="password" name="password" placeholder="Password">
										</div>
										<button type="submit" class="ui fluid lime button">Log In</button>
									</form>
								</div>
								<div class="content">
									Want to make account?
									<button class="ui fluid plum button" id="contactus" href="">Contact Us</button>
								</div>
							</div>
							<div id="contactus-modal" class="ui basic modal">
								<div class="ui icon header">
									<h1>If you want to make an account, kindly contact us at Wangsit Official Line Account</h1>
									<h2>@evw3381j</h2>
								</div>
								<div class="ui center aligned segment content">
									<h5>Sincerely,</h5>
									<h5>Wangsit Development Team</h5>
								</div>
							</div>
							<!-- Login True -->
							<!-- <a href="<?php echo base_url();?>market/dashboard" class="item">Dashboard</a>
							<a href="#" class="item">Log Out</a> -->
							<!-- Login True -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Product -->
	<div class="ui horizontal divider">
		<h1 class="ui center aligned header header-control">Detail Product</h1>
	</div>
	<div class="ui container">
		<div class="ui vertical stripe quote segment segment-control">
			<div class="ui equal width stackable internally celled grid">
				<div class="center aligned row">
					<div class="column">
						<img class="ui fluid image centered" src="<?php 
							if(isset($product->product_img )){
								echo base_url().''.$product->product_img ;
							} else {
								echo base_url().'assets/media/uploads/products/default.png' ;
							}
						?>">	
					</div>
					<div class="column">
						<h1 class="ui header"><?php echo $product->product_name ?></h1>
						<div class="ui divider"></div>
						<h5 class="ui header">Description</h5>
						<div class="ui message">
							<?php echo nl2br($product->description) ?>
						</div>
						<table class="ui definition table">
							<tbody>
								<tr>
									<td>Price</td>
									<td><?php echo 'Rp'.$product->price ?></td>
								</tr>
							</tbody>
						</table>
						<br>
						<a class="massive lime fluid ui button" id="sellerinfo">Find Seller!</a>
						<div id="sellerinfo-modal" class="ui small modal">
							<div class="header">Find <?php echo "".$product->name; ?> Now!</div>
							<div class="content">
								<img class="ui medium image centered" src="<?php 
							if(isset($seller->pict )){
								echo base_url().''.$seller->pict ;
							} else {
								echo base_url().'assets/media/uploads/sellers/default.png' ;
							}
						?>">
							</div>
							<div class="content">
								<table class="ui definition table">
									<tbody>
										<tr>
											<td>Email</td>
											<td><?php echo $product->email ?></td>
										</tr>
										<tr>
											<td>Phone Number</td>
											<td><?php echo $product->phone ?></td>
										</tr>
										<tr>
											<td>Whatsapp</td>
											<td><?php echo $product->whatsapp ?></td>
										</tr>
										<tr>
											<td>Line</td>
											<td><?php echo $product->line ?></td>
										</tr>
										<tr>
											<td>Instagram</td>
											<td><?php echo $product->instagram ?></td>
										</tr>
										<tr>
											<td>How to Order</td>
											<td><?php echo nl2br($product->how_to_order) ?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="break"></div>
	<div class="ui inverted vertical footer segment">
		<div class="ui container">
			<div class="ui inverted divided equal height stackable grid">
				<div class="three wide column">
					<h4 class="ui inverted header">Wangsit Market</h4>
					<!-- <h4 class="ui inverted header">Find Us</h4>
					<div class="ui inverted link list">
						<a href="#" class="item">
							<i class="facebook icon"></i>
							Facebook
						</a>
						<a href="#" class="item">
							<i class="twitter icon"></i>
							Twitter
						</a>
						<a href="#" class="item">
							<i class="instagram icon"></i>
							Instagram
						</a>
						<a href="#" class="item">
							<i class="youtube icon"></i>
							Youtube 
						</a>
					</div> -->
				</div>
				<div class="seven wide column">
					<!-- <h4 class="ui inverted header">Wangsit Market</h4> -->
					<p>Developed with <i class="heart icon"></i> by <a href="http://kbmsi.filkom.ub.ac.id/lembaga/emsi/p2s/"><b style="color:#88d317">P2S EMSI 2017</b></a></p>
				</div>
			</div>
		</div>
	</div>
</body>