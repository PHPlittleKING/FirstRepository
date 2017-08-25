<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户总数--layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="/Public/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="//at.alicdn.com/t/font_tnyc012u2rlwstt9.css" media="all" />
	<link rel="stylesheet" href="/Public/css/user.css" media="all" />
</head>
<body class="childrenBody">
	<blockquote class="layui-elem-quote news_search">
		<div class="layui-inline">
		    <div class="layui-input-inline">
		    	<input type="text" value="" placeholder="请输入关键字" class="layui-input search_input">
		    </div>
		    <a class="layui-btn search_btn">查询</a>
		</div>
		<!-- <div class="layui-inline">
			<a class="layui-btn layui-btn-normal usersAdd_btn" href="<?php echo U('Admin/add');?>">添加用户</a>
		</div> -->
		<!-- <div class="layui-inline">
			<a class="layui-btn layui-btn-danger batchDel">批量删除</a>
		</div> -->
	<!-- 	<div>
			<select name="" id="" placeholder="请选择删除的数据" class="layui-btn layui-btn-danger">
				<option value="删除一个月以前的数据">删除一个月以前的数据</option>
				<option value="删除三个月以前的数据">删除三个月以前的数据</option>
				<option value="删除六个月以前的数据">删除六个月以前的数据</option>
			</select>
		</div> -->
		<div class="layui-inline">
			<!-- <div class="layui-form-mid layui-word-aux">　本页面刷新后除新添加的文章外所有操作无效，关闭页面所有数据重置</div> -->
		</div>
	</blockquote>
	<div class="layui-form users_list">
	  	<table class="layui-table">
		    <colgroup>
				<!-- <col width="50"> -->
				<col width="10%">
				<col width="15%">
				<col width="20%">
				<col width="18%">
		    </colgroup>
		    <thead>
				<tr>
					<!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
					<!-- <th></th> -->
					<th>日志添加的时间</th>
					<th>添加日志的管理员id</th>
					<th>操作的内容</th>
					<th>操作人的本地ip地址</th>
				</tr>
				<!-- 遍历数据库中内容 -->
			<?php if(is_array($logList)): foreach($logList as $key=>$val): ?><tr>
				 	<!-- <td></td> -->
				 	<td><?php echo ($val["log_time"]); ?></td>
				 	<td><?php echo ($val["admin_id"]); ?></td>
				 	<td><?php echo ($val["log_info"]); ?></td>
				 	<td><?php echo ($val["ip_address"]); ?></td>
				 </tr><?php endforeach; endif; ?>
		    </thead>
		    <tbody class="users_content"></tbody>
		</table>
	</div>
	<div id="page"></div>
	<script type="text/javascript" src="/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/Public/allUsers.js"></script>
</body>
</html>