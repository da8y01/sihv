<table class="table table-bordered">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('idFormatoHV'); ?></th><th><?php echo CHtml::encode('ocupacion'); ?></th><th><?php echo CHtml::encode('años'); ?></th><th><?php echo CHtml::encode('meses'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->idFormatoHV); ?></td><td><?php echo CHtml::encode($data->ocupacion); ?></td><td><?php echo CHtml::encode($data->años); ?></td><td><?php echo CHtml::encode($data->meses); ?></td>			</tr>			
			<?php } ?>
	</tbody>
	<tfoot>
	</tfoot>
</table>
