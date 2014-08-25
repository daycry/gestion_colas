<html>
<head>
<title>Registro</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf8' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src='<?php echo base_url_static_f();?>js/jquery-ui-timepicker-addon.js'></script>
<script src='<?php echo base_url_static_f();?>bootstrap/js/bootstrap.js'></script>
<link href='<?php echo base_url_static_f();?>bootstrap/css/bootstrap.css' rel="stylesheet">
<link href='<?php echo base_url_static_f();?>bootstrap/css/bootstrap-responsive.css' rel="stylesheet">
<script src='<?php echo base_url_static_f();?>js/jquery.tablesorter.min.js'></script>
<link href='<?php echo base_url_static_f();?>css/personal.css' rel="stylesheet">
<script src='<?php echo base_url_static_f();?>js/funciones.js'></script>
<script>
var urlupdate = '<?php echo site_url("gestor/editaPeticio"); ?>';
var urlVisatG = '<?php echo site_url("gestor/actualizaLista"); ?>';
var urlVisat = '<?php echo site_url("inicio/recogeVisat"); ?>';
var urlInsert = '<?php echo site_url("inicio/insertaPeticion"); ?>';
</script>
</head>
<body>
	
<div class="container">	
	
	<div class="row-fluid">
		<div class="span12"></div>
			<div class="row-fluid">
				<div class="span12">
					<div class="span2">
						<img src="<?php echo base_url_static_f();?>images/logo.png" />
					</div>
					<div class="span6">
						<!-- <div class="row-fluid"> -->
						<center><h1 face="verdana"><?php echo $titulo; ?></h1></center>
						<!-- </div> -->
					</div>
					<div class="span3">
						<p><b>USUARI REGISTRAT: <?php echo strtoupper($username); ?></b></p>
						<p><i class="icon-off"></i><?php echo anchor('ldap/logout', 'Tancar sessió', 'title="Tancar sessió"'); ?></p>
					</div>
				</div>
				<div class="span12">
					<div class="row-fluid"></div>
				</div>
		</div>
		
	</div>
		<input type="hidden" id="usuari" name="usuari" value="<?php echo $username;?>" />
		<!-- Nav tabs -->
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#visat" data-toggle="tab">CUA VISAT</a></li>
		  <li><a href="#secretaria" data-toggle="tab">CUA SECRETARIA</a></li>
		  <li><a href="#firma" data-toggle="tab">CUA FIRMA PROFESSIONAL</a></li>
		  <li><a href="#comptabilitat" data-toggle="tab">CUA COMPTABILITAT</a></li>
		</ul>
		
		<!-- Tab panes -->
		<div class="tab-content">

			
		<!-- INICIO DATOS GENERALES ABIERTOS -->
			<div class="tab-pane active" id="visat">
				<?php
					$this->load->view('partial/visat');
				?>
			</div>
		<!-- FIN div datos generales abiertos-->	



		<!-- INICIO DATOS GENERALES CERRADOS -->
			<div class="tab-pane" id="secretaria">
				<?php
					$this->load->view('partial/secretaria');
				?>
			</div>
		<!-- FIN DATOS GENERALES CERRADOS -->



		<!-- INICIO tickets detallados -->
			<div class="tab-pane" id="firma">
				<?php
					$this->load->view('partial/firma');
				?>
		  
			</div>
		<!--FIN tab tickets -->  
		  
		  
		  
		  
		<!-- INICIO tab SLA -->
			<div class="tab-pane" id="comptabilitat">
				<?php
					$this->load->view('partial/comptabilitat');
				?>
			</div>
		<!--FIN tab SLA -->

		</div> 
</body>
</html>
