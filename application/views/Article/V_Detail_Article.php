<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<title>Wangsit Article - <?php echo $detail->JUDUL;?></title>

	<!-- WYSIWYG -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">

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
							<div class="card" style="padding: 20px">
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
						<!-- KOMENTAR -->
						<div class="card-content">
							<ul class="collection">
								<div class="collection-item wangsit-color white-text" style="padding: 10px;">
									<div class="fontt"><b>Tanggapan</b></div>
								</div>
								<?php foreach ($detailcomment as $key) { ?>
									<li class="collection-item avatar">
										<img src="<?php echo $key->GAMBAR;?>" alt="" class="circle">
										<div>
											<div><b><?php echo $key->NAMA;?></b></div>
											<div><?php echo $key->USERNAME;?></div>
										</div>
										<p>
											<br>
											<?php echo $key->COMMENT;?>
											<br>
										</p>
										<p class="secondary-content" style="color: lightgray"><?php echo date_format(date_create($key->DATE_COMMENT),"d F Y");?></p>
										<?php if ($key->USERNAME == $_SESSION['DataProfile']['USERNAME']) { ?>
											<p class="secondary-content" style="color: lightgray">
												<br>
												<a href="<?php echo base_url();?>Article/My/deleteComment/<?php echo $detail->USERNAME;?>/<?php echo $vslug; ?>/<?php echo $key->ID_COMMENT;?>" class="btn-floating btn-small waves-effect waves-light red">
													<i class="material-icons">delete</i>
												</a>
											</p>
										<?php } ?>
									</li>
								<?php } ?>
								<!--  -->
								<li class="collection-item" style="padding: 0px">
									<form action="<?php echo base_url()?>Article/My/insertComment/<?php echo $detail->USERNAME;?>/<?php echo $vslug; ?>" method="POST">
										<input type="hidden" name="articleID" value="<?php echo $detail->ID_ARTICLE;?>">
										<?php echo $komen ?>	
									</form>
								</li>
							</ul>
						</div>
						<!-- KOMENTAR -->
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

						<?php foreach ($recent as $key) { ?>
							<a href="<?php echo base_url().$key->USERNAME."/".$key->SLUG; ?>" class="collection-item">
								<div class="black-text fontt" style="font-size: 16px;"><?php echo $key->JUDUL;?></div>
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
<script>
	$(document).ready(function() {
		$('#summernote').summernote('code', '');
	});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
</body>

</html>