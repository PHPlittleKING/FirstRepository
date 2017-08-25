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

  <!-- 分页样式 -->
  <style>
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
      <a class="layui-btn layui-btn-normal usersAdd_btn" href="<?php echo U('Label/add');?>">添加标签</a>
    </div>
    <div class="layui-inline">
      <a class="layui-btn layui-btn-danger batchDel">批量删除</a>
    </div>
    <div class="layui-inline">
      <!-- <div class="layui-form-mid layui-word-aux">　本页面刷新后除新添加的文章外所有操作无效，关闭页面所有数据重置</div> -->
    </div>
  </blockquote>
  <div class="layui-form users_list">
      <table class="layui-table">
        <colgroup>
        <col width="50">
        <col width="15%">
        </colgroup>
        <thead>
        <tr>
          <!-- <th><input type="checkbox" name="" lay-skin="primary" lay-filter="allChoose" id="allChoose"></th> -->
          <!-- <th></th> -->
          <th>标签名</th>
          <th>操作</th>
        </tr>
        <!-- 遍历数据库中内容 -->
      <?php if(is_array($list)): foreach($list as $key=>$val): ?><tr>
          <!-- <td></td> -->
          <td><?php echo ($val["label_name"]); ?></td>
          <td><a href="#">编辑</a> | <a href="<?php echo U('Label/del');?>?id=<?php echo ($val["label_id"]); ?>">删除</a></td>
         </tr><?php endforeach; endif; ?>
        </thead>
        <tbody class="users_content"></tbody>
    </table>
  </div>
  <div class="page" align="right">
    <?php echo ($page); ?>
  </div>
  <div id="page"></div>
  <script type="text/javascript" src="/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/Public/page/allLabel.js"></script>
</body>
</html>