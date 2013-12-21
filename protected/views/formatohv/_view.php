<div class="panel panel-warning">
<div class="panel-heading">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

</div>
<div class="panel-body">
	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCiudadDiligenciamiento')); ?>:</b>
	<?php echo CHtml::encode($data->idCiudadDiligenciamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCiudadRecurHuma')); ?>:</b>
	<?php echo CHtml::encode($data->idCiudadRecurHuma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entidadReceptora')); ?>:</b>
	<?php echo CHtml::encode($data->entidadReceptora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaDiligenciamiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaDiligenciamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firmaSerContra')); ?>:</b>
	<?php echo CHtml::encode($data->firmaSerContra); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('observaRecurHuma')); ?>:</b>
	<?php echo CHtml::encode($data->observaRecurHuma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaRecurHuma')); ?>:</b>
	<?php echo CHtml::encode($data->fechaRecurHuma); ?>
	<br />

	*/ ?>
</div>
</div>