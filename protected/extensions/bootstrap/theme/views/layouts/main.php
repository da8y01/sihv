<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="<?php echo Yii::app()->language;?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sie.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/datepicker/css/datepicker.css" />
	
	<?php 
		$importador = Yii::app()->getClientScript(); 
		
		$importador->scriptMap = array(
			'jquery.js' => Yii::app()->request->baseUrl.'/js/jquery/jquery-1.10.2.min.js',
		);
		
		$importador->registerCoreScript('jquery.ui');
		$importador->registerScriptFile(Yii::app()->request->baseUrl.'/js/chosen/chosen.jquery.js');
		$importador->registerScriptFile(Yii::app()->request->baseUrl.'/js/chosen/ajax-chosen.js');
		$importador->registerScriptFile(Yii::app()->request->baseUrl.'/datepicker/js/bootstrap-datepicker.js');
	?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
	
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="font-family: 'Open Sans', sans-serif; background-color:#F2F2F2;">

<div class="container" id="page">

	<div id="header">
		<div id="logo">
			<div style="float:left; width:7%;">
				<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/logo150px.jpg', 'DORE', array('width'=> '60px','height'=> '65px')); ?>
			</div>
			<div style="float:left; ; width:90%;">
				<?php echo CHtml::encode(Yii::app()->name); ?> <span style="font-size: 50%;"> - Alcald&iacute;a de La Dorada - Caldas "Haciendo La Diferencia"</span>
			</div>
			
		</div>
	</div><!-- header -->
	
	<?php $this->widget('bootstrap.widgets.TbMenu',array(
	'type'=>'pills',
	'stacked'=>false, // whether this is a stacked menu
	'htmlOptions'=>array('id'=>'menu_dqingenieria','style'=>'clear: both;padding-top: 5px;'),
    'items'=>array(
		array('label'=>'Home', 'url'=>array('/site/index')),
		array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
		array('label'=>'Contact', 'url'=>array('/site/contact')),
		array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
    ),
	)); ?>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>' <i class="fa fa-hand-o-right"></i>',
			'encodeLabel'=>false,
			'htmlOptions'=>array('style'=>'margin-top: 5px;'),
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<div class="info" style="text-align: left;">
	<?php
		$flashMessages = Yii::app()->user->getFlashes();
		if ($flashMessages) {
			echo '<ul class="flashes">';
			foreach($flashMessages as $key => $message) {
				echo '<li><div class="flash-' . $key . '">' . $message . "</div></li>\n";
			}
			echo '</ul>';
		}
	?>
	</div>
	
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Daniel Andres Gallo Garcia.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
<?php
	Yii::app()->clientScript->registerScript(
		'myHideEffect',
		'$(".info").animate({opacity: 1.0}, 2000).fadeOut("slow");',
		CClientScript::POS_READY
	);
?>
