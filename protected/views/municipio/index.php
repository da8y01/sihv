<?php
$this->breadcrumbs=array(
	'Municipios',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Municipio','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Municipio','url'=>array('admin')),
);
?>

<h1>Municipios</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
