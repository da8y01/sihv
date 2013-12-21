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

	<b><?php echo CHtml::encode($data->getAttributeLabel('educacionBasica')); ?>:</b>
	<?php echo CHtml::encode($data->educacionBasica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloObtenido')); ?>:</b>
	<?php echo CHtml::encode($data->tituloObtenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anioGrado')); ?>:</b>
	<?php echo CHtml::encode($data->anioGrado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mesGrado')); ?>:</b>
	<?php echo CHtml::encode($data->mesGrado); ?>
	<br />

</div>
</div>