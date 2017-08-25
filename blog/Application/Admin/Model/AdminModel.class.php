<?php 
namespace Home\Model;
use Think\Model\RelationModel;
class AdminModel extends RelationModel{     
		//
			// 'Role'=> self::BELONGS_TO,
			// );

			protected $_validate = array(
				array('admin_name','','该管理员已存在！',1,'unique',1), // 在新增的时候验证name字段是否唯一
				array('admin_pwd','admin_repwd','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
				array('admin_pwd','checkPwd','密码格式不正确',1,'callback'), // 自定义函数验证密码格式

				);

			protected $_link = array(
			'Role'=>array(
					'mapping_type'  => self::BELONGS_TO,        
					'class_name'    => 'Role',        
					'foreign_key'   => 'role_id',        
					'as_fields' 	=> 'role_name', 

			)
		);

		protected function checkPwd(){
			$adminPwd = I('post.admin_pwd');
			// var_dump($adminPwd);die;
			$res = '/^[a-zA-Z]\w{5,}$/';
			if(preg_match($res, $adminPwd))
			{
				return true;
			}
			else
			{
				return false;
			}
		}	



}




?>