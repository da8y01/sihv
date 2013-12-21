<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'experiencialaboral-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'idFormatoHV',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idPais',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idDepartamento',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idMunicipio',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'tipoContrato',array('class'=>'form-control','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'empresa',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'tipo',array('class'=>'form-control','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'emailEntidad',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'telefonos',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fechaIngreso',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'fechaRetiro',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'cargo',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'dependencia',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'direccion',array('class'=>'form-control','maxlength'=>45)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
