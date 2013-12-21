<table class="table table-bordered" border="1">
	<thead>
		<tr>
		<th><?php echo CHtml::encode('id'); ?></th><th><?php echo CHtml::encode('idUsuario'); ?></th><th><?php echo CHtml::encode('idCiudadDiligenciamiento'); ?></th><th><?php echo CHtml::encode('idCiudadRecurHuma'); ?></th><th><?php echo CHtml::encode('entidadReceptora'); ?></th><th><?php echo CHtml::encode('fechaDiligenciamiento'); ?></th><th><?php echo CHtml::encode('firmaSerContra'); ?></th><th><?php echo CHtml::encode('observaRecurHuma'); ?></th><th><?php echo CHtml::encode('fechaRecurHuma'); ?></th>		</tr>
	</thead>
	<tbody>
		<?php foreach($model as $data) { ?>
			<tr>
			<td><?php echo CHtml::encode($data->id); ?></td><td><?php echo CHtml::encode($data->idUsuario); ?></td><td><?php echo CHtml::encode($data->idCiudadDiligenciamiento); ?></td><td><?php echo CHtml::encode($data->idCiudadRecurHuma); ?></td><td><?php echo CHtml::encode($data->entidadReceptora); ?></td><td><?php echo CHtml::encode($data->fechaDiligenciamiento); ?></td><td><?php echo CHtml::encode($data->firmaSerContra); ?></td><td><?php echo CHtml::encode($data->observaRecurHuma); ?></td><td><?php echo CHtml::encode($data->fechaRecurHuma); ?></td>			
			</tr>
			<?php };  ?>
		
	</tbody>
</table>