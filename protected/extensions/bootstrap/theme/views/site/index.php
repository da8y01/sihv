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
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/encuesta/admin');?>">
				<center>
				<i class="fa fa-files-o fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Administrar Encuestas</p>
				</center>
			</a>
		</div>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;" id="dependencia_content">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/familia/admin');?>">
				<center>
				<i class="fa fa-dropbox fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Administrar Familias</p>
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
		<?php }else if( Yii::app()->user->checkAccess('rol_gestor') ) { ?>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;" id="dependencia_content">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/familia/admin');?>">
				<center>
				<i class="fa fa-dropbox fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Mis Familias</p>
				</center>
			</a>
		</div>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;" id="dependencia_content">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/familia/reportes');?>">
				<center>
				<i class="fa fa-file fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Reportes Familias</p>
				</center>
			</a>
		</div>
		<?php }else if( Yii::app()->user->checkAccess('rol_encuestador') ) { ?>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/encuesta/diligenciar');?>">
				<center>
				<i class="fa fa-user fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Diligenciar Encuestas</p>
				</center>
			</a>
		</div>
		<div class="col-xs-3" style="padding-bottom: 15px;width:130px;">
			<a class="thumbnail cursito" href="<?php echo $this->createUrl('/encuesta/diligenciar');?>">
				<center>
				<i class="fa fa-list-ol fa-4x"></i>
				<p class="text_thumbnail" style="text-align:center;">Mis Encuestas</p>
				</center>
			</a>
		</div>
		<?php } ?>
	</div>
</div>
<?php }?>