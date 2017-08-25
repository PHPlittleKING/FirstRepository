layui.config({
	base : "js/"
}).use(['form','layer','jquery','layedit','laydate'],function(){
	var form = layui.form(),
		layer = parent.layer === undefined ? layui.layer : parent.layer,
		laypage = layui.laypage,
		layedit = layui.layedit,
		laydate = layui.laydate,
		$ = layui.jquery;

	//创建一个编辑器
 	var editIndex = layedit.build('newsContent');
 	var addNewsArray = [],addNews;
 	form.on("submit(addNews)",function(data){
 		//是否添加过信息
	 	if(window.sessionStorage.getItem("addNews")){
	 		addNewsArray = JSON.parse(window.sessionStorage.getItem("addNews"));
	 	}
	 	//显示、审核状态
 		var isShow = data.field.show=="on" ? "checked" : "",
 			newsStatus = data.field.shenhe=="on" ? "审核通过" : "待审核";

 		addNews = '{"article_title":"'+$(".newsName").val()+'",';  //文章名称
 		// addNews += '"newsId":"'+new Date().getTime()+'",';	 //文章id
 		// addNews += '"newsLook":"'+$(".newsLook option").eq($(".newsLook").val()).text()+'",'; //开放浏览
 		addNews += '"article_time":"'+$(".newsTime").val()+'",'; //发布时间
 		// addNews += '"newsTime":"'+$(".newsTime").val()+'",'; //发布时间
 		addNews += '"article_user":"'+$(".newsAuthor").val()+'",'; //文章作者
 		addNews += '"article_content":"'+layedit.getContent(editIndex)+'"}'; //文章内容
 		// addNews += '"isShow":"'+ isShow +'",';  //是否展示
 		// addNews += '"newsStatus":"'+ newsStatus +'"}'; //审核状态
 		// addNewsArray.unshift(JSON.parse(addNews));
 		// window.sessionStorage.setItem("addNews",JSON.stringify(addNewsArray));
 		//弹出loading
 		// var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});
 		// // alert(addNews);
 		// console.log(msg);
 		// $.post("/admin.php/Article/add",addNews,function(result){
 		// 	console.log(result);
 		// 	// alert(addNews);
 		// 	if(result.status)
 		// 	{
	  //           top.layer.close(index);
			// 	top.layer.msg(result.msg);
	 	// 		layer.closeAll("iframe");
		 // 		// 刷新父页面
		 // 		parent.location.reload();
 		// 	}
 		// 	else
 		// 	{
 		// 		top.layer.msg(result.msg);
 		// 	}

 		// },'json')

 		// return false;
 	})
	
})