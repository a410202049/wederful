<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="pragram" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate" />
    <title>首页 - wederful后台管理系统</title>
    <meta name="author" content="wederfull" />
    <meta name="Copyright" content="wederful.com &copy;" />

    <link rel="shortcut icon" href="/dev_wederful/Public/Home/images/shutPng.png" type="image/png" sizes="16x16 32x32" />

    <!-- basic -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/base.css" />
    <!-- public -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/public.css" />
    <!-- this -->
    <link rel="stylesheet" href="/dev_wederful/Public/Admin/css/all.css" />

    
    <script>
        var global = {};
    </script>

    <!--[if lt IE 10]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="body" class="pr">
    <!-- 头部 -->
    <header class="header w1 pf t0 l0 bcf z2">
        <div class="header-wrap bc c h60">
            <ul class="fl h1">
                <li class="fl mt20 fs0 mr30">
                    <a href="<?php echo U('/');?>" class="db" title="wederful 国内首家海外婚礼垂直电商">
                        <img src="/dev_wederful/Public/Home/images/logo.png" class="fs22 fcm" alt="wederful" />
                    </a>
                </li>
            </ul>
            <ul class="fr h1">
                <li class="fl h1 mt15"><a class="header-lh db cd"><?php echo ($_SESSION['user']['username']); ?></a></li>
                <li class="fl h1 mt15 ml30"><a class="header-lh ts4 dlb cp" href="<?php echo U('Login/logout/');?>">退出</a></li>
            </ul>
        </div>
    </header>
    <!-- 主体 -->
    
    <main class="main bb pr page_index">

        <!-- 公共侧边栏 -->
        <aside class="asise bcf pf h1 l0 tac lh200 fs16 z1">
            <ul id="mainNav" class="main-nav mt20">
                <!-- li 加上 active 展开 -->
                <!-- 首页 -->
                <li class="page_index"><a href="<?php echo U('Index/index/');?>">首页</a></li>
                <!-- 商品管理 -->
                <li class="page_goods"><a href="<?php echo U('Goods/index/');?>">商品管理</a></li>
                <!-- 类别属性 -->
                <li class="page_attribute"><a href="<?php echo U('Attribute/index/');?>">类别属性</a></li>
                <!-- 服务项管理 -->
                <li class="page_service"><a href="<?php echo U('Service/index/');?>">服务项管理</a></li>
                <!-- 服务商管理 -->
                <li class="page_provider"><a href="<?php echo U('Provider/index/');?>">服务商管理</a></li>
                <!-- 地区管理 -->
                <li class="page_area"><a href="<?php echo U('Area/index/');?>">地区管理</a></li>
                <!-- 地区管理 -->
                <li class="page_content"><a href="<?php echo U('Article/index/');?>">内容管理</a></li>
                <!-- 订单管理 -->
                <li class="page_order"><a href="<?php echo U('Order/index/');?>">订单管理</a></li>
                <!-- 用户管理 -->
                <li class="page_user sub-nav pr active">
                    <span>
                        <i class="nav-dir cp"></i>
                        <a href="<?php echo U('User/index/');?>">用户管理</a>
                    </span>
                    <ul class="none fs14 ti1">
                        <li><a href="<?php echo U('User/userDetails/');?>">用户详情</a></li>
                        <li><a href="<?php echo U('User/userOrder/');?>">用户订单</a></li>
                    </ul>
                </li>
                <!-- 设置 -->
                <li class="page_seting"><a href="<?php echo U('Seting/index/');?>">设置</a></li>
            </ul>
        </aside>
        <!-- 主内容 -->
        <section id="allWrap" class="all-wrap">
            
    首页

        </section>
    </main>
    <!-- 页脚 -->
    <!-- <footer></footer> -->
    <!-- mask -->
    <div id="mask"></div>
    <!-- script -->
    <script src="/dev_wederful/Public/Home/js/jq.js"></script>
    <script src="/dev_wederful/Public/Home/js/public.js"></script>
    <!-- this -->
    <script src="/dev_wederful/Public/Admin/js/all.js"></script>
    
</body>
</html>