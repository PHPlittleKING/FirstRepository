<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="/Public/">
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
   
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="/Public/css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="/Public/css/style.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
    
</head>
<body>
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="<?php echo U('Index/index');?>" id="logo">
                    <img src="/Public/img/logo.png" alt="clean Blog">
                </a>

                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav nav-pills navbar-nav">
                          
                            <li>
                                <a href="<?php echo U('Index/index');?>">Home</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo U('Index/about');?>">About</a>
                            </li> -->
                            <li>
                                <a href="<?php echo U('Index/contact');?>">Register</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Login/login');?>">Login</a>
                            </li>
                            <!-- <li>
                                <a href="<?php echo U('Index/reg');?>">Register</a>
                            </li> -->                         
                        </ul>
                    </div>
                </nav>        

            </div>
        </div>

        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="#">Blog</a>
                </div>

                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                        <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>
        <style type="text/css">
    *{
        margin: 0px;
        padding: 0px;
        /*align: center;*/
        /*margin-left: -20px;*/
        /*list-style: none;*/
    }

    .row
    {
        width: 1400px;
    }

    .col-md-62
    {
        width: 400px;
        float: left;
        margin-left: 20px;
    }

    .articleContent{
        width: 398px;
        height: 27px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .pic{
        height: 223.44px;
        width: 398px;
    }

    .tags li{
        margin-top:5px;
        width: 73px;
        /*height: 45px;*/
        /*float: bottom;*/
    }

    .a{
        margin-left: 10px;
        /*list-style: none;*/
    }

    .art{
        margin-left: 10px;
    }

</style>
<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <?php if(is_array($list)): foreach($list as $key=>$val): ?><div class="row2">
                    <div class="col-md-62 col-sm-62">
                        <article class=" blog-teaser">
                            <header>
                                <img class="pic" src="img/<?php echo mt_rand(1,12) ?>.jpg" alt="">
                                <h3><a href="<?php echo U('Index/single');?>?id=<?php echo ($val["article_id"]); ?>"><?php echo ($val["article_title"]); ?></a></h3>
                                <span class="meta"><?php echo ($val["article_time"]); ?>, <?php echo ($val["article_user"]); ?></span>
                                <hr>
                            </header>
                            <div class="body articleContent"><?php echo ($val["article_content"]); ?></div>
                            <div class="clearfix">
                                <a href="<?php echo U('Index/single');?>?id=<?php echo ($val["article_id"]); ?>" class="btn btn-clean-one">Read more</a>
                            </div>
                        </article>
                    </div>  
                </div><?php endforeach; endif; ?>
            </div>
          <aside class="col-md-4 blog-aside">
                    
                    <div class="aside-widget">
                    <header>
                        <h3>Friendly,link</h3>
                    </header>
                    <div class="body">
                    <?php if(is_array($linkList)): foreach($linkList as $key=>$val): ?><ul class="clean-list" id="link">
                            <li><a href="<?php echo ($val["link_address"]); ?>" target="_blank" class="a"><?php echo ($val["link_address"]); ?></a></li>
                        </ul><?php endforeach; endif; ?>
                    </div>
                </div>
                
                    <div class="aside-widget">
                        <header>
                            <h3>All Article</h3>
                        </header>
                        <div class="body">
                            <?php if(is_array($articleList)): foreach($articleList as $key=>$val): ?><ul class="clean-list">
                                    <li><a href="<?php echo ($val["article_title"]); ?>" target="_blank" class="art"><?php echo ($val["article_title"]); ?></a></li>
                                </ul><?php endforeach; endif; ?>
                        </div>
                    </div>

                  <div class="aside-widget">
                    <header>
                        <h3>Tags</h3>
                    </header>
                    <?php if(is_array($labelList)): foreach($labelList as $key=>$value): ?><div class="body2">
                            <ul class="tags">
                                <li><a href="#"><?php echo ($value["label_name"]); ?></a></li>                           
                            </ul>
                        </div><?php endforeach; endif; ?>
                </div> 
                </aside>
        </div>
    </div>
</div> 
    <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>About</h3>

                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi laboriosam nostrum consequatur fugiat at, labore praesentium modi, quasi dolorum debitis reiciendis facilis, dolor saepe sint nemo, earum molestias quas.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error aspernatur assumenda quae eveniet.</p>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i> Recent Post</h3>
                        <ul class="clean-list">
                            <li><a href="">Clean - Responsive HTML5 Template</a></li>
                            <li><a href="">Responsive Pricing Table</a></li>
                            <li><a href="">Yellow HTML5 Template</a></li>
<!--                             <li><a href="">Blackor Responsive Theme</a></li>
                            <li><a href="">Portfolio Bootstrap Template</a></li>
                            <li><a href="">Clean Slider Template</a></li> -->
                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>Contact Me</h3>

                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fugiat, cupiditate veritatis excepturi tempore explicabo.</p>
                         <div class="footer-widget-icon">
                            <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
               This - Collect from <a href="http://www.blog.com/admin.php/" title="初学者博客" target="_blank">初学者后台</a>
        </div>
    </footer>
    
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/modernizr.js"></script>

</body>
</html>