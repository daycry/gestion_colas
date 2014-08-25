
<div class="span10" id="secretariaDiv" name="secretariaDiv">
		<div class="alert alert-info">
			<p>Cua de Secretaria.</p>
		</div>
		
		<div class="row-fluid">
					<div id="secretaria" name="secretaria">
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
						
							foreach( $listaSecretaria as $listSecretaria ){
									echo"<tr>";
										echo"<td>".$listSecretaria->nom."</td>";
										if( $listSecretaria->entrada == null ){
											echo"<td class='danger'>Pendent</td>";
										}else{
											echo"<td class='success'>".$listSecretaria->entrada."</td>";
										}
										echo"<td><a href='#' class='click' tipo='1' identi='".$listSecretaria->id."'><i class='icon-time'></i></a>&nbsp;&nbsp;&nbsp;<a href='#' class='click' tipo='2' identi='".$listSecretaria->id."'><i class='icon-check'></i></a></td>";
										echo"<td>".$listSecretaria->motiu."</td>";
										echo"<td>".$listSecretaria->empleat."</td>";
									echo"</tr>";
							}
						?>
						</tbody>
						</table>
					</div>
		</div>

</div>
