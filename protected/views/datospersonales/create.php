<?php
$this->breadcrumbs=array(
	'Datospersonales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Datospersonales','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Datospersonales','url'=>array('admin')),
);
?>

<h1>Crear Datospersonales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>