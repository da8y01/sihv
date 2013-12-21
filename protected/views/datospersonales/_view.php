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

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerApellido')); ?>:</b>
	<?php echo CHtml::encode($data->primerApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoApellido')); ?>:</b>
	<?php echo CHtml::encode($data->segundoApellido); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoDocumento')); ?>:</b>
	<?php echo CHtml::encode($data->tipoDocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documento')); ?>:</b>
	<?php echo CHtml::encode($data->documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoLibretaMilitar')); ?>:</b>
	<?php echo CHtml::encode($data->tipoLibretaMilitar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroLibreta')); ?>:</b>
	<?php echo CHtml::encode($data->numeroLibreta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distritoMilitar')); ?>:</b>
	<?php echo CHtml::encode($data->distritoMilitar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paisCorrespon')); ?>:</b>
	<?php echo CHtml::encode($data->paisCorrespon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departCorrespon')); ?>:</b>
	<?php echo CHtml::encode($data->departCorrespon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('municipioCorrespon')); ?>:</b>
	<?php echo CHtml::encode($data->municipioCorrespon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	*/ ?>
</div>
</div>