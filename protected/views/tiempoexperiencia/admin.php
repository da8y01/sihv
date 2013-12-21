<?php
$this->breadcrumbs=array(
	'Tiempoexperiencias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Tiempoexperiencia','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Tiempoexperiencia','url'=>array('create')),
	array('label'=>Yii::t('app','Excel').' Tiempoexperiencia', 'url'=>array('excel','excel'=>1)),
	array('label'=>Yii::t('app','Pdf').' Tiempoexperiencia', 'url'=>array('pdf','pdf'=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tiempoexperiencia-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tiempoexperiencias</h1>

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
	'id'=>'tiempoexperiencia-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'idFormatoHV',
		'ocupacion',
		'años',
		'meses',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'htmlOptions' => array('style' => 'width:100px;'),
		),
	),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
