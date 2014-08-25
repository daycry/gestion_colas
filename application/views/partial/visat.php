
<div class="span10" id="visatDiv" name="visatDiv">
		<div class="alert alert-info">
			<p>Cua de Visat.</p>
		</div>
		
		<div class="row-fluid">
					<div id="visatG" name="visatG">
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
						
							foreach( $listaVisat as $listVisat ){
									echo"<tr>";
										echo"<td>".$listVisat->nom."</td>";
										if( $listVisat->entrada == null ){
											echo"<td class='danger'>Pendent</td>";
										}else{
											echo"<td class='success'>".$listVisat->entrada."</td>";
										}
										echo"<td><a href='#' class='click' tipo='1' identi='".$listVisat->id."'><i class='icon-time'></i></a>&nbsp;&nbsp;&nbsp;<a href='#' class='click' tipo='2' identi='".$listVisat->id."'><i class='icon-check'></i></a></td>";
										echo"<td>".$listVisat->motiu."</td>";
										echo"<td>".$listVisat->empleat."</td>";
									echo"</tr>";
							}
						?>
						</tbody>
						</table>
					</div>
		</div>

</div>
