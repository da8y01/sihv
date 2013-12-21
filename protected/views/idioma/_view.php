<div class="panel panel-warning">
<div class="panel-heading">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

</div>
<div class="panel-body">
	<b><?php echo CHtml::encode($data->getAttributeLabel('idFormacionAcademica')); ?>:</b>
	<?php echo CHtml::encode($data->idFormacionAcademica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loHabla')); ?>:</b>
	<?php echo CHtml::encode($data->loHabla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loLee')); ?>:</b>
	<?php echo CHtml::encode($data->loLee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loEscribe')); ?>:</b>
	<?php echo CHtml::encode($data->loEscribe); ?>
	<br />

</div>
</div>