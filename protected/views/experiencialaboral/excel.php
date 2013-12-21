<table class="table table-bordered" border="1">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('idFormatoHV'); ?></th><th><?php echo CHtml::encode('idPais'); ?></th><th><?php echo CHtml::encode('idDepartamento'); ?></th><th><?php echo CHtml::encode('idMunicipio'); ?></th><th><?php echo CHtml::encode('tipoContrato'); ?></th><th><?php echo CHtml::encode('empresa'); ?></th><th><?php echo CHtml::encode('tipo'); ?></th><th><?php echo CHtml::encode('emailEntidad'); ?></th><th><?php echo CHtml::encode('telefonos'); ?></th><th><?php echo CHtml::encode('fechaIngreso'); ?></th><th><?php echo CHtml::encode('fechaRetiro'); ?></th><th><?php echo CHtml::encode('cargo'); ?></th><th><?php echo CHtml::encode('dependencia'); ?></th><th><?php echo CHtml::encode('direccion'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->idFormatoHV); ?></td><td><?php echo CHtml::encode($data->idPais); ?></td><td><?php echo CHtml::encode($data->idDepartamento); ?></td><td><?php echo CHtml::encode($data->idMunicipio); ?></td><td><?php echo CHtml::encode($data->tipoContrato); ?></td><td><?php echo CHtml::encode($data->empresa); ?></td><td><?php echo CHtml::encode($data->tipo); ?></td><td><?php echo CHtml::encode($data->emailEntidad); ?></td><td><?php echo CHtml::encode($data->telefonos); ?></td><td><?php echo CHtml::encode($data->fechaIngreso); ?></td><td><?php echo CHtml::encode($data->fechaRetiro); ?></td><td><?php echo CHtml::encode($data->cargo); ?></td><td><?php echo CHtml::encode($data->dependencia); ?></td><td><?php echo CHtml::encode($data->direccion); ?></td>			
			</tr>
			<?php };  ?>
		
	</tbody>
</table>