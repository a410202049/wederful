<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="pragram" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate" />
    <title>商品管理 - wederful后台管理系统</title>
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
            localUrl: '<?php echo U("Goods/index");?>', // 页面基本地址
            categoryid: '<?php echo ($categoryid); ?>', // 当前类型
            keywords: '<?php echo ($keywords); ?>', // 当前搜索关键字
            isShowUrl: '<?php echo U("Goods/showGoods");?>',
            delGoodsUrl: '<?php echo U("Goods/delGoods");?>',
            vendorid: '<?php echo ($vendorid); ?>', // 当前商家id
            order: '<?php echo ($order); ?>'
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
    
    <main class="main bb pr page_goods">

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
            <a href="<?php echo U('Index/goodsManage/');?>">商品管理</a>
        </nav>
        <div class="fr c">
            <!-- 第一个不需要 class ml20 -->
            <label class="nav-search fl">
                <input class="search-list goods-search-ipt i-input i-b1m fl" type="text" />
                <button class="goods-search-btn i-button fl" type="botton">搜索</button>
            </label>
            <a href="<?php echo U('Goods/addGoods/');?>" class="i-button i-b-mw fl ml20">新增商品</a>
        </div>
    </div>
    <!-- 搜索区域 select 集 -->
    <div class="mb20 c">
        <select class="category-type-list i-select fl mr10" name="categoryid">
            <option value="null">选择商品大类</option>
            <?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option value="<?php echo ($category["id"]); ?>"><?php echo ($category["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <select class="provider-type-list i-select fl mr10" name="vendorid">
            <option value="null">选择服务商</option>
            <?php if(is_array($vendorsArr)): $i = 0; $__LIST__ = $vendorsArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vendors): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vendors["id"]); ?>"><?php echo ($vendors["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
    </div>

    <!-- 结果展示区域 table -->
    <table class="i-table mb20 w1">
        <thead>
            <tr>
                <th>商品编号</th>
                <th>商品类型</th>
                <th>服务商</th>
                <th>服务项</th>
                <th>商品名称</th>
                <th>所在地</th>
                <th class="order cp"><b class="dlb vat">↕</b> 价格</th>
                <!-- <th>访问数</th> -->
                <th>收藏数</th>
                <th>购买数</th>
                <!-- <th>创建时间</th> -->
                <th>创建人</th>
                <!-- <th>促销</th> -->
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($packageData)): $i = 0; $__LIST__ = $packageData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr data-name="<?php echo ($data["proname"]); ?>" data-id="<?php echo ($data["id"]); ?>">
                    <td><?php echo ($data["goods_no"]); ?></td>
                    <td><?php echo ($data["categoryname"]); ?></td>
                    <td><?php echo ($data["vendorname"]); ?></td>
                    <td><?php echo ($data["proname"]); ?></td>
                    <td class="goods-name"><?php echo ($data["name"]); ?></td>
                    <!--自定义标签-->
                    <td><?php $table = M("destination");$whereOne = array("id"=>$data["area_id"]);$oneRet = $table->where($whereOne)->find();$whereTwo = array("id"=>$oneRet["parent_id"]);$twoRet = $table->where($whereTwo)->find();$str = $oneRet["name"];if($twoRet["name"]) { $str=$twoRet["name"]."-".$oneRet["name"]; }echo $str;?></td>
                    <td><?php if(!empty($data["price"])): ?>$<?php echo ($data["price"]); else: ?>0<?php endif; ?></td>
                    <!-- <td><?php echo ($data["visit_num"]); ?></td> -->
                    <td>0</td>
                    <td>0</td>
                    <!-- <td><?php echo ($data["createtime"]); ?></td> -->
                    <td><?php $table = M("user");$where = array("id"=>$data["uid"]);$user = $table->where($where)->field("username")->find();echo $user["username"];?></td>
                    <!-- <td><?php echo ($data["product_no"]); ?></td> -->
                    <td>
                        <a class="dlb mr20" href="<?php echo U('/Home/Service/serviceDetail');?>/id/<?php echo ($data["proid"]); ?>/area/<?php echo ($data["area_id"]); ?>" target="_blank">查看</a>
                        <span class="goods-del dlb mr20 cp">删除</span>
                        <a class="dlb mr20" href="<?php echo U('Goods/editGoods');?>/id/<?php echo ($data["id"]); ?>" target="_blank">编辑</a>
                        <span class="goods-publish dlb cp" data-id="<?php echo ($data["id"]); ?>"><?php if($data["is_show"] == '1'): ?>取消发布<?php else: ?>发布<?php endif; ?></span>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <!-- 分页 paging -->
    <section class="paging">
        <dl class="dlb mr20">
            <dt class="dlb">商品数：</dt>
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
    
    <!-- this -->
    <script src="/dev_wederful/Public/Admin/js/goods.js"></script>

</body>
</html>