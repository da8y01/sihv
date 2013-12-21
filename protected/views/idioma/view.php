<?php
$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Idioma','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Idioma','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Idioma','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Idioma','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Idioma','url'=>array('admin')),
);
?>

<h1>Mostrar Idioma #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idFormacionAcademica',
		'nombre',
		'loHabla',
		'loLee',
		'loEscribe',
	),
)); ?>
