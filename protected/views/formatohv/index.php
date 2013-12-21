<?php
$this->breadcrumbs=array(
	'Formatohvs',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Formatohv','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Formatohv','url'=>array('admin')),
);
?>

<h1>Formatohvs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
