<?php
$this->breadcrumbs=array(
	'Tiempoexperiencias',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Tiempoexperiencia','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Tiempoexperiencia','url'=>array('admin')),
);
?>

<h1>Tiempoexperiencias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
