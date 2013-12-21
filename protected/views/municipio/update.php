<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Municipio','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Municipio','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Municipio','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Municipio','url'=>array('admin')),
);
?>

<h1>Actualizar Municipio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>