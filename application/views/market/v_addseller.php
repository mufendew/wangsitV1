<!DOCTYPE html>

<html>

<head>

	<title>Sign Up | Wangsit Market</title>
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

	<script>

		$(document)

		.ready(function() {

			$('.ui.form')

			.form({

				fields: {

					name: {

						identifier  : 'name',

						rules: [

						{

							type   : 'empty',

							prompt : 'Please fill your name'

						}

						]

					},

					email: {

						identifier  : 'email',

						rules: [

						{

							type   : 'empty',

							prompt : 'Please fill your email'

						},

						{

							type   : 'email',

							prompt : 'Please enter a valid email'

						}

						]

					},

					password: {

						identifier  : 'password',

						rules: [

						{

							type   : 'empty',

							prompt : 'Please fill your password'

						},

						{

							type   : 'length[6]',

							prompt : 'Your password must be at least 6 characters'

						}

						]

					},

					phone: {

						identifier  : 'phone',

						rules: [

						{

							type   : 'empty',

							prompt : 'Please fill your phone number'

						}

						]

					}

				}

			})

			;

		})

		;

	</script>

</head>

<body>

	<div class="break"></div>

	<div class="ui middle aligned center aligned grid">

		<div class="column-signup">

			<h2 class="ui violet image header">

				<div class="content">Wangsit Market Add Seller</div>

			</h2>

			<form method="post" action="<?php echo base_url(). 'market/c_admin/addprocess'; ?>" class="ui large form">

				<div class="ui stacked segment">

					<div class="field">

						<div class="ui left icon input">

							<i class="user icon"></i>

							<input type="text" name="newfullname" placeholder="Full Name">

						</div>

					</div>

					<div class="field">

						<div class="ui left icon input">

							<i class="mail icon"></i>

							<input type="text" name="newemail" placeholder="Email Address">

						</div>

					</div>

					<div class="field">

						<div class="ui left icon input">

							<i class="lock icon"></i>

							<input type="password" name="newpassword" placeholder="Password">

						</div>

					</div>

					<div class="field">

						<div class="ui left icon input">

							<i class="call icon"></i>

							<input type="number" name="newphone" placeholder="Phone Number">

						</div>

					</div>

					<div class="ui fluid large violet submit button">Add Seller</div>

				</div>



				<div class="ui error message"></div>



			</form>



			<div class="ui message">

				<a style="color: #6e3667" href="<?php echo base_url();?>market/admin"><i class="arrow left icon"></i>Cancel</a> 

			</div>

		</div>

	</div>

</body>