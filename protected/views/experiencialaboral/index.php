<?php
$this->breadcrumbs=array(
	'Experiencialaborals',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Experiencialaboral','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Experiencialaboral','url'=>array('admin')),
);
?>

<h1>Experiencialaborals</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
