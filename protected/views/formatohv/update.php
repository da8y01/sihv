<?php
$this->breadcrumbs=array(
	'Formatohvs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Formatohv','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Formatohv','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Formatohv','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Formatohv','url'=>array('admin')),
);
?>

<h1>Actualizar Formatohv <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>