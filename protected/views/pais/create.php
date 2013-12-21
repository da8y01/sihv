<?php
$this->breadcrumbs=array(
	'Paises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Pais','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Pais','url'=>array('admin')),
);
?>

<h1>Crear Pais</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>