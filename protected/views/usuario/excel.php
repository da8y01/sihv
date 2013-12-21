<table class="table table-bordered" border="1">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('nombres'); ?></th><th><?php echo CHtml::encode('apellidos'); ?></th><th><?php echo CHtml::encode('cedula'); ?></th><th><?php echo CHtml::encode('email'); ?></th><th><?php echo CHtml::encode('username'); ?></th><th><?php echo CHtml::encode('pasword'); ?></th><th><?php echo CHtml::encode('session'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->nombres); ?></td><td><?php echo CHtml::encode($data->apellidos); ?></td><td><?php echo CHtml::encode($data->cedula); ?></td><td><?php echo CHtml::encode($data->email); ?></td><td><?php echo CHtml::encode($data->username); ?></td><td><?php echo CHtml::encode($data->pasword); ?></td><td><?php echo CHtml::encode($data->session); ?></td>			
			</tr>
			<?php };  ?>
		
	</tbody>
</table>