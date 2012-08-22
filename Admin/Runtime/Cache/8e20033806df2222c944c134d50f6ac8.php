<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
</form>

<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="__URL__" method="post">
	<div class="searchBar">
		<ul class="searchContent">
			<li>
				<label>姓名：</label>
				<input type="text" name="keywords"/>
			</li>
			<li>
			<select class="combox" name="province">
				<option value="">所有组</option>
				<option value="cbd">cbd</option>
				<option value="ksn">ksn</option>
				<option value="tieba">tieba</option>
			</select>
			</li>
		</ul>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				<li><a class="button" href="demo_page6.html" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>
			</ul>
		</div>
	</div>
	</form>
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="insert_info.html" target="navTab"><span>添加</span></a></li>
			<li><a class="delete" href="demo/common/ajaxDone.html?uid={sid_user}" target="ajaxTodo" title="确定要删除吗？" warn="请选择一条记录"><span>删除</span></a></li>
			<li><a class="edit" href="demo_page4.html?uid={sid_user}" target="navTab" warn="请选择一条记录"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="要导出这些记录吗?"><span>导出EXCEL</span></a></li>
			<li><a class="icon" href="javascript:$.printBox('w_list_print')"><span>打印</span></a></li>
		</ul>
	</div>

	<div layoutH="116" id="w_list_print">
	<table class="list" width="100%" targetType="navTab" >
		<thead>
			<tr>
				<th width="50" orderField="cpro" <?php if($_REQUEST["_order"] == 'cpro'): ?>class="<?php echo ($_REQUEST["_sort"]); ?>"<?php endif; ?>>产品线</th>
				<th width="40" orderField="pname" <?php if($_REQUEST["_order"] == 'pname'): ?>class="<?php echo ($_REQUEST["_sort"]); ?>"<?php endif; ?>>姓名</th>
				<th width="50" orderField="corg" <?php if($_REQUEST["_order"] == 'corg'): ?>class="<?php echo ($_REQUEST["_sort"]); ?>"<?php endif; ?>>所在组</th>
				<th            orderField="cname" <?php if($_REQUEST["_order"] == 'cname'): ?>class="<?php echo ($_REQUEST["_sort"]); ?>"<?php endif; ?>>内容</th>
				<th width="60" orderField="cplace" <?php if($_REQUEST["_order"] == 'cplace'): ?>class="<?php echo ($_REQUEST["_sort"]); ?>"<?php endif; ?>>地点</th>
				<th width="80" orderField="ctime" <?php if($_REQUEST["_order"] == 'ctime'): ?>class="<?php echo ($_REQUEST["_sort"]); ?>"<?php endif; ?>>评价</th>
				<th width="80" orderField="ctime" <?php if($_REQUEST["_order"] == 'ctime'): ?>class="<?php echo ($_REQUEST["_sort"]); ?>"<?php endif; ?>>日期</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo['cno']); ?>">
				<td><?php echo ($vo['cpro']); ?></td>
				<td><?php echo ($vo['pname']); ?></td>
				<td><?php echo ($vo['corg']); ?></td>
				<td><?php echo ($vo['cname']); ?></td>
				<td><?php echo ($vo['cplace']); ?></td>
				<td><?php echo ($vo['ctime']); ?></td>
				<td><?php echo (date("Y-m-d H:i",$vo['ctime'])); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	</div>
	
	<div class="panelBar" >
		<div class="pages">
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>

</div>