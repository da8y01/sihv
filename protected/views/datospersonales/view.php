<?php
$this->breadcrumbs=array(
	'Datospersonales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Datospersonales','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Datospersonales','url'=>array('create')),
	array('label'=>Yii::t('app','Update').' Datospersonales','url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('app','Delete').' Datospersonales','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage').' Datospersonales','url'=>array('admin')),
);
?>

<h1>Mostrar Datospersonales #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idFormatoHV',
		'idPais',
		'idDepartamento',
		'idMunicipio',
		'primerApellido',
		'segundoApellido',
		'nombres',
		'tipoDocumento',
		'documento',
		'sexo',
		'nacionalidad',
		'tipoLibretaMilitar',
		'numeroLibreta',
		'distritoMilitar',
		'fechaNacimiento',
		'paisCorrespon',
		'departCorrespon',
		'municipioCorrespon',
		'email',
	),
)); ?>
