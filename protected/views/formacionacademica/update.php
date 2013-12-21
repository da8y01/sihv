<?php
$this->breadcrumbs=array(
	'Formacionacademicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Formacionacademica','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Formacionacademica','url'=>array('create')),
	array('label'=>Yii::t('app','View').' Formacionacademica','url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('app','Manage').' Formacionacademica','url'=>array('admin')),
);
?>

<h1>Actualizar Formacionacademica <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>