<?php
$this->breadcrumbs=array(
	'Datospersonales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Datospersonales','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Datospersonales','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Datospersonales','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Datospersonales','url'=>array('admin')),
);
?>

<h1>Actualizar Datospersonales <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>