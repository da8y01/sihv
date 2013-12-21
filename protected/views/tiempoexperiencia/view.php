<?php
$this->breadcrumbs=array(
	'Tiempoexperiencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Tiempoexperiencia','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Tiempoexperiencia','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Tiempoexperiencia','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Tiempoexperiencia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Tiempoexperiencia','url'=>array('admin')),
);
?>

<h1>Mostrar Tiempoexperiencia #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idFormatoHV',
		'ocupacion',
		'años',
		'meses',
	),
)); ?>
