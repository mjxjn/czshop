<div class="content">
    <div class="site">
        Commerz Board <a href="#">管理中心</a> > 后台首页
    </div>
    <div class="install mt10">
        <dl>
            <dt><a href="home1.2.1.html" class="hover">站点信息</a><a href="home1.2.2.html">基本设置</a><a href="home1.2.3.html">购物设置</a><a href="home1.2.4.html">显示设置</a><a href="home1.2.5.html">商品设置</a></dt>
            <dd>
                <ul class="web">
                   <?php  foreach ($model as $key=>$values ){ ?>
                        <?php $this->renderPartial('_web', array('values' => $values)); ?>
                    <?php } ?>
                </ul>
                <div class="input1">
                    <input type="image" src="images/input_1.png" />
                </div>
            </dd>
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
