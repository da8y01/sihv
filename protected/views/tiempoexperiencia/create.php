<?php
$this->breadcrumbs=array(
	'Tiempoexperiencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Tiempoexperiencia','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Tiempoexperiencia','url'=>array('admin')),
);
?>

<h1>Crear Tiempoexperiencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>