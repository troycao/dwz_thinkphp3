<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php echo (C("sitename")); ?></title>

<link href="__PUBLIC__/dwz/themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/dwz/themes/css/core.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<!--[if IE]>
<link href="__PUBLIC__/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script src="__PUBLIC__/dwz/js/speedup.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery-1.7.1.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery.cookie.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery.validate.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>
<script src="__PUBLIC__/xheditor/xheditor-1.1.9-zh-cn.min.js" type="text/javascript"></script>


<script src="__PUBLIC__/dwz/js/dwz.core.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.util.date.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.validate.method.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.barDrag.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.drag.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.tree.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.accordion.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.ui.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.theme.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.switchEnv.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.alertMsg.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.contextmenu.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.navTab.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.tab.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.resize.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.dialog.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.dialogDrag.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.sortDrag.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.cssTable.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.stable.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.taskBar.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.ajax.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.pagination.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.database.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.datepicker.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.effects.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.panel.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.checkbox.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.history.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.combox.js" type="text/javascript"></script>
<script src="__PUBLIC__/dwz/js/dwz.print.js" type="text/javascript"></script>



<script src="js/dwz.regional.zh.js" type="text/javascript"></script>
<script type="text/javascript">
function fleshVerify(){
	//重载验证码
	$('#verifyImg').attr("src", '__APP__/Public/verify/'+new Date().getTime());
}
function dialogAjaxMenu(json){
	dialogAjaxDone(json);
	if (json.statusCode == DWZ.statusCode.ok){
		$("#sidebar").loadUrl("__APP__/Public/menu");
	}
}
function navTabAjaxMenu(json){
	navTabAjaxDone(json);
	if (json.statusCode == DWZ.statusCode.ok){
		$("#sidebar").loadUrl("__APP__/Public/menu");
	}
}
$(function(){
	DWZ.init("__PUBLIC__/dwz/dwz.frag.xml", {
		loginUrl:"__APP__/Public/login_dialog", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"__APP__/Public/login",	//跳到登录页面
		statusCode:{ok:1,error:0},
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"__PUBLIC__/dwz/themes"});
		}
	});
});
</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="__APP__">Logo</a>
				<ul class="nav">
					<li><a href="__APP__/Public/main" target="dialog" width="580" height="360" rel="sysInfo">系统消息</a></li>
					<li><a href="__APP__/Public/password/" target="dialog" mask="true">修改密码</a></li>
					<li><a href="__APP__/Public/profile/" target="dialog" mask="true">修改资料</a></li>
					<li><a href="__APP__/Public/logout/">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>
		</div>
		
		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<!--		
<div class="accordion" fillSpace="sideBar">
	<div class="accordionHeader">
		<h2><span>Folder</span>应用</h2>
	</div>
	<div class="accordionContent">
	
		<ul class="tree treeFolder">
			<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li>
			<?php if((strtolower($item['name'])) != "public"): if((strtolower($item['name'])) != "index"): if(($item['access']) == "1"): ?><li><a href="__APP__/<?php echo ($item['name']); ?>/index/" target="navTab" rel="<?php echo ($item['name']); ?>"><?php echo ($item['title']); ?></a></li><?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>

		</ul>

	</div>
</div>
 -->
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

				<div class="accordion" fillSpace="sidebar">
					<div class="accordionHeader">
						<h2><span>Folder</span>主要功能</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder expand">
							<li><a>上线相关</a>
								<ul>
								<li><a href="http://nsop-oncall.baidu.com/sche/wwwroot/task_record.php" target="navTab" rel="paiqi">上线排期</a></li>
								<li><a href="http://nsop-oncall.baidu.com/sx.php" target="navTab" rel="tongji">上线统计</a></li>
								</ul>
							</li>
									
							<li><a>EIP相关</a>
								<ul>
								<li><a href="http://nsop-oncall.baidu.com/eip.php" target="navTab" rel="EIP">EIP系统</a></li>
								</ul>
							</li>

							<li><a>串讲信息</a>
								<ul>
									<li><a href="__APP__/Chuanjiang/w_list" target="navTab" rel="chuanjiang">串讲汇总</a></li>
									<li><a href="__APP__/Chuanjiang/insert_info" target="navTab" rel="page4" fresh="false">串讲信息录入</a></li>
								</ul>
							</li>

							<li><a>其他</a>
								<ul>
									<li><a href="http://nsop-oncall.baidu.com/kpi_index.php" target="navTab" rel="kpi">KPI</a></li>
									<li><a href="http://nsop-oncall.baidu.com/rms.php" target="navTab" rel="beijiguanli">备机管理平台</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:void(0)"><span><span class="home_icon">主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:void(0)">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<div class="right">
								<p><?php echo (date('Y-m-d g:i a',time())); ?></p>
							</div>
							<p><span><?php echo (C("sitename")); ?></span></p>  
							<p>Welcome, <?php echo ($_SESSION['loginUserName']); ?></p>
						</div>
						<div class="pageFormContent" layoutH="80">
							<h2>nsop-oncall支持平台</h2>
							<div class="divider">
							</div>
							<h2>介绍:</h2>
							<div class="unit">
							<p>这是介绍</p>
							</div>
							<div class="unit">
							<p>这是介绍2
							</div>
							<div class="unit">
							<p>这是介绍3
							</div>
							<div class="divider">
							</div>
							<h2>服务请联系:</h2>
							<p>somebody</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	
	<div id="footer">Copyleft &copy; 2012 <a href="__APP__" target="dialog">NSOP_CBD</a> Hi: 1253969</div>


</body>
</html>