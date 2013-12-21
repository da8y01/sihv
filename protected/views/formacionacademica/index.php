<?php
$this->breadcrumbs=array(
	'Formacionacademicas',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Formacionacademica','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Formacionacademica','url'=>array('admin')),
);
?>

<h1>Formacionacademicas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
