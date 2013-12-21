<?php
$this->breadcrumbs=array(
	'Experiencialaborals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Experiencialaboral','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Experiencialaboral','url'=>array('admin')),
);
?>

<h1>Crear Experiencialaboral</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>