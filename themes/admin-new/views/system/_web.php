<li>
    <strong><?php echo $values['lang']?>：</strong>
    <?php if($values['type'] == "input"){ ?>
	 <input type="text" value="<?php echo $values['value']?>" onblur="if(this.value==''){this.value='Commerz Board'}" onfocus="this.value=''" class="text_input" />
    <?php }elseif ($values['type'] == "radio") { ?>
	<b>
                <label><input type="radio" name="RadioGroup1" value="是" id="RadioGroup1_0" /> 是 </label>
                <label><input type="radio" name="RadioGroup1" value="否" id="RadioGroup1_1" /> 否 </label>
            </b>	
    <?php }elseif ($values['type'] == "textarea") { ?>
    	<textarea><?php echo $values['value']?></textarea>
    <?php }elseif ($values['type'] == "select") { ?>
    	<select><option><?php echo $values['value']?></option></select>
   <?php } ?>
   <span><?php echo $values['info']?></span>
</li>