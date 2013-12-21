<?php
$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Idioma','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Idioma','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Idioma','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Idioma','url'=>array('admin')),
);
?>

<h1>Actualizar Idioma <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>