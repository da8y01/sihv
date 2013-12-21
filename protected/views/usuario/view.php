<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Usuario','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Usuario','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Usuario','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Usuario','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Usuario','url'=>array('admin')),
);
?>

<h1>Mostrar Usuario #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombres',
		'apellidos',
		'cedula',
		'email',
		'username',
		'pasword',
		'session',
	),
)); ?>
