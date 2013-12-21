<div class="panel panel-warning">
<div class="panel-heading">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

</div>
<div class="panel-body">
	<b><?php echo CHtml::encode($data->getAttributeLabel('idFormatoHV')); ?>:</b>
	<?php echo CHtml::encode($data->idFormatoHV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('años')); ?>:</b>
	<?php echo CHtml::encode($data->años); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meses')); ?>:</b>
	<?php echo CHtml::encode($data->meses); ?>
	<br />

</div>
</div>