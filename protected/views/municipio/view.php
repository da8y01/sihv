<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Municipio','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Municipio','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Municipio','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Municipio','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Municipio','url'=>array('admin')),
);
?>

<h1>Mostrar Municipio #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idDepartamento',
		'nombre',
	),
)); ?>
