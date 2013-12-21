<?php
$this->breadcrumbs=array(
	'Tiempoexperiencias'=>array('index'),
	'Administracion',
);
<div class="row" style="padding-left:0px; padding-right: 0px;">
	<div class="col-sm-2">
		<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Tiempoexperiencia</h3>
				</div>
				<div class="panel-body">
					<?php CHtml::ajaxSubmitButton('Tiempoexperiencia',$this->createUrl('Tiempoexperiencia/admin'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php CHtml::ajaxSubmitButton('Tiempoexperiencia',$this->createUrl('Tiempoexperiencia/create'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php CHtml::ajaxSubmitButton('Tiempoexperiencia',$this->createUrl('Tiempoexperiencia/update'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php CHtml::ajaxSubmitButton('Tiempoexperiencia',$this->createUrl('Tiempoexperiencia/view'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
				</div>
		</div>
	</div>
	<div class="col-sm-10" id="zone-content">
		
	</div>
</div>