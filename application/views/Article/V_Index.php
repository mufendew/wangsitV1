<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<title>BLOG</title>

	<?php $this->load->view('Fragment/Styling'); ?> 
	<style type="text/css">
		
.scrollbar-ngilang::-webkit-scrollbar {
    height: 5px;
}
 
.scrollbar-ngilang::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);     
    background: #666;    
}
 
.scrollbar-ngilang::-webkit-scrollbar-thumb {
	background: rgb(255,255, 255, 0.3);
}
  
	</style>
</head>



<?php $this->load->view('Fragment/Navbar'); ?> 

<body>
	<div class="container">
		<div class="section">
			<div class="row">
				<?php if (!isset($_SESSION['DataProfile']) || $_SESSION['DataProfile'] ==null ){ ?>
				<div class="col s12 l12">
				<?php } else { ?>
				<div class="col s12 l8">	
				<?php } ?>
					<div class="card">
						<ul class="tabs tabs-fixed-width wangsit-color white-text z-depth-1 scrollbar-ngilang">
							<li class="tab col s3 "><a class="<?php echo ($b==0 ? "active" : ""); ?>" target="_self" href="<?php echo base_url();?>article/"><b>Semua</b></a></li>
							<li class="tab col s3 "><a class="<?php echo ($b==1 ? "active" : ""); ?>" target="_self" href="<?php echo base_url();?>article/General"><b>General</b></a></li>
							<li class="tab col s3 "><a class="<?php echo ($b==2 ? "active" : ""); ?>" target="_self" href="<?php echo base_url();?>article/Akademik"><b>Akademik</b></a></li>
							<li class="tab col s3 "><a class="<?php echo ($b==3 ? "active" : ""); ?>" target="_self" href="<?php echo base_url();?>article/Review"><b>Review</b></a></li>
						</ul>	
					</div>

					<?php 

					if ($allArticle==null) { ?>
						
						<div class="card">
							<div class="card-content">
								Belum ada Article
							</div>
						</div>
					<?php
					}
					foreach ($allArticle as $key) { ?>

					<div class="card" style="margin-bottom: 0px;">		
						<div class="card-content" style="padding-bottom: 50px;">
							<div class="right grey-text"><?php echo date_format(date_create($key->TANGGAL),"d F Y");?></div>
							<div class="card-title" style="margin-bottom: 0px;"><b><?php echo $key->JUDUL;?></b></div>
							<div class="grey-text" style="margin-bottom: 10px;">By <?php echo $key->USERNAME;?></div>
							<div style="margin-bottom: 10px;">
								<p><?php echo $key->DESKRIPSI;?></p>
							</div>
							<div class="right">
								<a href="<?php echo base_url();?><?php echo $key->USERNAME;?>/<?php echo $key->SLUG;?>" class="btn wangsit-color">View More</a>
							</div>
						</div>
						
					</div>
					<?php } ?>
					<?php echo $pagination;?>
				</div>
				<?php if (isset($_SESSION['DataProfile'])){ ?>
					
				
				<div class="col l4 s12 hide-on-med-and-down">
					<div class="card">
					<a href="<?php echo base_url()."Article/My/post"; ?>" class="btn btn-large" style="width: 100%;"><i class="material-icons right">add</i>Add Article</a>
					</div>
					<div class="card">
						<div class="card-image" style="z-index: 0">
							<img src="<?php echo base_url();?>asset/img/bg-bawah.jpg" style="height: 120px;" alt="">
						</div>
						<div class="card-content" style="padding-bottom: 0px;">	
							<center>
							<div style="position: relative;">
								<img class="circle z-depth-3 materialboxed" src="<?php echo $_SESSION['DataProfile']['GAMBAR']; ?>" style="border: solid white; width: 100px; height: 100px; margin-top: -75px;  z-index: 10;">
							</div>
							</center>
							<!-- <div style="position: relative; width: 100%; margin-top: -30px">
									<i class="material-icons" style="margin-top: -15px; margin-left: -15px;">settings</i>
									<i class="material-icons" style="float: right; margin-top: -10px; margin-right: -15px;">edit</i>
							</div> -->
							<div class="center-align" style="margin-top: 20px;">
								<h5 class="font" style="font-size: 18px;"><b><?php echo $_SESSION['DataProfile']['USERNAME'] ?></b></h5>
								<h5 class="font grey-text" style="font-size: 14px;"><?php echo $_SESSION['DataProfile']['NAMA'] ?></h5>
								<h5 style="font-size: 14px"><?php echo $_SESSION['DataProfile']['NIM'] ?></h5>
							</div>



						</div>
						<div class="card-action" style="padding-bottom: 5px; margin-top: 20px;">
							<div class="row" style="margin-left: -20px; margin-right: -20px;">
								<div class="col s12 center-align">
									<i class="material-icons" style="font-size: 40px;">person</i>
									<div class="font">Angkatan <?php echo '20'.substr($_SESSION['DataProfile']['NIM'],0,2); ?></div>
								</div>
								<!-- <div class="col s4 center-align">
									<i class="material-icons" style="font-size: 40px;">description</i>
									<div class="font">10 Artikel</div>
								</div>
								<div class="col s4 center-align">
									<i class="material-icons" style="font-size: 40px;">filter_tilt_shift</i>
									<div class="font">4 Circle</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>





	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/materialize.js"></script>
	<script src="<?php echo base_url();?>asset/js/init.js"></script>
</body>

</html>