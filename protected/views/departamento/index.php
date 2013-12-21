<?php
$this->breadcrumbs=array(
	'Departamentos',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Departamento','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Departamento','url'=>array('admin')),
);
?>

<h1>Departamentos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
