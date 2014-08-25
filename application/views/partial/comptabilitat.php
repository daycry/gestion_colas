
<div class="span10" id="comptaDiv" name="comptaDiv">
		<div class="alert alert-info">
			<p>Cua de Comptabilitat.</p>
		</div>
		
		<div class="row-fluid">
					<div id="compta" name="compta">
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
						
							foreach( $listaCompta as $listCompta ){
									echo"<tr>";
										echo"<td>".$listCompta->nom."</td>";
										if( $listCompta->entrada == null ){
											echo"<td class='danger'>Pendent</td>";
										}else{
											echo"<td class='success'>".$listCompta->entrada."</td>";
										}
										echo"<td><a href='#' class='click' tipo='1' identi='".$listCompta->id."'><i class='icon-time'></i></a>&nbsp;&nbsp;&nbsp;<a href='#' class='click' tipo='2' identi='".$listCompta->id."'><i class='icon-check'></i></a></td>";
										echo"<td>".$listCompta->motiu."</td>";
										echo"<td>".$listCompta->empleat."</td>";
									echo"</tr>";
							}
						?>
						</tbody>
						</table>
					</div>
		</div>

</div>
