<?php
$this->breadcrumbs=array(
	'Formato Hoja de Vida'=>array('index'),
	'Create',
);

if(!Yii::app()->user->isGuest){
	$this->menu=array(
		array('label'=>Yii::t('app','List').' Formatohv','url'=>array('index')),
		array('label'=>Yii::t('app','Manage').' Formatohv','url'=>array('admin')),
	);
}
?>

<?php echo $this->renderPartial('_form', 
		array('model'=>$model,
			'datosPersonales'=>$datosPersonales,
			'formacionAcademica'=>$formacionAcademica,
			'educacionSuperior'=>$educacionSuperior,
			'educacionSuperior2'=>$educacionSuperior2,
			'educacionSuperior3'=>$educacionSuperior3,
			'educacionSuperior4'=>$educacionSuperior4,
			'educacionSuperior5'=>$educacionSuperior5,
			'idioma'=>$idioma,
			'idioma2'=>$idioma2,
                        'tiempoExperiencia'=>$tiempoExperiencia,
	)); ?>