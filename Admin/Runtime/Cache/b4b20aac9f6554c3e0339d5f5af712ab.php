<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="__URL__" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
</form>

<div class="pageHeader">
</div>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="__URL__/add" target="navTab" mask="true"><span>新增</span></a></li>
			<li class="line">line</li>
			<li><a class="edit" href="__URL__/edit/id/{sid_user}" target="dialog" mask="true" warn="请选择用户"><span>编辑</span></a></li>
		</ul>
	</div>
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
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo['id']); ?>">
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

	<div class="panelBar" >
		<div class="pages">
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>

</div>