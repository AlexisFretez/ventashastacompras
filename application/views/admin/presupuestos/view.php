
<div class="row">
	<div class="col-xs-12 text-center">
		<b>Empresa de Ventas</b><br>
		Calle Moquegua 430 <br>
		Tel. 481890 <br>
		Email:yonybrondy17@gmail.com
	</div>
</div> <br>
<div class="row">
	<div class="col-xs-6">	
		<b>CLIENTE</b><br>
		<b>Nombre:</b> <?php echo $presupuesto->nombre;?> <br>
		<b>Nro Documento:</b> <?php echo $presupuesto->documento;?><br>
		<b>Telefono:</b> <?php echo $presupuesto->telefono;?> <br>
		<b>Direccion</b> <?php echo $presupuesto->direccion;?><br>
	</div>	
	<div class="col-xs-6">	
		<b>COMPROBANTE</b> <br>
		<b>Tipo de Comprobante:</b> <?php echo $presupuesto->tipocomprobante;?><br>
		<b>Serie:</b> <?php echo $presupuesto->serie;?><br>
		<b>Nro de Comprobante:</b><?php echo $presupuesto->num_documento;?><br>
		<b>Fecha</b> <?php echo $presupuesto->fecha;?>
	</div>	
</div>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Importe</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($detalles as $detalle):?>
				<tr>
					<td><?php echo $detalle->codigo;?></td>
					<td><?php echo $detalle->nombre;?></td>
					<td><?php echo $detalle->precio;?></td>
					<td><?php echo $detalle->cantidad;?></td>
					<td><?php echo $detalle->importe;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $presupuesto->subtotal;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>IGV:</strong></td>
					<td><?php echo $presupuesto->igv;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Descuento:</strong></td>
					<td><?php echo $presupuesto->descuento;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $presupuesto->total;?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>