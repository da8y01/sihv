<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Departamento','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Departamento','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Departamento','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Departamento','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Departamento','url'=>array('admin')),
);
?>

<h1>Mostrar Departamento #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idPais',
		'nombre',
	),
)); ?>
