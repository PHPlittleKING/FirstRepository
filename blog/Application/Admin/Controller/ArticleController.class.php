<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController{
    public function show()
    {
      if (IS_AJAX)
      {
          $articleList = M('Article')->select();
          $this->ajaxReturn(['articleList'=>$articleList]);
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
            // var_dump($data);die;
            $info = M('Article')->add($data);
            // $this->ajaxReturn($data);die; 
            // var_dump($info);die;
            if($info)
            {
                // $this->ajaxReturn(['status'=>1,'msg'=>'添加成功']);
                $this->success('添加成功',U('Article/show'));
            }
            else
            {
                // $this->ajaxReturn(['status'=>0,'msg'=>'添加失败']);
                $this->error('添加失败');
            }
                  
        }
        else
        {

            $this->display();
        }
    }

    //文章删除
    public function del(){
          if(IS_AJAX)
          {
              $id = I('param.id');
              $data = M('Article')->where(array('article_id'=>$id))->delete();
              if($data)
              {
                 // $this->success('删除成功',U('Article/show'));
                  $this->ajaxReturn(['status'=>1,'msg'=>'删除成功']);
              }
              else
              {
                 // $this->error('删除失败');
                  $this->ajaxReturn(['status'=>0,'msg'=>'删除失败']);
              }
          }
        
    }

    //文章修改
    public function update(){
        // echo 123;
      if(IS_POST)
      {
          $data =I('post.');
          $data['article_content'] = I('post.article_content','','stripslashes');
          $data = M('Article')->where(array('article_id'=>$data['article_id']))->save($data);
        
          if($data)
          {
              $this->success('更新成功',U('Article/show'));
          }
          else
          { 
              $this->success('更新失败');
          }
          // var_dump($id);die;
      }
      else
      {
          $id = I('get.id');
          // var_dump($id);
          $data = M('Article')->where(array('article_id'=>$id))->find();
            // var_dump($data);
          $this->assign('data',$data);
          $this->display();
      }
    


    }

    	
}