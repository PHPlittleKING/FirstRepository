<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
class IndexController extends Controller
{
    public function index(){
        $list = M('Article')->order('see_count desc')->limit(10)->select();
        // echo M('Article')->_sql();die;
        // var_dump($articleList);die;
        $this->assign('list',$list);
        $articleList = M('Article')->select();
        $this->assign('articleList',$articleList);
        $labelList = M('Label')->select();
        $this->assign('labelList',$labelList);
        $linkList = M('Link')->select();
        $this->assign('linkList',$linkList);
        // var_dump($labelList);die;
    	$this->display();
    }

    public function about(){
    	$this->display('Index/about');
    }

    public function single(){
        // echo '<pre>';
        // print_r($_GET);
        // print_r($_GET['ab']);
        $id = I('get.id');
        //文章展示
        $articleList = M('Article')->select();
        $this->assign('articleList',$articleList);
        // echo M('Article')->_sql();die;
        //查询出当前访问的文章
        $data = M('Article')->where(array('article_id'=>$id))->find();
        // echo M('Article')->_sql();die;
        $this->assign('data',$data);
        $this->assign('id',$id);
        //友情链接
        $linkList = M('Link')->select();
        $this->assign('linkList',$linkList);
        //标签
        $labelList = M('Label')->select();
        $this->assign('labelList',$labelList);
    	$this->display('Index/single');
    }

    public function contact(){
    	layout(false); // 临时关闭当前模板的布局功能
        $this->display('Index/contact');
    }

    public function see()
    {
        $id = I('get.id');
        if(IS_GET && IS_AJAX)
        {
            //浏览量
            M('Article')->where(['article_id'=>$id])->setInc('see_count');
            die;
        }

    }

    public function reg(){
        layout(false); // 临时关闭当前模板的布局功能
        $this->display('Index/reg');
    }   


}