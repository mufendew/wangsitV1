<!DOCTYPE html>
<html>
<head>
	<title>wakwaw</title>
	<?php $this->load->view('Fragment/Styling'); ?>
	<link href="<?php echo base_url();?>asset/plugin/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection"/> 
</head>
<body>
<!-- Dropdown Test -->
  <ul id="dropdown2" class="dropdown-content">
    <li><a href="<?php echo base_url();?>Propil/Googlee/logout" class="wangsit-text"><i class="material-icons">exit_to_app</i>Log Out</a></li>
  </ul>
<!-- Dropdown Test -->

<div class="navbar-fixed">
	<nav class="z-depth-1 white">
	  <div class="nav-wrapper white">
	   <div class="container">

		<a href="#" class="brand-logo fontt"><img class="center-align" src="asset/img/logoo.png" style="width: 45px; " alt=""></a>
		<ul class="right hide-on-med-and-down" style="margin-right: -100px;">

			<li><a class="dropdown-trigger" href="#!" data-target="dropdown2"><b>admin</b><i class="material-icons right" style="margin-left: 10px;">arrow_drop_down</i></a></li>
		</ul>
		<div id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 30px">
		</div>
		</div>
	  </div>
	</nav>
</div>


	<div class="container">
		<div class="row">
			<div class="col s12">
				<div style="overflow-x: scroll; margin: 2px;">
				<table id="data-table-simple" class="striped" cellspacing="0" style="">
				  <thead>
					<tr>
					  <th>NO</th>
					  <th>NIM</th>
					  <th>NAMA</th>
					  <th>USERNAME</th>
					  <th>TGL LAHIR</th>
					  <th>HP</th>
					  <th style="width: 5px;">Detail</th>
					  <th style="width: 5px;">Edit</th>
					</tr>
				  </thead>
				  <tbody>
					<?php $i=1; foreach($mhs as $peserta) { ?>
                   	<tr>
                   		<td><?php echo $i; ?></td>
                        <td><?php echo $peserta->NIM; ?></td>
                        <td><?php echo $peserta->NAMA; ?></td>
                        <td><?php echo $peserta->USERNAME; ?></td>
                        <td><?php echo date_format(date_create($peserta->TTL),"d F Y"); ?></td>
                        <td><?php echo $peserta->HP; ?></td>
                       	<?php if ($peserta->STATUS==1) { ?>
                       		<td><a href="?deaktivasi=<?php echo $peserta->ID;?>" class="waves-effect waves-light green btn"><i class="material-icons">visibility</i></td>
                       	<?php } else {?>
                       		<td><a href="?aktivasi=<?php echo $peserta->ID;?>" class="waves-effect waves-light red btn"><i class="material-icons">visibility</i></td>
                        <?php } ?>
                        <td><a href="<?php echo base_url();?>admin/Wakwaw/edit/<?php echo $peserta->ID;?>" class="waves-effect waves-light blue btn"><i class="material-icons">edit</i></td>
					</tr>
					<?php $i++; } ?>
				  </tbody> 
				</table>
				</div>
			</div>
		</div>
	</div>
	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="<?php echo base_url();?>asset/js/materialize.js"></script>
	<script src="<?php echo base_url();?>asset/plugin/data-tables/js/jquery.dataTables.min.js"></script>
  	<script src="<?php echo base_url();?>asset/plugin/data-tables/js/data-tables.js"></script>
	<script src="<?php echo base_url();?>asset/js/init.js"></script>
							
</body>
</html>