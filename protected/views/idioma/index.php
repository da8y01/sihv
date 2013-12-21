<?php
$this->breadcrumbs=array(
	'Idiomas',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Idioma','url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' Idioma','url'=>array('admin')),
);
?>

<h1>Idiomas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	//'viewData'=>array('idDependencia'=>$idDependencia),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
