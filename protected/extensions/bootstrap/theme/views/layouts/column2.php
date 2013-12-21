<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row" style="padding-left:0px; padding-right: 0px;">
    <div class="col-md-9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="col-md-3">
        <div id="sidebar">
        <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>Yii::t('app','Operations'),
				'titleCssClass'=>'panel-title',
				'decorationCssClass'=>'panel-heading',
				'contentCssClass'=>'panel-body',
				'htmlOptions'=>array('class'=>'panel panel-info')
            ));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'items'=>$this->menu,
                //'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
        ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>