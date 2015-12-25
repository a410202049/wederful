<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="pragram" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate" />
    <title>类别属性 - wederful后台管理系统</title>
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
            categoryMdUrl:'<?php echo U("Attribute/categoryMd");?>', // 保存增加品类路径
            addAttributeUrl:'<?php echo U("Attribute/addAttribute");?>',
            delCategoryUrl:'<?php echo U("Attribute/delCategory");?>', // 传需要删除的post id（id:11）
            delAttributeUrl:'<?php echo U("Attribute/delAttribute");?>', // 删除属性
            getAttributeUrl:'<?php echo U("Attribute/getAttribute");?>', // 查看属性
            editAttributeUrl:'<?php echo U("Attribute/editAttribute");?>', // 编辑属性
            delOptionUrl:'<?php echo U("Attribute/delOption");?>', // 删除选项
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
    
    <main class="main bb pr page_attribute">

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
            <a href="<?php echo U('Attribute/index/');?>">属性类别</a>
        </nav>
    </div>
    <!-- h4 二级标题 -->
    <div class="mb20">
        <h4 class="fs20 fc3 dlb mr30">品类管理</h4>
        <button class="add-category i-button i-b-mw" type="button">增加品类</button>
    </div>
    <!-- ************************************ -->
    <!-- 删除按钮 -->
    <div id="delDom" class="none">
        <button type="button" class="del-temp-dom i-button i-b-w ml10 mr10">删除</button>
    </div>
    <!-- 图标 -->
    <div id="iconDom" class="none">
        <div class="type_icon ml5 w30 h30 dlb vam cp pr" title="选择图标">
            <img class="icon_id pr z1" data-pic="null" class="db" src="/dev_wederful/Public/Admin/images/icon/choice_photo.png" />
            <ul class="pa l0 bcf none z2">
                <!-- 循环图标 -->
                <?php if(is_array($iconManagerData)): $i = 0; $__LIST__ = $iconManagerData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li class="atrr_icon" data-id="<?php echo ($data["id"]); ?>"><img src="/dev_wederful/Public/Admin/images/icon/<?php echo ($data["icon_url"]); ?>" /></li><?php endforeach; endif; else: echo "" ;endif; ?>
                <li class="atrr_icon" data-id="null" title="取消图标"><img src="/dev_wederful/Public/Admin/images/icon/choice_photo.png" /></li>
            </ul>
        </div>
    </div>
    <!-- 增加品类 -->
    <div id="addCategory" class="none">
        <div class="m-add-category m-add-box dlb r4 bcf">
            <label class="db mb10">
                <span>品类名称</span>
                <input name="name" class="save-item i-input" type="text" />
            </label>
            <label class="db mb10">
                <span>&emsp;</span>
                <span class="i-error">&emsp;</span>
            </label>
            <div class="db mb10">
                <span>&emsp;</span>
                <div class="dlb">
                    <!-- 添加子类 class 为 save-category-s -->
                    <button class="save-category i-button i-b-mw mr20" type="bubtton">保存</button>
                    <button class="close-mask i-button i-b-mw" type="bubtton">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 添加属性 -->
    <div id="addAttr" class="none">
        <div class="m-add-attribute m-add-box dlb r4 bcf">
            <label class="db mb10">
                <span>属性类型</span>
                <select class="attribute-type i-select">
                    <option value="input">文本框</option>
                    <option value="textarea">文本域</option>
                    <option value="select">下拉框</option>
                    <option value="radio">单选框</option>
                    <option value="checkbox">多选框</option>
                </select>
            </label>
            <div class="attribute-type-wrap c">
                <label class="db fl">
                    <span>属性名</span>
                    <input type="text" class="attribute-name i-input" />
                    {{iconDom}}
                </label>
            </div>
            <label class="db mb10">
                <span>&emsp;</span>
                <span class="i-error">&emsp;</span>
            </label>
            <div class="db mb10">
                <span>&emsp;</span>
                <div class="dlb">
                    <button class="save-attribute i-button i-b-mw mr20" type="bubtton">保存</button>
                    <button class="close-mask i-button i-b-mw" type="bubtton">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 单值属性 -->
    <div id="valSingle" class="none">
        <label class="db fl">
            <span>属性名</span>
            <input type="text" class="attribute-name i-input" />
            {{iconDom}}
        </label>
    </div>
    <!-- 多值属性 -->
    <div id="valMulti" class="none">
        <label class="db mr20 fl">
            <span>属性名</span>
            <input type="text" class="attribute-name i-input i-text-s" />
        </label>
        <section class="attr-val-wrap bcf pr pl20 fr">
        <div class="dlb">
            <label class="db mb10"><span>候选值</span><input type="text" class="save-item i-input i-text-s" />
                {{iconDom}}
                {{delDom}}
            </label>
        </div>
        <button type="button" class="attr-val-add ml10 i-button i-b-mw">新增值</button>
        </section>
    </div>
    <div id="valMultiTwo" class="none">
        <label class="db mb10"><span>候选值</span><input type="text" class="save-item i-input i-text-s" />
            {{iconDom}}
            {{delDom}}
        </label>
    </div>
    <!-- ************************************ -->
    <!-- 折叠导航 -->
    <ul class="fold-nav mb20 i-lh30">
        <!-- 给 li 加上 active 类表示展开 li放相应的 class -->
        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><!-- 一级分类 -->
            <li data-id="<?php echo ($data["id"]); ?>" class="active pb20 mb20">
                <div class="c mb15">
                    <button class="fold-nav-open mr5 bct fl"></button>
                    <span class="fl"><?php echo ($data["name"]); ?></span>
                    <button data-i="一级分类：<?php echo ($data["name"]); ?>" type="button" class="del-category i-button i-b-mw fr ml20">删除</button>
                    <!-- <button type="button" class="add-category-sub i-button i-b-mw ml20 fr">添加子类</button> -->
                    <button type="button" class="add-attribute i-button i-b-mw fr">添加属性</button>
                </div>
                <ul class="fold-nav-third none i-bcm pt10 c">
                    <!-- 一级分类的属性 -->
                    <?php if(is_array($data["attrs"])): $i = 0; $__LIST__ = $data["attrs"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attr): $mod = ($i % 2 );++$i;?><li data-id="<?php echo ($attr["id"]); ?>">
                            <div class="c">
                                <button class="fold-nav-close mr5 ml5 r50 pr fl"></button>
                                <span class="fl"><?php echo ($attr["name"]); ?></span>
                                <button data-i="属性：<?php echo ($attr["name"]); ?>" type="button" class="del-attr i-button i-b-mw fr ml20">删除</button>
                                <button type="button" class="edit-attr i-button i-b-mw fr">编辑</button>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

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
    <script src="/dev_wederful/Public/Admin/js/attribute.js"></script>

</body>
</html>