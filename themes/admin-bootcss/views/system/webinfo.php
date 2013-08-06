<div>
	<ul class="breadcrumb">
		<li>
			<a href="#">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#">Area</a>
		</li>
	</ul>
</div>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-user"></i> Area</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="./admin.php?r=system/saveSystem" method="post">
				<input type="hidden" value="1" name="groupid">
		    		<fieldset>
				  <div class="control-group">
					<label class="control-label"><?php echo $list['shop_name']['lang']; ?>：</label>
					<div class="controls"><input class="input-xlarge focused" name="shop_name" type="text" value="<?php echo $list['shop_name']['value']; ?>"><span class="help-inline"><?php echo $list['shop_name']['info']; ?></span></div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><?php echo $list['company_name']['lang']; ?>：</label>
					<div class="controls"><input class="input-xlarge focused" name="company_name" type="text" value="<?php echo $list['company_name']['value']; ?>"><span class="help-inline"><?php echo $list['company_name']['info']; ?></span></div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><?php echo $list['shop_url']['lang']; ?>：</label>
					<div class="controls"><input class="input-xlarge focused" name="shop_url" type="text" value="<?php echo $list['shop_url']['value']; ?>"><span class="help-inline"><?php echo $list['shop_url']['info']; ?></span></div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><?php echo $list['shop_admin']['lang']; ?>：</label>
					<div class="controls"><input class="input-xlarge focused" name="shop_admin" type="text" value="<?php echo $list['shop_admin']['value']; ?>"><span class="help-inline"><?php echo $list['shop_admin']['info']; ?></span></div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><?php echo $list['shop_record']['lang']; ?>：</label>
					<div class="controls"><input class="input-xlarge focused" name="shop_record" type="text" value="<?php echo $list['shop_record']['value']; ?>"><span class="help-inline"><?php echo $list['shop_record']['info']; ?></span></div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><?php echo $list['shop_close']['lang']; ?></label>
					<div class="controls">
					  <label class="radio"><input type="radio" name="shop_close" value="1" <?php if($list['shop_close']['value'] == '0' ){echo checked;} ?>>是</label>
					  <div style="clear:both"></div>
					  <label class="radio"><input type="radio" name="shop_close" value="1" <?php if($list['shop_close']['value'] == '1' ){echo checked;} ?>>否</label>
					</div>
				  </div>
				  <div class="control-group">
				  	<label class="control-label"><?php echo $list['statistics_code']['lang']; ?>：</label>
				  	<div class="controls">
						<textarea rows="3" name="statistics_code"><?php echo $list['statistics_code']['value']; ?></textarea><span class="help-inline"><?php echo $list['statistics_code']['info']; ?></span>
				  	</div>
				</div>
				</fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Save changes</button>
					<button type="reset" class="btn">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>