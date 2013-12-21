<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'datospersonales-form',
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

	<?php echo $form->textFieldRow($model,'primerApellido',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'segundoApellido',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'nombres',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'tipoDocumento',array('class'=>'form-control','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'documento',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'sexo',array('class'=>'form-control','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'nacionalidad',array('class'=>'form-control','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'tipoLibretaMilitar',array('class'=>'form-control','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'numeroLibreta',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'distritoMilitar',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fechaNacimiento',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'paisCorrespon',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'departCorrespon',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'municipioCorrespon',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'form-control','maxlength'=>45)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
