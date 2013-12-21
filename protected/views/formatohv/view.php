<?php
$this->breadcrumbs=array(
	'Formatohvs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Formatohv','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Formatohv','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Formatohv','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Formatohv','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Formatohv','url'=>array('admin')),
);
?>

<h1>Mostrar Formatohv #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idUsuario',
		'idCiudadDiligenciamiento',
		'idCiudadRecurHuma',
		'entidadReceptora',
		'fechaDiligenciamiento',
		'firmaSerContra',
		'observaRecurHuma',
		'fechaRecurHuma',
	),
)); ?>
