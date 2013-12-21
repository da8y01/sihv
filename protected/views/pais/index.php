<?php
$this->breadcrumbs=array(
	'Paises',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Pais','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Pais','url'=>array('admin')),
);
?>

<h1>Paises</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
