<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class LoginController extends Controller
{
    public function login()
    {
    	if(IS_POST)
    	{
    		// layout(false);    //关闭layout布局

            $data = I('post.');
    		 // var_dump($data);die;
    		if(!isset($data['username']) || !isset($data['password'])) 
    		{
    			$this->error('请输入用户名和密码');
    		}
    		$adminInfo = M('Admin')->where(['admin_name'=>$data['username']])->find();
    		if($adminInfo['admin_pwd'] == md5($data['password']))
    		{
    			//登录成功
    			// session('isLogined',$adminInfo);
    			$this->redirect('Index/index', array('cate_id' => 2), 2, '登录中，请稍后...');
    		}
    		else
    		{
    			$this->error('登录失败');
    		}


    	}
    	else
    	{
            layout(false); // 临时关闭当前模板的布局功能
    		$this->display();
    	}
    }



}