<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<title>KBMSI AUTH</title>

	<!-- WYSIWYG -->
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">

	<?php $this->load->view('Fragment/Styling'); ?> 
</head>

<?php $this->load->view('Fragment/Navbar'); ?> 

<body>
	<div class="container">
		<div class="section">
			<div class="row">
				<form method="POST">
				<div class="col s12">
					<div class="card">
						<div class="card-content" style="padding-bottom: 0px;">
							<div class="card-title">
								<b>Edit Post</b>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="input-field col s12">
					                <input disabled value="<?php echo $JUDUL;?>" id="disabled" type="text" class="validate" >
					        		<label class="active" for="disabled">Judul</label>
					            </div>

								<div class="input-field col s12">
									<select name="katagori">
									  <option value="Default" disabled >Choose your option</option>
									  <option value="General" selected>General</option>
									  <option value="Personal">Personal</option>
									  <option value="Akademik">Akademik</option>
									</select>
									<label>Katagori</label>
							  	</div>
							  	<div class="input-field col s12">
					            	<textarea name="desc" placeholder="Deskripsi yang akan di tampilkan di list article" id="textarea2" class="materialize-textarea" data-length="255" value=""><?php echo $DESC;?></textarea>
					            	<label for="textarea2">Description</label>
					          	</div>
							  	<div class="col s12">
							  		<label>Sharing Option :</label>	
							  	</div>
							  	
							  	<div class="input-field col s12">
							  		  <div class="switch">
									    <label>
									      Public
									      <input name="opsi" type="checkbox" value="PRVT" <?php echo $SHAREABLE;?>>
									      <span class="lever"></span>
									      Private
									    </label>
									  </div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12">
						<textarea name="artikel" id="summernote"></textarea>
				</div>
				<div id="modal1" class="modal">
	              <div class="modal-content center-align">
	                <h5>Data yang sudah di insert tidak dapat di ganti untuk saat ini, Apakah anda sudah yakin dengan data yang anda isi ? <br>
	                </h5>
	                <div class="row" style="margin-top: 20px;">
	                  <div class="col s6">
	                    <a style="width: 100%" class=" btn btn-wangsit btn-large waves-effect red modal-close">Tidak</a>
	                  </div>
	                  <div class="col s6">
	                    <button style="width: 100%" type="submit" name="btn_login" class=" btn btn-wangsit btn-large waves-effect green modal-close">Ya</button>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div id="modal1" class="modal">
	              <div class="modal-content center-align">
	                <h5>Data yang sudah di insert tidak dapat di ganti untuk saat ini, Apakah anda sudah yakin dengan data yang anda isi ? <br>
	                </h5>
	                <div class="row" style="margin-top: 20px;">
	                  <div class="col s6">
	                    <a style="width: 100%" class=" btn btn-wangsit btn-large waves-effect red modal-close">Tidak</a>
	                  </div>
	                  <div class="col s6">
	                    <button style="width: 100%" type="submit" name="btn_login" class=" btn btn-wangsit btn-large waves-effect green modal-close">Ya</button>
	                  </div>
	                </div>
	              </div>
	            </div>
	           	<div id="modal2" class="modal">
	              <div class="modal-content center-align">
	                <h5>Apakah anda yakin akan menghapus Article berjudul <b><?php echo $JUDUL;?></b> ? <br>
	                </h5>
	                <div class="row" style="margin-top: 20px;">
	                  <div class="col s6">
	                    <a style="width: 100%" class=" btn btn-wangsit btn-large waves-effect red modal-close">Tidak</a>
	                  </div>
	                  <div class="col s6">
	                    <a style="width: 100%" href="<?php echo base_url();?>article/My/delete/<?php echo $slug; ?>" class=" btn btn-wangsit btn-large waves-effect green modal-close">Ya</a>
	                  </div>
	                </div>
	              </div>
	            </div>
				<div class="col s12 center-align" style="margin-top: 10px;">
					 <a href="#modal2" class="modal-trigger"><button class="btn btn-wangsit btn-large waves-effect red">Delete Post <i class="material-icons right">delete</i></button></a>
					 <a href="#modal1" class="modal-trigger"><button class="btn btn-wangsit btn-large waves-effect wangsit-color">UPDATE <i class="material-icons right">send</i></button></a>
				</div>
			</form>
			</div>
		</div>

		
	</div>




	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script>
		$(document).ready(function() {
  			$('#summernote').summernote('code', '<?php echo $ARTIKEL;?>');
		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
	<script src="<?php echo base_url();?>asset/js/materialize.js"></script>
	<script src="<?php echo base_url();?>asset/js/init.js"></script>
</body>

</html>