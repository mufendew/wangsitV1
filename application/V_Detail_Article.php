<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<title>BLOG MORE</title>

	<?php $this->load->view('Fragment/Styling'); ?>
</head>



<body>
	<?php $this->load->view('Fragment/Navbar'); ?>
	<div class="container">
		<div class="section">
			<div class="row">
				<div class="col l9 s12">
					<div class="card">
						<div class="card-content " style="padding-bottom: 0px">
							<div>
								<img class="circle" src="<?php echo $detail->GAMBAR;?>" style="width: 60px; margin-right: 10px; vertical-align: middle; position: relative; display: inline-block;" alt="">
								<div style="position: relative; display: inline-block; top : 15px; width: 100%:;">
									<div><b><?php echo $detail->NAMA;?></b></div>
									<div><?php echo $detail->USERNAME;?></div>

								</div>

								<div class="right hide-on-small-only" style="margin-top: 20px;"><?php echo date_format(date_create($detail->TANGGAL),"d F Y");?></div>
							</div>
						</div>
						<div class="card-content" style="padding-bottom: 10px; padding-top: 10px; margin-top: 30px;">

							<div class="card-title fontt"><b><?php echo $detail->JUDUL;?></b></div>
							<div class="hide-on-med-and-up"><?php echo date_format(date_create($detail->TANGGAL),"d F Y");?></div>
							<br>
							<?php echo $detail->CONTENT;?>
							<br>
							<?php echo $edit; ?>
						</div>

					</div>
				</div>
				<div class="col l3 s12">
					<!-- 
					<div class="card">
					<a href="" class="btn btn-large purple" style="width: 100%;">Beranda</a>
					</div> -->
					<div class="card">
						<div class="collection">
							<div class="collection-item wangsit-color white-text" style="padding: 10px 30px 10px 15px;">
								<div class="fontt"><b>New Posts</b></div>
							</div>

							<?php 
							foreach ($recent as $key) {
														?>
							<a href="<?php echo base_url().$key->USERNAME."/".$key->SLUG; ?>" class="collection-item">
								<div class="black-text fontt" style="font-size: 16px;"><?php echo $key->JUDUL;?>
								</div>
								<div class="row" style="margin-top: 10px; margin-bottom: 0px;">
									<div class="col s12">
										<div class="black-text">By <b><?php echo $key->USERNAME;?></b></div>
									</div>
									<div class="col s12" style="margin-bottom: 0px;">
										<div class="grey-text"><?php echo date_format(date_create($key->TANGGAL),"d F Y");?></div>		
									</div>
								</div>
							</a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/materialize.js"></script>
	<script src="<?php echo base_url();?>asset/js/init.js"></script>
</body>

</html>