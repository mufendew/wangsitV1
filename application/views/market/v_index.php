<head>
		<meta name="viewport" content="width=device-width">

</head>

		<!-- Text Header -->

		<div class="ui text container">

			<h2 class="header-control">Welcome to</h2>

			<h1 class="ui inverted header">Wangsit <span style="color: #88d317">Market</span>

				<div class="sub header">A marketplace made by KBMSI for KBMSI</div>

			</h1>

		</div>

	</div>



	<!-- Content Product -->

	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">KBMSI's Products</h1>

	</div>

	<div class="ui container">

		<div class="ui four column doubling grid gridz">

			<?php foreach ($products as $product):?> 

			<!-- Card Product Start -->

			<div class="column grid-item">

				<div class="ui fluid card dimmerz">

					<!-- Dimmer -->

					<div class="ui dimmer">

						<div class="content">

							<div class="center">

								<!-- Product Name -->

								<div class="header"><h3><?php echo ''.$product->product_name ?></h3></div>

								<br>

								<!-- Seller -->

								<span class="left floated" style="margin-left: 8px">

									<i class="ui user icon"></i>

									<?php echo ''.$product->name ?>

								</span>

								<br>

								<!-- Price -->

								<span class="left floated" style="margin-left: 8px">

									<i class="ui dollar icon"></i>

									<?php echo 'Rp'.$product->price ?>

								</span>

								<br><br>

								<!-- See More Button -->

								<a href="<?php echo base_url().'market/c_index/product/'.$product->product_id; ?>"><div class="ui inverted button">See More</div></a>

							</div>

						</div>

					</div>

					<!-- Product Image -->

					<div class="image">

						<img src="

						<?php 

							if(isset($product->product_img )){

								echo base_url().''.$product->product_img ;

							} else {

								echo base_url().'assets/media/uploads/products/default.png' ;

							}

						?>" class="ui medium image">

					</div>

				</div>

			</div>

			<!-- Card Product End  -->

			<?php endforeach; ?>

		</div>

	</div>





	<!-- Content Seller -->

	<!-- <div class="break"></div>

	<div class="ui horizontal divider">

		<h1 class="ui center aligned header header-control">Our Beloved Seller</h1>

	</div> -->



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

</html>



