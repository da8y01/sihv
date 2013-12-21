<?php
$this->breadcrumbs=array(
	'Educacionsuperiors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Educacionsuperior','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Educacionsuperior','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Educacionsuperior','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Educacionsuperior','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Educacionsuperior','url'=>array('admin')),
);
?>

<h1>Mostrar Educacionsuperior #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idFormacionAcademica',
		'modalidad',
		'semestresAprobados',
		'graduado',
		'tituloObtenido',
		'mesTerminacion',
		'anioTerminacion',
		'tarjetaProfesional',
	),
)); ?>
