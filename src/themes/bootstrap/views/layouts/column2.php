<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>

    <div class="span3">
        <div id="sidebar">

<?php 
	
	$this->beginWidget('bootstrap.widgets.TbMenu', array(
		'type'=>'list',
		'items'=>$this->menu,
		'htmlOptions'=>array('class'=>'well'),
	));
	$this->endWidget();
?>

    </div>
</div>


<?php $this->endContent(); ?>