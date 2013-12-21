<table class="table table-bordered" border="1">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('nombre'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->nombre); ?></td>			
			</tr>
			<?php };  ?>
		
	</tbody>
</table>