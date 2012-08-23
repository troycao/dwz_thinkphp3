<?php if (!defined('THINK_PATH')) exit();?>
<script language="JavaScript">
<!--
function checkName(){
	ThinkAjax.send('__URL__/checkAccount/','ajax=1&account='+$F('account'));
}
//-->
</script>


<div class="pageContent">
	<p><?php echo ($vo["cname"]); echo ($_GET['id']); ?></p>
	<form method="post" action="__APP__/Pingjia/insert" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
		<input type="hidden" name="cid" value="<?php echo $_GET['id'] ?>"/>
		<input type="hidden" name="pname" value="<?php echo $_SESSION[('loginUserName')] ?>"/>
		<div class="pageFormContent" layoutH="58">
			<div class="unit">
				<label>串讲题目:</label>
				<input type="text" readonly="readonly" value=<?php echo ($vo["cname"]); ?> >
			</div>
			<div class="unit">
				<label>问题：</label>
				<textarea name="question" rows="1" cols="57"></textarea>
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