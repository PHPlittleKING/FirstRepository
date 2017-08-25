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
        <!DOCTYPE html>
<html lang="en">
<head>
    <base href="/Public/">
    <meta charset="utf-8">
    <title>Single Post</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
   <link rel="stylesheet" href="css/style1.css" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->
<style type="text/css">

    #img{
        width:750px; 
        height:421.88px;
    }

</style>
    
</head>
<body>
    <div class="widewrapper main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <article class="blog-post">
                        <header>
                            <div class="lead-image">
                                <img src="img/<?php echo mt_rand(1,9) ?>.jpg" alt="" class="img-responsive" id='img'>  
                            </div>
                        </header>
                        <div class="body">
                            <h1><?php echo ($data["article_title"]); ?></h1>
                            <div class="meta">
                                <i class="fa fa-user"></i><?php echo ($data["article_user"]); ?><i class="fa fa-calendar"></i><?php echo ($data["article_time"]); ?><i class="fa fa-comments"></i><span class="data"><a href="#comments">&nbsp;&nbsp;浏览量</a></span><span>&nbsp;&nbsp;<?php echo ($data["see_count"]); ?></span>
                            </div>
                            <p><?php echo ($data["article_content"]); ?></p>
                        </div>
                    </article>
                        
                    <aside class="social-icons clearfix">
                        <h3>Share on </h3> 
                        <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google"></i></a>
                    </aside>

                    <aside class="comments" id="comments">
                        <hr>

                   <div id="SOHUCS" sid="{}"></div>
                    <script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
                    <script type="text/javascript">
                    window.changyan.api.config({
                    appid: 'cytb0Qgzb',
                    conf: 'prod_3b74e216d378562a14764d92d3287fd6'
                    });
                    </script>
                     
                    </aside>
                </div>
                <aside class="col-md-4 blog-aside">
                    
                    <div class="aside-widget">
                    <header>
                        <h3>Friendly,link</h3>
                    </header>
                    <div class="body">
                    <?php if(is_array($linkList)): foreach($linkList as $key=>$val): ?><ul class="clean-list" id="link">
                            <li><a href="<?php echo ($val["link_address"]); ?>" target="_blank"><?php echo ($val["link_address"]); ?></a></li>
                        </ul><?php endforeach; endif; ?>
                    </div>
                </div>
                
                    <div class="aside-widget">
                        <header>
                            <h3>All Article</h3>
                        </header>
                        <div class="body">
                            <?php if(is_array($articleList)): foreach($articleList as $key=>$val): ?><ul class="clean-list">
                                    <li><?php echo ($val["article_title"]); ?></li>
                                </ul><?php endforeach; endif; ?>
                        </div>
                    </div>
                 <div class="aside-widget">
                    <header>
                        <h3>Tags</h3>
                    </header>
                    <?php if(is_array($labelList)): foreach($labelList as $key=>$value): ?><div>
                            <ul class="tags">
                                <li><a href="#"><?php echo ($value["label_name"]); ?></a></li>                           
                            </ul>
                        </div><?php endforeach; endif; ?>
                </div> 
                    
                </aside>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript">
    // alert(1);
    var id = <?php echo ($id); ?>;
        $.get('/index.php/Index/see',{'id':id},function(result){
            // alert(2);
            console.log(result);
            // alert(result);
        },'json')
    </script>
</body>
</html>
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