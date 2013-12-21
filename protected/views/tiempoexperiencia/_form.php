<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tiempoexperiencia-form',
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

	<?php echo $form->textFieldRow($model,'ocupacion',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'años',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'meses',array('class'=>'form-control')); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
