<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function login()
    {
    	if(IS_POST)
    	{
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
    			session('isLogined',$adminInfo);
    			$this->redirect('Index/index', array('cate_id' => 2), 2, 'Loading...');
    		}
    		else
    		{
    			$this->error('登录失败');
    		}


    	}
    	else
    	{
    		$this->display();
    	}
    }



}