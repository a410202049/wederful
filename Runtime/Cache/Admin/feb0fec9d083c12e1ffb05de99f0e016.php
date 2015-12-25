<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="pragram" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate" />
    <title>文章编辑 - wederful后台管理系统</title>
    <meta name="author" content="wederfull" />
    <meta name="Copyright" content="wederful.com &copy;" />

    <link rel="shortcut icon" href="/dev_wederful/Public/Home/images/shutIco.ico" type="image/x-icon" sizes="16x16 32x32" />

    <!-- basic -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/base.css" />
    <!-- public -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/public.css" />
    <!-- this -->
    <link rel="stylesheet" href="/dev_wederful/Public/Admin/css/all.css" />

    
    <script>
        var global = {
            qiniuUploadTokenUrl:'<?php echo U("Product/qiniuUploadToken");?>',
            uploadUrl:'<?php echo U("Index/uploadImg");?>'
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
    
    <main class="main bb pr page_content">

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
    <div class="con-nav i-lh30 i-bcm p10 mb20 c">
        <nav class="fl">
            <a href="<?php echo U('Article/index/');?>">内容管理</a>
            <a href="<?php echo U('Article/editArticle/');?>">文章编辑</a>
        </nav>
    </div>
    <form action="<?php echo U('Article/editArticleMethod/');?>" method="POST">
        <input type="hidden" value="<?php echo ($result["id"]); ?>" name="id">
        <table class="con-show w1">
            <tbody>
                <tr>
                    <td>内容板块</td>
                    <td>
                        <select class="i-select i-w-long" name="category_id">
                            <option value="null">选择板块</option>
                            <?php if(is_array($categorys)): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i; if($result['category_id'] == $category['id']): ?><option value="<?php echo ($category["id"]); ?>" selected="selected"><?php echo ($category["name"]); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo ($category["id"]); ?>"><?php echo ($category["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>文章关键字</td>
                    <td><input class="i-input i-w-long" value="<?php echo ($result["keywords"]); ?>" name="keywords" type="text" placeholder="文章关键字，用于搜索引擎" /></td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>文章描述</td>
                    <td><input class="i-input i-w-long" value="<?php echo ($result["description"]); ?>" name="description" type="text" placeholder="文章描述，用于搜索引擎" /></td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>文章标题</td>
                    <td><input class="i-input i-w-long" value="<?php echo ($result["title"]); ?>" name="title" type="text" placeholder="标题(最多14个字符)" /></td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>文章副标题</td>
                    <td><input class="i-input i-w-long" value="<?php echo ($result["subtitle"]); ?>" name="subtitle" type="text" placeholder="副标题(最多48个字符)" /></td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>文章作者</td>
                    <td>
                        <select class="i-select i-w-short i-mr10" name="source">
                            <option value="null">选择作者/转载</option>
                            <option value="0" <?php if('0' == $result['source']): ?>selected="selected"<?php endif; ?>>作者</option>
                            <option value="1" <?php if('1' == $result['source']): ?>selected="selected"<?php endif; ?>>转载</option>
                        </select>
                        <input class="i-input i-w-long" name="author" value="<?php echo ($result["author"]); ?>" type="text" placeholder="作者/转载" />
                    </td>
                    <td>&emsp;</td>
                </tr>
                <tr>
                    <td>文章大图</td>
                    <td colspan="2">
                        <?php if($result['bigpic'] != ''): ?><figure class="load-img-wrap"><img src="<?php echo ($result["bigpic"]); ?>" /><input type="hidden" value="<?php echo ($result["bigpic"]); ?>" name="bigpic" /><span class="qiniu-img-del">x</span></figure>
                            <span class="add-img" style="display: none;" data-rule="random" data-num="1" data-name="bigpic"></span>
                        <?php else: ?>
                            <span class="add-img" data-rule="random" data-num="1" data-name="bigpic"></span><?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>TAG</td>
                    <td colspan="2">
                        <?php if(is_array($articleTags)): $i = 0; $__LIST__ = $articleTags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><label class="dlb mr20"><input class="mr5" <?php if(is_array($stags)): $i = 0; $__LIST__ = $stags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$stag): $mod = ($i % 2 );++$i; if($stag['tags_id'] == $tag['id']): ?>checked="checked"<?php endif; endforeach; endif; else: echo "" ;endif; ?>  type="checkbox" value="<?php echo ($tag["id"]); ?>" name="tagName[]" /><?php echo ($tag["name"]); ?></label><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>正文内容</td>
                    <td colspan="2">
                        <textarea class="edit-dom i-textarea i-w-long" name="content"><?php echo ($result["content"]); ?></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="con-operation tac pt20 mb30">
            <button class="i-button i-b-mw">保存</button>
        </div>
    </form>

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
    <script src="/dev_wederful/Public/Admin/js/all-new.js"></script>
    
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
    <script src="/dev_wederful/Public/Admin/js/article.js"></script>

</body>
</html>