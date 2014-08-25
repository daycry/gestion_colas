<html>
<head>
<title>Formulari de llista d'espera de Visat</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf8' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src='<?php echo base_url_static_f();?>bootstrap/js/bootstrap.js'></script>
<link href='<?php echo base_url_static_f();?>bootstrap/css/bootstrap.css' rel="stylesheet">
<link href='<?php echo base_url_static_f();?>bootstrap/css/bootstrap-responsive.css' rel="stylesheet">
<script src='<?php echo base_url_static_f();?>js/funciones.js'></script>
<script>
var urlVisatG = '<?php echo site_url("gestor/actualizaLista"); ?>';
var urlVisat = '<?php echo site_url("inicio/recogeVisat"); ?>';
var urlInsert = '<?php echo site_url("inicio/insertaPeticion"); ?>';
</script>
</head>
<body>
	
<div class="container">	
	
	<div class="row-fluid">
		<div class="span10"></div>
			<div class="row-fluid">
				<div class="span10">
					<div class="span2">
						<img src="<?php echo base_url_static_f();?>images/logo.png" />
					</div>
				</div>
				<div class="span10">
					<div class="row-fluid"></div>
				</div>
		</div>
		
		<div class="row-fluid">
				<div class="span10">
					<div class="span5">
						<h3>EL TEU TORN</h3>
					</div>
					<div class="span5">
						<?php $arrMesos = array("Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"); ?>
						<?php $mes = date('n');?>
						Barcelona <?php echo date('d')." de ".$arrMesos[$mes - 1]." de ". date('Y'); ?>
					</div>
					<!-- <div class="span3">
						<p><i class="icon-off"></i><?php //echo anchor('ldap/logout', 'Tancar sessió', 'title="Tancar sessió"'); ?></p>
					</div> -->
				</div>
		</div>
		
		<?php echo form_open('inicio/buscar'); ?>
		
		<div class="span10">
			<fieldset class="row fieldset">
				<legend>Escriu el teu torn</legend>
					<div class="span10">
						<div class="row-fluid">
							<div class="span3">
								Texto que queramos poner, como explicación del sistema o lo que se quiera.
							</div>
							
							<div class="offset1 span6">
								Nombre y apellidos: <input type="text" class="form-control input-xlarge" id="nom" name="nom" placeholder="Nom i Cognoms"/>
							</div>
							<div class="row-fluid offset1 span6">
								Motivo: <textarea id="motiu" name="motiu" class="form-control field span12" rows="4"></textarea>
							</div>
							<div class="row-fluid offset1 span12">
								
									<input type="button" id="btnvisat" name="btnvisat" class="btn" value="VISAT" tipo='1' />&nbsp;&nbsp;&nbsp;&nbsp;
								
								
									<input type="button" id="btnsecretaria" name="btnsecretaria" class="btn" value="SECRETARIA" tipo='2' />&nbsp;&nbsp;&nbsp;&nbsp;
								
								
									<input type="button" id="btnfirma" name="btnfirma" class="btn" value="FIRMA PROFESSIONAL" tipo='3' />&nbsp;&nbsp;&nbsp;&nbsp;
								
							
									<input type="button" id="btncomptabilitat" name="btncomptabilitat" class="btn" value="COMPTABILITAT" tipo='4' />
								
							
							</div>
							
						</div>
					</div>
					
			 </fieldset>
		 </div>
		 </form>
		 
		 
		 
			<?php if ( validation_errors() ){ ?>
					<div class="span10">
						<div class="span4">
							<div class="alert">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Errores!</strong><?php echo validation_errors(); ?>
							</div>
						</div>
					</div>
			<?php } ?>
			
		<div class="row-fluid span10"></div>
		
		<div class="row-fluid span12">
			
			<div class="span3" id="lista1" name="lista1">
				
			</div>
			
			<div class="span3" id="lista2" name="lista2">
				
			</div>
			
			<div class="span3" id="lista3" name="lista3">
				
			</div>
				
			<div class="span3" id="lista4" name="lista4">
				
			</div>
			
		</div>
		 
	</div>

</body>
</html>
