<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Pais','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Pais','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Pais','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Pais','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Pais','url'=>array('admin')),
);
?>

<h1>Mostrar Pais #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
