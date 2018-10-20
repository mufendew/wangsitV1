<!DOCTYPE html>

<html>

<head>

	<title>Wangsit Market</title>

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

	<div class="ui inverted vertical masthead center aligned segment">

		<!-- Nav -->

		<div class="ui inverted borderless stackable main menu segment">

			<div class="ui text container">

				<a href="<?php echo base_url();?>market" class="header item">

					<img class="logo" src="<?php echo base_url();?>assets/media/general/logo-white.png"> Wangsit<span style="color:#88d317"> Market</span>

				</a>

				<div class="right menu">

					<!-- Login True -->

					<!-- <a href="#" class="item disabled">Hello, Radeas!</a> -->

					<!-- Login True -->

					<div class="ui simple dropdown item">

						Menu

						<i class="dropdown icon"></i>

						<div class="menu">

							<!-- Log In False -->

							<a href="#" class="item" id="login">Sell Something!</a>
							<a href="<?php echo base_url();?>" class="item">Back To Landing Page</a>


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