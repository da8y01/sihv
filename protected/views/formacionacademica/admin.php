<?php
$this->breadcrumbs=array(
	'Formacionacademicas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' Formacionacademica','url'=>array('index')),
	array('label'=>Yii::t('app','Create').' Formacionacademica','url'=>array('create')),
	array('label'=>Yii::t('app','Excel').' Formacionacademica', 'url'=>array('excel','excel'=>1)),
	array('label'=>Yii::t('app','Pdf').' Formacionacademica', 'url'=>array('pdf','pdf'=>1)),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('formacionacademica-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Formacionacademicas</h1>

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
	'id'=>'formacionacademica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'idFormatoHV',
		'educacionBasica',
		'tituloObtenido',
		'anioGrado',
		'mesGrado',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'htmlOptions' => array('style' => 'width:100px;'),
		),
	),
	'pager'=>array(
		'htmlOptions'=>array('class'=>'pagination pagination-sm'),
	),
)); ?>
