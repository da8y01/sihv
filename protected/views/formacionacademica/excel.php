<table class="table table-bordered" border="1">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('idFormatoHV'); ?></th><th><?php echo CHtml::encode('educacionBasica'); ?></th><th><?php echo CHtml::encode('tituloObtenido'); ?></th><th><?php echo CHtml::encode('anioGrado'); ?></th><th><?php echo CHtml::encode('mesGrado'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->idFormatoHV); ?></td><td><?php echo CHtml::encode($data->educacionBasica); ?></td><td><?php echo CHtml::encode($data->tituloObtenido); ?></td><td><?php echo CHtml::encode($data->anioGrado); ?></td><td><?php echo CHtml::encode($data->mesGrado); ?></td>			
			</tr>
			<?php };  ?>
		
	</tbody>
</table>