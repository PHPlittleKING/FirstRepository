<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController
{
    public function show()
    {
      if (IS_AJAX)
      {
          $adminList = M('Admin')->cache(true)->select();
          $this->ajaxReturn(['adminList'=>$adminList]);
      }
      else
      {
          $this->display();
      }
       // // 分页
       // $User = M('Article'); // 实例化User对象
       // $count      = $User->count();// 查询满足要求的总记录数
       // $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
       // $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
       // $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
       // $this->assign('list',$list);// 赋值数据集
       // $this->assign('page',$show);// 赋值分页输出
       // $this->display(); // 输出模板
    }
    

   public function add()
    {
        if(IS_POST)
        {
            $data = I('post.');
            $data['admin_pwd'] = md5($data['admin_pwd']);
            // echo '<pre>';
            // print_r($data);die;
            $admin = D('Admin');
            if(!$admin->create())
            {
                // echo $admin->getError();
                // $this->ajaxReturn(['status'=>0,'msg'=>$admin->getError()]);
                // $this->success('添加成功','Admin/show');
                $this->getError();
            }
            else
            {
                $info = M('Admin')->add($data);
            
                //var_dump($info);die;
                if($info)
                {
                    // admin_log('添加管理员'.$data['admin_name']);
                    $this->success('添加成功',U('Admin/show'));
                    // $this->ajaxReturn(['status'=>1,'msg'=>'添加成功']);
                    // echo json_encode(['status'=>1,'msg'=>'添加成功']);exit;
                }
                else
                {
                    // $this->ajaxReturn(['status'=>0,'msg'=>'添加失败']);
                    // echo json_encode(['status'=>0,'msg'=>'添加失败']);exit;
                    $this->error('添加失败');
                }
            }       
        }
        else
        {
            $this->display();
        }
        
   } 

   public function logData(){
        // $logList = M('Admin')->select();
        // $this->assign('logList',$logList);
        $this->display();
   }

   //删除用户
   public function del(){
          if(IS_AJAX)
          {
              $id = I('param.id');
              // var_dump($id);
              $data = M('Admin')->where(array('admin_id'=>$id))->delete();
              if($data)
              {
                  $this->ajaxReturn(['status'=>1,'msg'=>'删除成功']);
                  // $this->success('删除成功',U('Admin/show'));
              }
              else
              {
                  $this->ajaxReturn(['status'=>0,'msg'=>'删除失败']);
                  // $this->error('删除失败');
              }
          }
    }

   //修改用户
   public function update(){
      if(IS_AJAX)
      {
          $id = I('param.id');
          // var_dump($id);die;
          $data = M('Admin');
          
      }


   }
   




}