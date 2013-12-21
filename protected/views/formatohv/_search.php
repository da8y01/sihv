<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idUsuario',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idCiudadDiligenciamiento',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'idCiudadRecurHuma',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'entidadReceptora',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fechaDiligenciamiento',array('class'=>'form-control')); ?>

	<?php echo $form->textFieldRow($model,'firmaSerContra',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'observaRecurHuma',array('class'=>'form-control','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'fechaRecurHuma',array('class'=>'form-control','maxlength'=>45)); ?>

	<div class="form-group">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Buscar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
