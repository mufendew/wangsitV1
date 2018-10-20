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

					<a href="#" class="item disabled">Hello, Radea!</a>

					<!-- Login True -->

					<div class="ui simple dropdown item">

						Menu

						<i class="dropdown icon"></i>

						<div class="menu">

							<!-- Login True -->

							<a href="<?php echo base_url();?>market/dashboard" class="item">Dashboard</a>

							<a href="#" class="item">Log Out</a>

							<!-- Login True -->

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<!-- Content Dashboard -->

	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">Admin's Dashboard</h1>

	</div>



	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">StoreSI[Seller] Queue Products</h1>

	</div>

	<div class="ui container">

		<div class="ui vertical stripe quote segment segment-control">

			<div class="ui equal width stackable internally celled grid">

				<div class="center aligned row">

					<table class="ui unstackable table">

						<!-- Not -->

						

						<thead>

							<tr>

								<th>Product Name</th>

								<th>Description</th>

								<th>Price</th>

								<th>Image</th>

								<th>Action</th>

							</tr>

						</thead>

						<tbody>							

							<?php foreach ($productsnotacc as $product):?>

								<tr>

									<td><?php echo $product->product_name ?></td>

									<td>

										<?php echo $product->description ?>

									</td>

									<td><?php echo $product->price ?></td>

									<td>

										<img style="width: 100px" class="ui fluid image centered" src="<?php 

										if(isset($product->product_img )){

											echo base_url().''.$product->product_img ;

										} else {

											echo base_url().'assets/media/uploads/products/default.png' ;

										}

										?>">

									</td>

									<td>

										<div class="ui buttons">

											<!-- <button class="ui lime button">Approve</button> -->

											<?=anchor('market/c_admin/approvingproduct/'.$product->product_id.'/'.$user->id,

												'Approve',

												['class'=>'ui lime button']

												) ?>

												<div class="or"></div>

												<?=anchor('market/c_admin/editproduct/'.$product->product_id.'/'.$user->id,

													'Edit',

													['class'=>'ui blue button','onclick'=>'return confirm(\'Apakah anda yakin?\')']

													) ?>

												<div class="or"></div>

												<?=anchor('market/c_admin/deleteproduct/'.$product->product_id.'/'.$user->id,

													'Remove',

													['class'=>'ui plum button','onclick'=>'return confirm(\'Apakah anda yakin?\')']

													) ?>

											<!-- <button class="ui plum button" id="deleteproduct">Remove</button>

											<div class="ui basic modal" id="deleteproduct-modal">

												<div class="ui icon header">

													<i class="warning sign icon"></i>

													Remove This Quenued Product

												</div>

												<div class="content">

													<p>Are you sure want to remove this quenued product from Wangsit Market?</p>

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

								<?php endforeach; ?>

							</tbody>

							<tfoot class="full-width">

								<tr>

									<th colspan="5">

										<a id="addproduct">

											<div class="ui right floated small purple labeled icon button">

												<i class="add to cart icon"></i> Add Product

											</div>

										</a>

										<div id="addproduct-modal" class="ui small modal">

											<div class="header">Add your product</div>

											<div class="content">

												<?php 



												?>

												<form enctype="multipart/form-data" action="<?php echo base_url().'market/c_admin/addproduct/'.$user->id; ?>" method="post" class="ui form">



													<div class="field">

														<h5 class="ui left aligned header">Seller name</h5>

														<div class="ui left icon input">

															<i class="child icon"></i>

															<input type="text" name="sellernames" value="<?php echo $user->name ?>" disabled >

														</div>

													</div>



													<div class="field">

														<h5 class="ui left aligned header">Product Name</h5>

														<div class="ui left icon input">

															<i class="add icon"></i>

															<input type="text" name="namaProduk" placeholder="Product Name">

														</div>

													</div>	

													<div class="field">

														<h5 class="ui left aligned header">Description</h5>

														<textarea name="deskripsi" rows="2" placeholder="Tell about your product . . ."></textarea>

													</div>



													<div class="field">

														<h5 class="ui left aligned header">Price</h5>

														<div class="ui left icon input">

															<i class="dollar icon"></i>

															<input type="number" name="harga" placeholder="IDR . . . ">

														</div>

													</div>



													<div class="field">

														<h5 class="ui left aligned header">Image</h5>

														<div class="ui left icon input">

															<i class="image icon"></i>

															<input type="file" name="userfile" placeholder=". . . Unit">

														</div>

													</div>



													<button type="submit" class="ui right floated labeled icon primary button"><i class="save icon"></i>Save</button>

													<br>

													<br>







												</form>

											</div>

										</div>

									</th>

								</tr>

							</tfoot>

						</table>



					</div>

				</div>

			</div>

		</div>



		<div class="ui horizontal divider">

			<h1 class="ui center aligned header header-control">StoreSI[Seller] Approved Products</h1>

		</div>

		<div class="ui container">

			<div class="ui vertical stripe quote segment segment-control">

				<div class="ui equal width stackable internally celled grid">

					<div class="center aligned row">

						<table class="ui unstackable table">

							<thead>

								<tr>

									<th>Product Name</th>

									<th>Description</th>

									<th>Price</th>

									<th>Image</th>

									<th>Action</th>

								</tr>

							</thead>

							<tbody>

								<?php foreach ($productsacc as $product):?>

									<tr>

										<td><?php echo $product->product_name ?></td>

										<td>

											<?php echo $product->description ?>

										</td>

										<td><?php echo $product->price ?></td>

										<td>

											<img style="width: 100px" class="ui fluid image centered" src="<?php 

											if(isset($product->product_img )){

												echo base_url().''.$product->product_img ;

											} else {

												echo base_url().'assets/media/uploads/products/default.png' ;

											}

											?>">

										</td>

										<td>

											<!-- <button class="ui lime button">Queue This Product</button> -->

											<?=anchor('market/c_admin/queingproduct/'.$product->product_id.'/'.$user->id,

												'Queue This Product',

												['class'=>'ui lime button']

												) ?>



											</td>

										</tr>

									<?php endforeach; ?>

								</tbody>

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