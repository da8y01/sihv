<?php
$this->breadcrumbs=array(
	'Formacionacademicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Formacionacademica','url'=>array('index')),
	array('label'=>Yii::t('app','Manage').' Formacionacademica','url'=>array('admin')),
);
?>

<h1>Crear Formacionacademica</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>