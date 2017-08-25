<?php
namespace Admin\Controller;
use Think\Controller;
class SortController extends CommonController{
    public function show()
    {
       //分页
       $User = M('Sort'); // 实例化User对象
       $count      = $User->count();// 查询满足要求的总记录数
       $Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
       $show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
       $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
       $this->assign('list',$list);// 赋值数据集
       $this->assign('page',$show);// 赋值分页输出
       $this->display(); // 输出模板
    }

    public function add()
    {
    	if(IS_POST)
    	{
    		$data = I('post.');
    		// var_dump($data);die;
    		$info = M('Sort')->add($data);
    		// var_dump($info);die;
    		if($info)
    		{
    			$this->success('添加成功',U('Sort/show'));
    		}
    		else
    		{
    			$this->error('添加失败');
    		}
    	}
    	else
    	{
    		$this->display();
    	}
    }

    //分类删除
    public function del(){
        $id = I('param.id');
        $data = M('Sort')->where(array('sort_id'=>$id))->delete();
        if($data)
        {
           $this->success('删除成功',U('Sort/show'));
        }
        else
        {
           $this->error('删除失败');
        }
    }




}