<div class="content">
    <div class="site">
        Commerz Board <a href="#">管理中心</a> > 后台首页
    </div>
    <div class="install mt10">
        <dl>
            <dt><a href="./admin.php?r=system/index&groupid=1" <?php echo $groupid == 1 ? "class='hover'" : '' ;?>>站点信息</a>
                <a href="./admin.php?r=system/index&groupid=2" <?php echo $groupid == 2 ? "class='hover'" : '' ;?>>基本设置</a>
                <a href="./admin.php?r=system/index&groupid=3" <?php echo $groupid == 3 ? "class='hover'" : '' ;?>>购物设置</a>
                <a href="./admin.php?r=system/index&groupid=4" <?php echo $groupid == 4 ? "class='hover'" : '' ;?>>显示设置</a>
                <a href="./admin.php?r=system/index&groupid=5" <?php echo $groupid == 5 ? "class='hover'" : '' ;?>>商品设置</a>
            </dt>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'admin-user-form',
                'enableAjaxValidation'=>false,
            )); ?>
            <dd>
                <ul class="web">
                   <?php  foreach ($model as $key=>$values ){ ?>
                        <?php $this->renderPartial('_web', array('values' => $values,'groupid' => $groupid)); ?>
                    <?php } ?>
                </ul>
                <div class="input1">
                    <input type="image" src="<?php echo F::themeUrl(); ?>/images/input_1.png" />
                </div>
            </dd>
            <?php $this->endWidget(); ?>
        </dl>
    </div>
    <div class="copy">
        Powered by Commerz 1.0 版权所有 © 2013 迪米盒子网络科技有限公司，并保留所有权利。
    </div>
</div>
<script>
$(function(){
    $(".odd li:odd").css("background","#fff");
    $(".even li:even").css("background","#fff");
});
</script>
