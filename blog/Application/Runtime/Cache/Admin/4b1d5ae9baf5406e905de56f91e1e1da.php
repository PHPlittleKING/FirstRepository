<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>文章标题</title>
		<base href="/Public/">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">
		
		<link rel="stylesheet" href="css/layui.css" media="all" />
		<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
		<style>
		*{
			size:12px;

		}
	
		</style>
	</head>

	<body>
		<div style="margin: 15px;">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
				<legend align="center" style="size:20px">分类添加</legend>
			</fieldset>

			<form class="layui-form" action="<?php echo U('Sort/add');?>" method="post">
				<div class="layui-form-item">
					<label class="layui-form-label">分类名称</label>
					<div class="layui-input-block">
						<input type="text" name="sort_name" lay-verify="title" autocomplete="off" placeholder="请输入分类名称" class="layui-input">
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-input-block">
						<button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
						<button type="reset" class="layui-btn layui-btn-primary">重置</button>
					</div>
				</div>
			</form>
		</div>
		<script type="text/javascript" src="js/layui.js"></script>
		
	</body>

</html>