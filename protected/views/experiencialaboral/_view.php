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

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPais')); ?>:</b>
	<?php echo CHtml::encode($data->idPais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDepartamento')); ?>:</b>
	<?php echo CHtml::encode($data->idDepartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idMunicipio')); ?>:</b>
	<?php echo CHtml::encode($data->idMunicipio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoContrato')); ?>:</b>
	<?php echo CHtml::encode($data->tipoContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailEntidad')); ?>:</b>
	<?php echo CHtml::encode($data->emailEntidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonos')); ?>:</b>
	<?php echo CHtml::encode($data->telefonos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->fechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaRetiro')); ?>:</b>
	<?php echo CHtml::encode($data->fechaRetiro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dependencia')); ?>:</b>
	<?php echo CHtml::encode($data->dependencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	*/ ?>
</div>
</div>