var $;
layui.config({
	base : "Public/page/"
}).use(['form','layer','jquery'],function(){
	var form = layui.form(),
		layer = parent.layer === undefined ? layui.layer : parent.layer,
		laypage = layui.laypage;
		$ = layui.jquery;

 	var addUserArray = [],addUser;
 	form.on("submit(addUser)",function(data){
 		//是否添加过信息
	 	if(window.sessionStorage.getItem("addUser")){
	 		addUserArray = JSON.parse(window.sessionStorage.getItem("addUser"));
	 	}

	 	var userStatus,userGrade,userEndTime;

 		addUser = '{"usersId":"'+ new Date().getTime() +'",';//id
 		addUser += '"admin_name":"'+ $(".admin_name").val() +'",';  //登录名
 		addUser += '"admin_email":"'+ $(".admin_email").val() +'",';	 //邮箱
 		// addUser += '"userSex":"'+ data.field.sex +'",'; //性别
 		// addUser += '"userStatus":"'+ userStatus +'",'; //会员等级
 		// addUser += '"userGrade":"'+ userGrade +'",'; //会员状态
 		addUser += '"userEndTime":"'+ formatTime(new Date()) +'"}';  //登录时间
 		addUserArray.unshift(JSON.parse(addUser));
 		window.sessionStorage.setItem("addUser",JSON.stringify(addUserArray));
 		//弹出loading
 		// var index = top.layer.msg('数据提交中，请稍候',{icon: 16,time:false,shade:0.8});//

 		// var adminName = $('.userName').val();
 		// var userPwd = $('.userPwd').val();
 		// var userEmail = $('.userEmail').val();

 		// alert(addUser);
 		// $.post("/admin.php/Admin/add",addUser,function(result){
 		// 	console.log(result);
 		// 	if(result.status)
 		// 	{
	  //           top.layer.close(index);
			// 	top.layer.msg(result.msg);
	 	// 		layer.closeAll("iframe");
		 // 		//刷新父页面
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

//格式化时间
function formatTime(_time){
    var year = _time.getFullYear();
    var month = _time.getMonth()+1<10 ? "0"+(_time.getMonth()+1) : _time.getMonth()+1;
    var day = _time.getDate()<10 ? "0"+_time.getDate() : _time.getDate();
    var hour = _time.getHours()<10 ? "0"+_time.getHours() : _time.getHours();
    var minute = _time.getMinutes()<10 ? "0"+_time.getMinutes() : _time.getMinutes();
    return year+"-"+month+"-"+day+" "+hour+":"+minute;
}
