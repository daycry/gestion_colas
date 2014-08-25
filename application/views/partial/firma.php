
<div class="span10" id="firmaDiv" name="firmaDiv">
		<div class="alert alert-info">
			<p>Cua de Firma.</p>
		</div>
		
		<div class="row-fluid">
					<div id="firma" name="firma">
						<table class="table table-hover table-condensed">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Hora Entrada</th>
									<th>Gestión</th>
									<th class="span6">Motivo</th>
									<th>Empleado</th>
								</tr>
							</thead>
							<tbody>
						<?php
						
							foreach( $listaFirma as $listFirma ){
									echo"<tr>";
										echo"<td>".$listFirma->nom."</td>";
										if( $listFirma->entrada == null ){
											echo"<td class='danger'>Pendent</td>";
										}else{
											echo"<td class='success'>".$listFirma->entrada."</td>";
										}
										echo"<td><a href='#' class='click' tipo='1' identi='".$listFirma->id."'><i class='icon-time'></i></a>&nbsp;&nbsp;&nbsp;<a href='#' class='click' tipo='2' identi='".$listFirma->id."'><i class='icon-check'></i></a></td>";
										echo"<td>".$listFirma->motiu."</td>";
										echo"<td>".$listFirma->empleat."</td>";
									echo"</tr>";
							}
						?>
						</tbody>
						</table>
					</div>
		</div>

</div>
