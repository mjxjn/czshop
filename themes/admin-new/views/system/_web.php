<li>
    <strong><?php echo $values['info']?>：</strong>
    <input type="hidden" name="groupid" value="<?php echo $groupid ?>"/>
    <?php if($values['type'] == "input"){ ?>
        <?php echo CHtml::textField(get_class($values) . '[' . $values['groupid'] . '][' . $values['varname'] . ']', $values['value'], array('class'=>'text_input')); ?>
    <?php }elseif ($values['type'] == "radio") { ?>
        <b>
            <?php $radioButtonList = CHtml::radioButtonList(get_class($values) . '[' . $values['groupid'] . '][' . $values['varname'] . ']', '',array('1'=>'是','0'=>'否'), array('template' => '<label>{input}{label}</label>','separator'=>'&nbsp;')); 
            echo preg_replace('/<(\/?span.*?)>/','',$radioButtonList);
            ?>
        </b>
        <!-- <b>
            <label><input type="radio" name="RadioGroup1" value="是" id="RadioGroup1_0" /> 是 </label>
            <label><input type="radio" name="RadioGroup1" value="否" id="RadioGroup1_1" /> 否 </label>
        </b> -->
    <?php }elseif ($values['type'] == "textarea") { ?>
        <?php echo CHtml::textArea(get_class($values) . '[' . $values['groupid'] . '][' . $values['varname'] . ']', $values['value'], array('class'=>'text_input')); ?>
    <?php }elseif ($values['type'] == "select") { ?>
    	<select><option><?php echo $values['value']?></option></select>
   <?php } ?>
   <span><?php echo $values['lang']?></span>
</li>