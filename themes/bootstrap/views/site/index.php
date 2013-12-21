<?php 
$this->pageTitle=Yii::app()->name;
$this->breadcrumbs=array(
	'Incio',
);
	if(Yii::app()->user->isGuest){?>
<?php
/* @var $this SiteController */
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>
<?php $this->endWidget(); ?>
<div class="jumbotron hidden-xs hidden-sm" style="padding:30px;">
	<div class="row">
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/formatohv/create');?>">
				<center>
				<i class="fa fa-user fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Diligenciar Hoja de vida</p>
				</center>
			</a>
		</div>
	</div>
</div>
<?php }else{?>
<div class="jumbotron hidden-xs hidden-sm" style="padding:30px;">
	<div class="row">
		<?php if( Yii::app()->user->checkAccess('rol_admin') ) { ?>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/usuario/admin');?>">
				<center>
				<i class="fa fa-users fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Administrar Usuarios</p>
				</center>
			</a>
		</div>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/pais/admin');?>">
				<center>
				<i class="fa fa-files-o fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Administrar Paises</p>
				</center>
			</a>
		</div>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;" id="dependencia_content">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/gii');?>">
				<center>
				<i class="fa fa-windows fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Modulo Generar</p>
				</center>
			</a>
		</div>
		<?php }else if( Yii::app()->user->checkAccess('rol_recursosHumanos') ) { ?>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;" id="dependencia_content">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/formatohv/admin');?>">
				<center>
				<i class="fa fa-dropbox fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Hojas de vida</p>
				</center>
			</a>
		</div>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;" id="dependencia_content">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/formatohv/reportes');?>">
				<center>
				<i class="fa fa-file fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Reportes</p>
				</center>
			</a>
		</div>
		<?php } ?>
	</div>
</div>
<?php }?>