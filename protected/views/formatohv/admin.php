<?php
$this->breadcrumbs=array(
	'Formatohvs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Formatohv','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Formatohv','url'=>array('create')),
	array('label'=>Yii::t('app','Excel').' Formatohv', 'url'=>array('excel','excel'=>1)),
	array('label'=>Yii::t('app','Pdf').' Formatohv', 'url'=>array('pdf','pdf'=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('formatohv-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Formatohvs</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button btn btn-default')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'formatohv-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'idUsuario',
		'idCiudadDiligenciamiento',
		'idCiudadRecurHuma',
		'entidadReceptora',
		'fechaDiligenciamiento',
		/*
		'firmaSerContra',
		'observaRecurHuma',
		'fechaRecurHuma',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'htmlOptions' => array('style' => 'width:100px;'),
		),
	),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
