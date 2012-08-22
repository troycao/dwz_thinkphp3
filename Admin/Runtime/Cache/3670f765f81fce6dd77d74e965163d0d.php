<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="__URL__/insert" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);">
		<div class="pageFormContent nowrap" layoutH="97">
			<dl>
				<dt>姓名：</dt>
				<dd>
					<input type="text" name="pname" maxlength="50" size='30' class="required" />
					<span class="info">&nbsp请输入姓名</span>
				</dd>
			</dl>
			<dl>
				<dt>时间: </dt>
				<dd>
				<input type="text" name="ctime" class="date" size="28" format="yyyy-MM-dd HH:mm" />
				<a class="inputDateButton"  href="javascript:;">选择</a>
				<span class="info">&nbsp请选择时间</span>
				</dd>
			</dl>
			<dl>
				<dt>地点: </dt>
				<dd>
				<input type="text" name="cplace" class="required" size="30"  />
				<span class="info">&nbsp请输入会议室地点</span>
				</dd>
			<dl>
			<dl>
				<dt>串讲题目: </dt>
				<dd>
				<input type="text" name="cname" size="30" maxlength="50" class="required"  />
				<span class="info">&nbsp请输入串讲题目</span>
				</dd>
			</dl>
				<dt>产品线名称：</dt>
				<dd>
				<!-- <input type="hidden" name="orgLookup.id" value="${orgLookup.id}" />
				<input type="text" size='30' class="required textInput valid"  name="orgLookup.orgName" value="" suggestFields="orgGroup,orgName" suggestUrl="__APP__/Chuanjiang/db_lookupSuggest" lookupGroup="orgLookup" autocomplete="off" /> -->
				<input type="text" size="30" name="cpro" class="required" />
				<span class="info">&nbsp请输入串讲相关产品线名称（noah中英文）</span>
			</dd>
			</dl>
			<dl>
				<dt>产品线所在组: </dt>
				<dd>
				<input type="text" size="30" name="corg" class="required" />
				<span class="info">&nbsp请输入相应的组的名称(英文缩写)</span>
				<!-- <input type="text" size="30" name="orgLookup.orgGroup" class="readonly" readonly="readonly"  /> -->
				</dd>
			</dl>
		</div>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>
			</ul>
		</div>
	</form>
</div>