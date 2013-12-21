<?php
$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Usuario','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Usuario','url'=>array('admin')),
);
?>

<h1>Usuarios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
