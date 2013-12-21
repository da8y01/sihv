<?php
$this->breadcrumbs=array(
	'Experiencialaborals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Experiencialaboral','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Experiencialaboral','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Experiencialaboral','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Experiencialaboral','url'=>array('admin')),
);
?>

<h1>Actualizar Experiencialaboral <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>