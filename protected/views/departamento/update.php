<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Departamento','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Departamento','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Departamento','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Departamento','url'=>array('admin')),
);
?>

<h1>Actualizar Departamento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>