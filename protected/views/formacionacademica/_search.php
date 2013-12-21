<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idFormatoHV',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'educacionBasica',array('class'=>'form-control','maxlength'=>2)); ?>

	<?php echo $form->textFieldRow($model,'tituloObtenido',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'anioGrado',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'mesGrado',array('class'=>'form-control','maxlength'=>45)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
