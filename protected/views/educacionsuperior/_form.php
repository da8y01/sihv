<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'educacionsuperior-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idFormacionAcademica',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'modalidad',array('class'=>'form-control','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'semestresAprobados',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'graduado',array('class'=>'form-control','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'tituloObtenido',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'mesTerminacion',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'anioTerminacion',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'tarjetaProfesional',array('class'=>'form-control','maxlength'=>45)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
