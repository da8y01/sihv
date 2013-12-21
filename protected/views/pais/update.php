<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Pais','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Pais','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Pais','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Pais','url'=>array('admin')),
);
?>

<h1>Actualizar Pais <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>