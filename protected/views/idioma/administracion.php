<?php
$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	'Administracion',
);
<div class="row" style="padding-left:0px; padding-right: 0px;">
	<div class="col-sm-2">
		<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Idioma</h3>
				</div>
				<div class="panel-body">
					<?php CHtml::ajaxSubmitButton('Idioma',$this->createUrl('Idioma/admin'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php CHtml::ajaxSubmitButton('Idioma',$this->createUrl('Idioma/create'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php CHtml::ajaxSubmitButton('Idioma',$this->createUrl('Idioma/update'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php CHtml::ajaxSubmitButton('Idioma',$this->createUrl('Idioma/view'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
				</div>
		</div>
	</div>
	<div class="col-sm-10" id="zone-content">
		
	</div>
</div>