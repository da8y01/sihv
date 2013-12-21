<table class="table table-bordered" border="1">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('idFormacionAcademica'); ?></th><th><?php echo CHtml::encode('modalidad'); ?></th><th><?php echo CHtml::encode('semestresAprobados'); ?></th><th><?php echo CHtml::encode('graduado'); ?></th><th><?php echo CHtml::encode('tituloObtenido'); ?></th><th><?php echo CHtml::encode('mesTerminacion'); ?></th><th><?php echo CHtml::encode('anioTerminacion'); ?></th><th><?php echo CHtml::encode('tarjetaProfesional'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->idFormacionAcademica); ?></td><td><?php echo CHtml::encode($data->modalidad); ?></td><td><?php echo CHtml::encode($data->semestresAprobados); ?></td><td><?php echo CHtml::encode($data->graduado); ?></td><td><?php echo CHtml::encode($data->tituloObtenido); ?></td><td><?php echo CHtml::encode($data->mesTerminacion); ?></td><td><?php echo CHtml::encode($data->anioTerminacion); ?></td><td><?php echo CHtml::encode($data->tarjetaProfesional); ?></td>			
			</tr>
			<?php };  ?>
		
	</tbody>
</table>