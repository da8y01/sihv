<?php
$this->breadcrumbs=array(
	'Datospersonales',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Datospersonales','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Datospersonales','url'=>array('admin')),
);
?>

<h1>Datospersonales</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
