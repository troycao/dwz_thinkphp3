<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">

	<form method="post" action="__URL__/insert/navTabId/__MODULE__" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<input type="hidden" name="user_id" value="<?php echo $_SESSION[C('USER_AUTH_KEY')] ?>"/> 
		<input type="hidden" name="ajax" value="1">
		<div class="pageFormContent" layoutH="58">

			<div class="unit">
				<label>组名：</label>
				<input type="text" class="required alphanumeric"  name="name">
			</div>
			
			<div class="unit">
				<label>上级组：</label>
				<select name="pid">
				    <option value="0" selected >无上级组</option>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><option value="<?php echo ($list["id"]); ?>" ><?php echo ($list["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
			
			<div class="unit">
				<label>组状态：</label>
				<select   name="status">
					<option value="1">启用</option>
					<option value="0">禁用</option>
				</select>
			</div>
			
			<div class="unit">
				<label>描 述：</label>
				<textarea class="required alphanumeric" name="remark"  rows="5" cols="57"></textarea>
			</div>
		</div>
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">Submit</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">Cancel</button></div></div></li>
			</ul>
		</div>
	</form>

</div>