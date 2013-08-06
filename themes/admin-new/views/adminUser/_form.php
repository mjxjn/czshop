            <dd>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'admin-user-form',
    'enableAjaxValidation'=>false,
)); ?>
            	<ul class="web">
                	<li>
                        <strong><?php echo $form->labelEx($model,'admin_name'); ?></strong>
                            <?php echo $form->textField($model,'admin_name',array('class'=>'text_input')); ?>
                            <span><?php echo $form->error($model,'admin_name'); ?></span>
                    </li>
                    <li>
                        <strong><?php echo $form->labelEx($model,'password'); ?></strong>
                            <?php echo $form->passwordField($model,'password',array('class'=>'text_input')); ?>
                            <span><?php echo $form->error($model,'password'); ?></span>
                    </li>
                </ul>
                <div class="input1">
                    <?php echo CHtml::imageButton(F::themeUrl()."/images/input_1.png"); ?>
                </div>
<?php $this->endWidget(); ?>
            </dd>