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

	<b><?php echo CHtml::encode($data->getAttributeLabel('modalidad')); ?>:</b>
	<?php echo CHtml::encode($data->modalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semestresAprobados')); ?>:</b>
	<?php echo CHtml::encode($data->semestresAprobados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('graduado')); ?>:</b>
	<?php echo CHtml::encode($data->graduado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloObtenido')); ?>:</b>
	<?php echo CHtml::encode($data->tituloObtenido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mesTerminacion')); ?>:</b>
	<?php echo CHtml::encode($data->mesTerminacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('anioTerminacion')); ?>:</b>
	<?php echo CHtml::encode($data->anioTerminacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarjetaProfesional')); ?>:</b>
	<?php echo CHtml::encode($data->tarjetaProfesional); ?>
	<br />

	*/ ?>
</div>
</div>