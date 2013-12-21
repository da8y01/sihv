<?php
$this->breadcrumbs=array(
	'Tiempoexperiencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Tiempoexperiencia','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Tiempoexperiencia','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Tiempoexperiencia','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Tiempoexperiencia','url'=>array('admin')),
);
?>

<h1>Actualizar Tiempoexperiencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>