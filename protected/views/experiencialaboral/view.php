<?php
$this->breadcrumbs=array(
	'Experiencialaborals'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Experiencialaboral','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Experiencialaboral','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Experiencialaboral','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Experiencialaboral','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Experiencialaboral','url'=>array('admin')),
);
?>

<h1>Mostrar Experiencialaboral #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idFormatoHV',
		'idPais',
		'idDepartamento',
		'idMunicipio',
		'tipoContrato',
		'empresa',
		'tipo',
		'emailEntidad',
		'telefonos',
		'fechaIngreso',
		'fechaRetiro',
		'cargo',
		'dependencia',
		'direccion',
	),
)); ?>
