<?php
$this->breadcrumbs=array(
	'Municipios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Municipio','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Municipio','url'=>array('admin')),
);
?>

<h1>Crear Municipio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>