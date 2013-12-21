<?php
$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Departamento','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Departamento','url'=>array('admin')),
);
?>

<h1>Crear Departamento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>