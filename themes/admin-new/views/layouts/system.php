<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<?php
$this->webmenu=array(
    array('label'=>'后台首页','url'=>'#','linkOptions'=>array('class'=>'n1')),
    array('label'=>'站点设置','url'=>'#','linkOptions'=>array('class'=>'n2')),
    array('label'=>'注册与登录设置','url'=>'#','linkOptions'=>array('class'=>'n3')),
    array('label'=>'邮件服务器设置','url'=>'#','linkOptions'=>array('class'=>'n4')),
    array('label'=>'短信服务配置','url'=>'#','linkOptions'=>array('class'=>'n5')),
);
$this->themesmenu=array(
    array('label'=>'主题设置','url'=>'#','linkOptions'=>array('class'=>'n6')),
    array('label'=>'支付平台设置','url'=>'#','linkOptions'=>array('class'=>'n7')),
    array('label'=>'物流配送方式设置','url'=>'#','linkOptions'=>array('class'=>'n8')),
    array('label'=>'地区管理','url'=>'#','linkOptions'=>array('class'=>'n9')),
);
$this->membermenu=array(
    array('label'=>'后台管理团队','url'=>array('/adminuser/index'),'linkOptions'=>array('class'=>'n10')),
    array('label'=>'管理团队日志','url'=>'#','linkOptions'=>array('class'=>'n11')),
    array('label'=>'数据库管理','url'=>'#','linkOptions'=>array('class'=>'n12')),
    array('label'=>'文件权限检查','url'=>'#','linkOptions'=>array('class'=>'n13')),
    array('label'=>'系统文件校验','url'=>'#','linkOptions'=>array('class'=>'n14')),
);
?>
    <div class="side">
        <div class="head">
            <img src="<?php echo F::themeUrl(); ?>/images/head.jpg" width="43" height="43" alt="" />
        </div>
        <h3><img src="<?php echo F::themeUrl(); ?>/images/ico_6.png" />管理员</h3>
        <?php
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->webmenu,
                'htmlOptions'=>array('class'=>''),
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->themesmenu,
                'htmlOptions'=>array('class'=>''),
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->membermenu,
                'htmlOptions'=>array('class'=>''),
            ));
        ?>
    </div>
    
    <div id="Container">
        <div class="ico_left"><img src="<?php echo F::themeUrl(); ?>/images/ico_8.png" /></div> 
        <?php echo $content; ?>
    </div>
    

<?php $this->endContent(); ?>
