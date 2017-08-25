<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController{
    public function show()
    {
      if (IS_AJAX)
      {
          $linkList = M('Link')->select();
          $this->ajaxReturn(['linkList'=>$linkList]);
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
            $val = I('param.');
            // var_dump($val);
            $data = M('Link')->add($val);
            // echo M('Link')->_sql();die;
            if($data)
            {
                // $this->ajaxReturn(['status'=>1,'msg'=>'添加成功']);
                  $this->success('添加成功',U('Link/show'));
            }
            else
            {
                // $this->ajaxReturn(['status'=>0,'msg'=>'添加失败']); 
                $this->error('添加失败');             
            }
        }
        else
        {
         // echo 1;die;
            $this->display();
        }
      
    }

    public function del(){
          if(IS_AJAX)
          {
              $id = I('param.id');
              // var_dump($id);
              $data = M('Link')->where(array('link_id'=>$id))->delete();
              if($data)
              {
                  $this->ajaxReturn(['status'=>1,'msg'=>'删除成功']);
                  // $this->success('删除成功',U('Link/show'));
              }
              else
              {
                  $this->ajaxReturn(['status'=>0,'msg'=>'删除失败']);
                  // $this->error('删除失败');
              }
          }
    }




}