<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Usuario','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Usuario','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Usuario','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Usuario','url'=>array('admin')),
);
?>

<h1>Actualizar Usuario <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>