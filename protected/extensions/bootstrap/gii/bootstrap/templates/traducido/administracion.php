<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Administracion',
);\n";
?>
<div class="row" style="padding-left:0px; padding-right: 0px;">
	<div class="col-sm-2">
		<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo $this->modelClass; ?></h3>
				</div>
				<div class="panel-body">
					<?php echo "<?php"; ?> CHtml::ajaxSubmitButton('<?php echo $this->modelClass; ?>',$this->createUrl('<?php echo $this->modelClass; ?>/admin'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php echo "<?php"; ?> CHtml::ajaxSubmitButton('<?php echo $this->modelClass; ?>',$this->createUrl('<?php echo $this->modelClass; ?>/create'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php echo "<?php"; ?> CHtml::ajaxSubmitButton('<?php echo $this->modelClass; ?>',$this->createUrl('<?php echo $this->modelClass; ?>/update'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
					<br/>
					<?php echo "<?php"; ?> CHtml::ajaxSubmitButton('<?php echo $this->modelClass; ?>',$this->createUrl('<?php echo $this->modelClass; ?>/view'),array('update'=>'#zone-content'),array('class'=>'btn btn-info','id'=>'button')); ?>
				</div>
		</div>
	</div>
	<div class="col-sm-10" id="zone-content">
		
	</div>
</div>