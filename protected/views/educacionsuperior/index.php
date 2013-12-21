<?php
$this->breadcrumbs=array(
	'Educacionsuperiors',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Educacionsuperior','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Educacionsuperior','url'=>array('admin')),
);
?>

<h1>Educacionsuperiors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
