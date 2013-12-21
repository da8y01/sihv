<?php
$this->breadcrumbs=array(
	'Educacionsuperiors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Educacionsuperior','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Educacionsuperior','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Educacionsuperior','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Educacionsuperior','url'=>array('admin')),
);
?>

<h1>Actualizar Educacionsuperior <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>