<!DOCTYPE html>

<html>

<head>

	<title>Wangsit Market</title>

	<link rel="icon" type="image/x-icon" href="<?php echo base_url();?>favicon.png"/>
	<meta name="viewport" content="width=device-width">

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

					<a href="#" class="item disabled">Hello, Admin!</a>

					<!-- Login True -->

					<!-- <div class="ui simple dropdown item">

						Menu

						<i class="dropdown icon"></i>

						<div class="menu"> -->

							<!-- Login True -->

							<!-- <a href="<?php echo base_url();?>market/dashboard" class="item">Dashboard</a>

							<a href="#" class="item">Log Out</a> -->

							<!-- Login True -->

						<!-- </div>

					</div> -->

				</div>

			</div>

		</div>

	</div>



	<!-- Content Dashboard -->

	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">Admin's Dashboard</h1>

	</div>



	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">Sellers</h1>

	</div>

	<div class="ui container">

		<div class="ui vertical stripe quote segment segment-control">

			<div class="ui equal width stackable internally celled grid">

				<div class="center aligned row">

					<table class="ui unstackable table">

						<thead>

							<tr>

								<th>Seller ID</th>

								<th>Seller Name</th>

								<th>Email</th>

								<th>Phone Number</th>

								<th>Action</th>

							</tr>

						</thead>

						<tbody>

							<?php

							foreach ($users as $user): 

								if ($user->id > 1) {?> 

							<!-- Penjual -->

							<tr>

								<td><?php echo $user->id; ?></td>

								<td><?php echo $user->name ?></td>

								<td><?php echo $user->email ?></td>

								<td><?php echo $user->phone ?></td>

								<td>

									<div class="ui buttons">

										<?=anchor('market/c_admin/manageseller/'.$user->id,

											'Manage',

											['class'=>'ui lime button']) ?>



											<div class="or">

												

											</div>

											<?=anchor('market/c_admin/editseller/'.$user->id,

												'Edit',

												['class'=>'ui blue button']) ?>											

												<div class="or">

													

												</div>

												<?=anchor('market/c_admin/deleteprocess/'.$user->id,

													'Remove',

													['class'=>'ui plum button','onclick'=>'return confirm(\'Apakah anda yakin?\')']

													) ?>

											<!-- <button class="ui plum button removeseller">Remove</button>

											<div class="ui basic modal removeseller-modal">

												<div class="ui icon header">

													<i class="warning sign icon"></i>

													Remove Seller

												</div>

												<div class="content">

													<p>Are you sure want to remove StoreSI[Seller] from Wangsit Market?</p>

												</div>

												<div class="actions">

													<div class="ui lime button">

														<i class="checkmark icon"></i>

														Yes

													</div>

												</div>

											</div> -->

										</div>

									</td>

								</tr>

								<!-- Penjual -->

							<?php 

							}

							endforeach; ?>

						</tbody>

						<tfoot class="full-width">

							<tr>

								<th colspan="5">

									<a href="<?php echo base_url();?>market/admin/addseller">

										<div class="ui right floated small purple labeled icon button">

											<i class="add to cart icon"></i> Add Seller

										</div>

									</a>

								</th>

							</tr>

						</tfoot>

					</table>

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