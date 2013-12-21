<?php
$this->breadcrumbs=array(
	'Idiomas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Idioma','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Idioma','url'=>array('admin')),
);
?>

<h1>Crear Idioma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>