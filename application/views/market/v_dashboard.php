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

		<h1 class="ui center aligned header header-control">Radea's Dashboard</h1>

	</div>



	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">Profile</h1>

	</div>

	<div class="ui container">

		<div class="ui vertical stripe quote segment segment-control">

			<div class="ui equal width stackable internally celled grid">

				<div class="center aligned row">

					<div class="column">

						<img class="ui fluid image centered" src="<?php echo base_url();?>assets/media/general/map-marker.png">	

					</div>

					<div class="column">

						<h1 class="ui header">Store SI[Seller Name]</h1>

						<div class="ui divider"></div>

						<table class="ui definition table">

							<tbody>

								<tr>

									<td>Email</td>

									<td>abc@gmail.com</td>

								</tr>

								<tr>

									<td>Phone Number</td>

									<td>123456789</td>

								</tr>

								<tr>

									<td>LINE</td>

									<td>@pvw666f</td>

								</tr>

								<tr>

									<td>Instagram</td>

									<td>dramaojol.id</td>

								</tr>

								<tr>

									<td>Whatsapp</td>

									<td>-</td>

								</tr>

								<tr>

									<td>How to Order</td>

									<td>Just Contact Me</td>

								</tr>

							</tbody>

						</table>

						<br>

						<a class="lime fluid ui button" id="editprofile">Edit Profile</a>

						<div id="editprofile-modal" class="ui small modal">

							<div class="header">Edit Profile</div>

							<div class="content">

								<form action="#" method="post" class="ui form">

									<div class="field">

										<label>Name</label>

										<input type="text" name="sellername" placeholder="Name" value="StoreSI">

									</div>

									<div class="field">

										<label>Email</label>

										<input type="email" name="selleremail" placeholder="Email" value="abc@gmail.com">

									</div>

									<div class="field">

										<label>Phone Number</label>

										<input type="number" name="sellerphone" placeholder="Phone Number" value="123456789">

									</div>

									<div class="field">

										<label>LINE</label>

										<input type="text" name="sellerline" placeholder="LINE" value="@pvw666f">

									</div>

									<div class="field">

										<label>Instagram</label>

										<input type="text" name="sellerinsta" placeholder="Instagram" value="dramaojol.id">

									</div>

									<div class="field">

										<label>Whatsapp</label>

										<input type="number" name="sellerwa" placeholder="Whatsapp" value="-">

									</div>

									<div class="field">

										<label>How to Order</label>

										<textarea name="sellerhto" rows="3" placeholder="How to Order">Just Contact Me</textarea>

									</div>

									<div class="field">

										<label>Change Profile Picture</label>

										<div class="ui left icon input">

											<i class="image icon"></i>

											<input type="file" name="sellerpict">

										</div>

									</div>

									<button type="submit" class="ui fluid lime button">Edit</button>

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">Products</h1>

	</div>

	<div class="ui container">

		<div class="ui vertical stripe quote segment segment-control">

			<div class="ui equal width stackable internally celled grid">

				<div class="center aligned row">

					<table class="ui unstackable table">

						<thead>

							<tr>

								<th>Status</th>

								<th>Product Name</th>

								<th>Description</th>

								<th>Price</th>

								<th>Image</th>

								<th>Action</th>

							</tr>

						</thead>

						<tbody>

							<tr>

								<td>Approved</td>

								<td>Iphone X</td>

								<td>

									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

								</td>

								<td>Rp20.000.000</td>

								<td>

									<img style="width: 100px" class="ui fluid image centered" src="<?php echo base_url();?>assets/media/general/map-marker.png">

								</td>

								<td>

									<div class="ui buttons">

										<button class="ui lime button" id="editproduct">Edit</button>

										<div class="ui small modal" id="editproduct-modal" >

											<div class="header">Edit Product</div>

											<div class="content">

												<form action="#" method="post" class="ui form">

													<div class="field">

														<label>Product Name</label>

														<input type="text" name="productname" placeholder="Product Name" value="Iphone X">

													</div>

													<div class="field">

														<label>Description</label>

														<textarea name="productdesc" rows="4" placeholder="Description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>

													</div>

													<div class="field">

														<label>Price</label>

														<div class="ui labeled input">

															<label class="ui label">Rp</label>

															<input type="number" name="productprice" value="20000000">

														</div>

													</div>

													<div class="field">

														<label>Change Image</label>

														<div class="ui left icon input">

															<i class="image icon"></i>

															<input type="file" name="productimage">

														</div>

													</div>

													<button type="submit" class="ui fluid lime button">Edit</button>

												</form>

											</div>

										</div>

										<div class="or"></div>

										<button class="ui plum button" id="deleteproduct">Delete</button>

										<div class="ui basic modal" id="deleteproduct-modal">

											<div class="ui icon header">

												<i class="warning sign icon"></i>

												Delete Product

											</div>

											<div class="content">

												<p>Are you sure want to delete your product from Wangsit Market?</p>

											</div>

											<div class="actions">

												<div class="ui lime button">

													<i class="checkmark icon"></i>

													Yes

												</div>

											</div>

										</div>

									</div>

								</td>

							</tr>

						</tbody>

						<tfoot class="full-width">

							<tr>

								<th></th>

								<th colspan="5">

									<div class="ui right floated small purple labeled icon button" id="addproduct">

										<i class="add to cart icon"></i> Add Product

									</div>

									<div class="ui small modal" id="addproduct-modal" >

										<div class="header">Add New Product</div>

										<div class="content">

											<form action="#" method="post" class="ui form">

												<div class="field">

													<label>Product Name</label>

													<input type="text" name="productname" placeholder="Product Name">

												</div>

												<div class="field">

													<label>Description</label>

													<textarea name="description" rows="4" placeholder="Description"></textarea>

												</div>

												<div class="field">

													<label>Price</label>

													<div class="ui labeled input">

														<label class="ui label">Rp</label>

														<input type="number" name="price">

													</div>

												</div>

												<div class="field">

													<label>Upload Image</label>

													<div class="ui left icon input">

														<i class="image icon"></i>

														<input type="file" name="productimage">

													</div>

												</div>

												<button type="submit" class="ui fluid lime button">Add</button>

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