<?php
$this->breadcrumbs=array(
	'Formacionacademicas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Formacionacademica','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Formacionacademica','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Formacionacademica','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Formacionacademica','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Formacionacademica','url'=>array('admin')),
);
?>

<h1>Mostrar Formacionacademica #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idFormatoHV',
		'educacionBasica',
		'tituloObtenido',
		'anioGrado',
		'mesGrado',
	),
)); ?>
