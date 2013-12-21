<?php
/* @var $this PersonaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personas',
);

?>



<div class="span-6 first">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title"><?php echo $this->modelClass; ?></h3>
		</div>
		<div class="panel-body">
			<div class="list-group">
				<?php echo CHtml::ajaxSubmitButton($this->modelClass,$this->createUrl('tipousuario/admin'),array('update'=>'#area_trabajo'),array('class'=>'boton','id'=>$this->modelClass.'-button')); ?>
				<!-- <a href="#" class="list-group-item active">
				  <h4 class="list-group-item-heading">List group item heading</h4>
				  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>
				<a href="#" class="list-group-item">
				  <h4 class="list-group-item-heading">List group item heading</h4>
				  <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>-->
			</div>
		</div>
	</div>
</div>
<div class="span-20 last" id="area_trabajo">
	
</div>