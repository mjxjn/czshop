<div class="content">
    <div class="site">
        Commerz Board <a href="#">管理中心</a> > 后台首页
    </div>
   	<div class="install mt10">
    	<dl>
        	<dt><?php echo CHtml::link('团队列表',array('adminuser/index')); ?><?php echo CHtml::link('添加团队',array('adminuser/create'),array('class'=>'hover')); ?></dt>
             <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
        </dl>
    </div>
    <div class="copy">
        <?php echo Yii::app()->params['copy'];?>
    </div>
</div>
<script>
$(function(){
	$(".odd li:odd").css("background","#fff");
	$(".even li:even").css("background","#fff");
});
</script>