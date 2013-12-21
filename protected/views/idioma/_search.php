<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idFormacionAcademica',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'nombre',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'loHabla',array('class'=>'form-control','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'loLee',array('class'=>'form-control','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'loEscribe',array('class'=>'form-control','maxlength'=>2)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
