<?php
$this->breadcrumbs=array(
	'Educacionsuperiors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Educacionsuperior','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Educacionsuperior','url'=>array('admin')),
);
?>

<h1>Crear Educacionsuperior</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>