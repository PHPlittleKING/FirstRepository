<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>文章列表--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/Public/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="//at.alicdn.com/t/font_tnyc012u2rlwstt9.css" media="all" />
	<link rel="stylesheet" href="/Public/css/news.css" media="all" />
	<!-- 分页样式 -->
	 <!-- <style>
		.page a,span
		{
		    width: auto;
		    height: 10px;
		    display: inline-block;
		    border: 1px solid #BBDDE5;
		    text-align: center;
		    line-height: 10px;
		    margin: 0px 3px;
		    padding: 5px 5px;
		    text-decoration: none;
  		}

  		.page .current
  		{
    		border: 1px solid #DB9181;
  		}  
	</style>
	-->
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn linksAdd_btn" style="background-color:#5FB878" href="<?php echo U('Link/add');?>">添加链接</a>
		</div>
		<div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div>
		<!-- <div class="layui-inline">
			<div class="layui-form-mid layui-word-aux">本页面刷新后除新添加的链接外所有操作无效，关闭页面所有数据重置</div>
		</div> -->
	</blockquote>
	<div class="layui-form links_list">
	  	<table class="layui-table">
		    <colgroup>
				<col width="5%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="10%">
				<col width="13%">
		    </colgroup>
		    <thead>
				<tr>
					<th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th>
					<th>网站名称</th>
					<th>网站地址</th>
					<th>站长邮箱</th>
					<th>添加时间</th>
					<th>操作</th>
				</tr> 
				<!-- <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>				
					<td></td>
					<td><?php echo ($val["link_name"]); ?></td>
					<td><a target="_blank" href="<?php echo ($val["link_address"]); ?>"><?php echo ($val["link_address"]); ?></a></td>
					<td><?php echo ($val["admin_email"]); ?></td>
					<td><?php echo ($val["link_time"]); ?></td>
					<td></td>
					<td><a href="#"></a>修改 | <a href="#"></a>删除</td>
				</tr><?php endforeach; endif; ?> -->
		    </thead>
		    <tbody class="links_content"></tbody>
		</table>
	</div>
	<!-- <div class="page" align="right">
		<?php echo ($page); ?>
	</div> -->
	<div id="page"></div>
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/page/linksList.js"></script>
</body>
</html>