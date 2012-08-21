<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="w_list.html">
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="${model.numPerPage}" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
	<input type="hidden" name="orderDirection" value="${param.orderDirection}" />
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" action="demo_page1.html" method="post">
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
		<!--
		<table class="searchContent">
			<tr>
				<td>
					我的客户：<input type="text"/>
				</td>
				<td>
					<select class="combox" name="province">
						<option value="">所有省市</option>
						<option value="北京">北京</option>
						<option value="上海">上海</option>
						<option value="天津">天津</option>
						<option value="重庆">重庆</option>
						<option value="广东">广东</option>
					</select>
				</td>
			</tr>
		</table>
		-->
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
	<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc">
		<thead>
			<tr>
				<th width="80" orderField="name" class="asc">产品线</th>
				<th width="100" orderField="num" class="desc">姓名</th>
				<th width="100">所在组</th>
				<th>内容</th>
				<th width="100">地点</th>
				<th width="100">评价</th>
				<th width="100">日期</th>
			</tr>
		</thead>
		<tbody>
			<tr target="sid_user" rel="1">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="2">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="3">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="4">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="5">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="6">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="7">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="8">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="9">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="10">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="11">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="12">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="13">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="14">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="15">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="16">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="17">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="18">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="19">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="20">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="21">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="22">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="23">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="24">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
			<tr target="sid_user" rel="25">
				<td>map</td>
				<td>某人</td>
				<td>cbd</td>
				<td>某些内容巴拉巴拉</td>
				<td>金碧芙蓉</td>
				<td>good</td>
				<td>2012-12-24 10:59:00</td>
			</tr>
		</tbody>
	</table>
	</div>
	
	<div class="panelBar" >
		<div class="pages">
			<span>显示</span>
			<select name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共23条</span>
		</div>
		
		<div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="2"></div>

	</div>

</div>