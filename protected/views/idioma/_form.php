<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'idioma-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'idFormacionAcademica',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'loHabla',array('class'=>'form-control','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'loLee',array('class'=>'form-control','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'loEscribe',array('class'=>'form-control','maxlength'=>2)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
