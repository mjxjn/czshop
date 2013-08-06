<div class="content">
    <div class="site">
        Commerz Board <a href="#">管理中心</a> > 后台管理团队
    </div>
   	<div class="install mt10">
    	<dl>
        	<dt><?php echo CHtml::link('团队列表',array('adminuser/index'),array('class'=>'hover')); ?><?php echo CHtml::link('添加团队',array('adminuser/create')); ?></dt>
            <dd>
            	<div class="login mt10">
                	<h3>后台管理团队列表</h3>
                    <div class="table">
                    	<table>
                        	<tr>
                                <th>用户名</th>
                                <th>最后登录时间</th>
                                <th>共计登录次数</th>
                                <th>操作</th>
                            </tr>
                            <?php foreach($adminUserList as $row):?>
                            <tr>
                            	<td><?php echo $row['admin_name'] ?></td>
                            	<td><?php echo F::format_date($row['last_login']); ?></td>
                                <td><?php echo $row['login_count'] ?></td>
                                <td>
                                    <?php 
                                        if($row['admin_id']==1) {
                                            echo "超级管理员不可编辑"; 
                                        }else{ 
                                    ?>
                                    <a href="#">编辑</a><a href="#">权限设置</a><a href="#">删除</a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
                <div class="page">
                        <?php
                            $this->widget('CLinkPager',array(
                                    'selectedPageCssClass'=>'hover',
                                    'hiddenPageCssClass'=>'',
                                    'header'=>'',
                                    'firstPageLabel' => '首页',
                                    'lastPageLabel' => '尾页',
                                    'prevPageLabel' => '上一页',
                                    'nextPageLabel' => '下一页',
                                    'pages' => $pages,
                                    'maxButtonCount'=>13,
                                    'htmlOptions'=>array(
                                            'class'=>'',
                                            'id'=>'',
                                        )
                                )
                            );
                        ?>
                </div>
            </dd>
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
	$(".table tr:odd").css("background","#fff");
});
</script>