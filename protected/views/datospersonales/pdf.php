<table class="table table-bordered">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('idFormatoHV'); ?></th><th><?php echo CHtml::encode('idPais'); ?></th><th><?php echo CHtml::encode('idDepartamento'); ?></th><th><?php echo CHtml::encode('idMunicipio'); ?></th><th><?php echo CHtml::encode('primerApellido'); ?></th><th><?php echo CHtml::encode('segundoApellido'); ?></th><th><?php echo CHtml::encode('nombres'); ?></th><th><?php echo CHtml::encode('tipoDocumento'); ?></th><th><?php echo CHtml::encode('documento'); ?></th><th><?php echo CHtml::encode('sexo'); ?></th><th><?php echo CHtml::encode('nacionalidad'); ?></th><th><?php echo CHtml::encode('tipoLibretaMilitar'); ?></th><th><?php echo CHtml::encode('numeroLibreta'); ?></th><th><?php echo CHtml::encode('distritoMilitar'); ?></th><th><?php echo CHtml::encode('fechaNacimiento'); ?></th><th><?php echo CHtml::encode('paisCorrespon'); ?></th><th><?php echo CHtml::encode('departCorrespon'); ?></th><th><?php echo CHtml::encode('municipioCorrespon'); ?></th><th><?php echo CHtml::encode('email'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->idFormatoHV); ?></td><td><?php echo CHtml::encode($data->idPais); ?></td><td><?php echo CHtml::encode($data->idDepartamento); ?></td><td><?php echo CHtml::encode($data->idMunicipio); ?></td><td><?php echo CHtml::encode($data->primerApellido); ?></td><td><?php echo CHtml::encode($data->segundoApellido); ?></td><td><?php echo CHtml::encode($data->nombres); ?></td><td><?php echo CHtml::encode($data->tipoDocumento); ?></td><td><?php echo CHtml::encode($data->documento); ?></td><td><?php echo CHtml::encode($data->sexo); ?></td><td><?php echo CHtml::encode($data->nacionalidad); ?></td><td><?php echo CHtml::encode($data->tipoLibretaMilitar); ?></td><td><?php echo CHtml::encode($data->numeroLibreta); ?></td><td><?php echo CHtml::encode($data->distritoMilitar); ?></td><td><?php echo CHtml::encode($data->fechaNacimiento); ?></td><td><?php echo CHtml::encode($data->paisCorrespon); ?></td><td><?php echo CHtml::encode($data->departCorrespon); ?></td><td><?php echo CHtml::encode($data->municipioCorrespon); ?></td><td><?php echo CHtml::encode($data->email); ?></td>			</tr>			
			<?php } ?>
	</tbody>
	<tfoot>
	</tfoot>
</table>
