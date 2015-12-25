<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="pragram" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate" />
    <title>服务项管理 - wederful后台管理系统</title>
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
        var global = {
            localUrl:'<?php echo U("Service/index");?>', // 页面基本地址
            keywords:'<?php echo ($keywords); ?>', // 当前搜索关键字
            categoryid:'<?php echo ($categoryid); ?>', // 当前商品类型
            vendorid:'<?php echo ($vendorid); ?>', // 当前服务商
            isShowUrl:'<?php echo U("Service/isShow");?>',
            delProductUrl:'<?php echo U("Service/delProduct");?>'
        };
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
    
    <main class="main bb pr page_service">

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
            
    <!-- 导航栏 -->
    <div class="con-nav i-lh30 i-bcm h30 p10 mb20 c">
        <nav class="fl">
            <a href="<?php echo U('Service/index/');?>">服务项管理</a>
        </nav>
        <div class="fr c">
            <!-- 第一个不需要 class ml20 -->
            <label class="nav-search fl">
                <input class="search-list i-input i-b1m fl" type="text" />
                <button class="service-search-btn i-button fl" type="botton">搜索</button>
            </label>
            <a href="<?php echo U('Service/addServiceOne/');?>" class="i-button i-b-mw fl ml20">新增服务项</a>
        </div>
    </div>
    <!-- 搜索区域 select 集 -->
    <div class="mb20 c">
        <select class="category-type-list i-select fl mr10" name="categoryid">
            <option value="null">选择商品大类</option>
            <?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option value="<?php echo ($category["id"]); ?>"><?php echo ($category["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <select class="provider-type i-select fl mr10" name="vendorid">
            <option value="null">选择服务商</option>
            <?php if(is_array($vendorsArr)): $i = 0; $__LIST__ = $vendorsArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vendors): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vendors["id"]); ?>"><?php echo ($vendors["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>
    <!-- 结果展示区域 table -->
    <table class="i-table mb20 w1">
        <thead>
            <tr>
                <th>商品类型</th>
                <th>服务商</th>
                <th>服务项</th>
                <th>商品数</th>
                <th>访问数</th>
                <th>上传者</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
          <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$re): $mod = ($i % 2 );++$i;?><tr data-id="<?php echo ($re["id"]); ?>" data-name="<?php echo ($re["name"]); ?>">
                <td><?php echo ($re["categoryName"]); ?></td>
                <td><?php echo ($re["vendorName"]); ?></td>
                <td><?php echo ($re["name"]); ?></td>
                <td><?php echo ($re["packageCount"]); ?></td>
                <td><?php echo ($re["visit_num"]); ?></td>
                <td><?php $table = M("user");$where = array("id"=>$re["uid"]);$user = $table->where($where)->field("username")->find();echo $user["username"];?></td>
                <td>
                    <a class="service-del dlb cp mr20">删除</a>
                    <a href="<?php echo U('Service/editServiceOne/');?>/pid/<?php echo ($re["id"]); ?>" class="dlb cp">编辑</a>
                    <!-- <a class="service-publish dlb cp"><?php if($re["is_show"] == '1'): ?>取消发布<?php else: ?>发布<?php endif; ?></a> -->
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <!-- 分页 paging -->
    <section class="paging">
        <dl class="dlb mr20">
            <dt class="dlb">服务项数：</dt>
            <dd class="dlb"><?php echo ($totalSize); ?></dd>
        </dl>
        <?php echo ($page); ?>
    </section>

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
    
    <!-- 富文本 -->
    <link rel="stylesheet" href="/dev_wederful/Public/Admin/css/simditor.css" />
    <script src="/dev_wederful/Public/Admin/js/module.min.js"></script>
    <script src="/dev_wederful/Public/Admin/js/uploader.min.js"></script>
    <script src="/dev_wederful/Public/Admin/js/hotkeys.min.js"></script>
    <script src="/dev_wederful/Public/Admin/js/simditor.min.js"></script>
    <!-- 七牛图片上传 -->
    <script src="/dev_wederful/Public/Admin/js/plupload.min.js" ></script>
    <script src="/dev_wederful/Public/Admin/js/qiniu.min.js" ></script>
    <!-- this -->
    <script src="/dev_wederful/Public/Admin/js/service.js"></script>

</body>
</html>