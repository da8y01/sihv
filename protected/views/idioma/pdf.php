<table class="table table-bordered">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('idFormacionAcademica'); ?></th><th><?php echo CHtml::encode('nombre'); ?></th><th><?php echo CHtml::encode('loHabla'); ?></th><th><?php echo CHtml::encode('loLee'); ?></th><th><?php echo CHtml::encode('loEscribe'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->idFormacionAcademica); ?></td><td><?php echo CHtml::encode($data->nombre); ?></td><td><?php echo CHtml::encode($data->loHabla); ?></td><td><?php echo CHtml::encode($data->loLee); ?></td><td><?php echo CHtml::encode($data->loEscribe); ?></td>			</tr>			
			<?php } ?>
	</tbody>
	<tfoot>
	</tfoot>
</table>
