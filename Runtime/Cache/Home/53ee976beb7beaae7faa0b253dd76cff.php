<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    
    <title><?php echo ($productData["name"]); ?> - Wederful 海外婚礼</title>
    <meta name="author" content="wederfull" />
    <meta name="keywords" content="<?php echo ($productData["seo_keywords"]); ?>" />
    <meta name="Copyright" content="wederful.com &copy;" />
    <meta name="description" content="<?php echo ($productData["seo_description"]); ?>" />


    <!-- icon -->
    <link rel="shortcut icon" href="/dev_wederful/Public/Home/images/shutPng.png" type="image/png" sizes="16x16 32x32" />

    <!-- basic -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/base.css" />
    <!-- public -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/public.css" />
    <!-- header-footer -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/head-foot.css" />
    <!-- this -->
    
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/detail.css" />


    <!-- global javascript -->
    
    <script>
        var global = {
            imgUrl: '/dev_wederful/Public/Home/images/',
            collectionPackage: "<?php echo U('User/collectionPackage');?>",
            getGoodDatePrice:"<?php echo U('Service/getGoodDatePrice');?>",
            placeOrder:"<?php echo U('Service/placeOrder');?>"
        };
    </script>


    <script>
        var globalBase = {
            registerUrl: "<?php echo U('Login/register');?>",
            regSendCodeUrl: "<?php echo U('Login/regSendCode');?>",
            checkUserUrl: "<?php echo U('Login/checkUser');?>",
            forgetUserUrl: "<?php echo U('Login/forget');?>",
            forgetSendCodeUrl: "<?php echo U('Login/forgetSendCode');?>",
            loginUrl: "<?php echo U('Login/login');?>",
            logoutUrl: "<?php echo U('Login/logout');?>",
        };
    </script>

    <!--[if lt IE 10]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<!-- header-fixed footer-none func-none func-top-none func-contact-none -->

    <body id="body" class="body">


    <!-- 头部 -->
    <header id="header" class="header w1">
        <div class="header-wrap bc c h60">
            <ul class="fl h1">
                <li class="fl h1 fs0 mr30">
                    <a class="h1 dlb" href="<?php echo U('/');?>" title="wederful 国内首家海外婚礼垂直电商">
                        <img class="h-top2 mt20 h20 fs20 fcm" src="/dev_wederful/Public/Home/images/logo.png" alt="wederful" />
                    </a>
                </li>
                <li class="header-top-line fl h1 mr30">
                    <a class="header-list ts4 dlb" href="<?php echo U('/');?>">首页</a>
                </li>
                <li class="header-dest header-top-line fl h1 mr30 pr">
                    <a class="header-list dlb ts4 cd pa">
                        <span>目的地</span>
                    </a>
                    <section class="header-dest-down pa z3">
                        <span class="h-dest-arrow dlb ml30 pr bcf z2"></span>
                        <ul class="header-dest-con pr r4 c">
                            <li class="fl"><a href="<?php echo U('/bali');?>" class="dlb ts4">巴厘岛</a></li>
                            <li class="fl"><a href="<?php echo U('/maldive');?>" class="dlb ts4">马尔代夫</a></li>
                            <li class="fl"><a href="<?php echo U('/australia');?>" class="dlb ts4">澳大利亚</a></li>
                            <li class="fl"><a href="<?php echo U('/unitedkingdom');?>" class="dlb ts4">英国</a></li>
                            <li class="fl"><a href="<?php echo U('/thailand');?>" class="dlb ts4">泰国</a></li>
                            <li class="fl"><a href="<?php echo U('/japan');?>" class="dlb ts4">日本</a></li>
                        </ul>
                    </section>
                </li>
                <li class="header-top-line fl h1">
                    <a class="header-list ts4 dlb" href="/dev_wederful/lovelyplanet">社区</a>
                </li>
                <!-- <li class="header-top-line fl h1 fs0">
                    <a class="h1 dlb" href="/dev_wederful/lovelyplanet">
                        <img class="h-down2 mt20 h20 fs18 fcm" src="/dev_wederful/Public/Home/images/Lonvely_Planet_logo.png" alt="爱的行星" />
                    </a>
                </li> -->
            </ul>
            <ul class="fr h1">
                <li class="fl h1 fs0 mr30">
                    <a class="h1 dlb" title="tel:400-070-2080">
                        <img draggable="false" class="h-down2 mt20 h20 fs18 fcm" src="/dev_wederful/Public/Home/images/Number.png" alt="爱的行星" />
                    </a>
                </li>
                <li class="fl h1 mr30">
                    <a class="header-list h1 dlb" href="<?php echo U('Index/custom');?>" title="私人定制">
                        <button type="button" class="header-btn w80 ts4">定制</button>
                    </a>
                </li>
                <?php if(!empty($user)): ?><!-- 已经登陆时显示 -->
                    <li style="width: 112px" class="header-down fl h1 pr">
                        <a href="/dev_wederful/account" class="header-list dlb ts4 pa">
                            <img draggable="false" class="user-head" src="/dev_wederful/Public/Home/images/info/default-head.png" alt="头像" />
                            <span>个人中心</span>
                            <i class="i-arrow i-arrow-b dlb"></i>
                        </a>
                        <ul class="header-down-con w1 pa tac z3 lh200">
                            <li><a href="/dev_wederful/account" class="dlb w1 ts4">个人资料</a></li>
                            <li><a href="/dev_wederful/favor" class="dlb w1 ts4">收藏夹</a></li>
                            <!-- <li><a href="<?php echo U('Home/User/orders/');?>" class="dlb w1 ts4">订单信息</a></li> -->
                            <li><a class="sign-out dlb w1 cp ts4">退出</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <!-- 没有登陆时显示 -->
                    <li class="login-trigger fl h1 mr20">
                        <a class="header-list active ts4 dlb cp">登录</a>
                    </li>
                    <li class="register-trigger header-register fl h1">
                        <a class="header-list ts4 dlb cp">注册</a>
                    </li><?php endif; ?>
            </ul>
        </div>
        <div id="regLogDom">
            <!-- 注册模板 -->
            <div id="registerDom" class="none">
                <div class="register-wrap middle r4 ofh active">
                    <div class="bcm c reg-log-tit tar">
                        <h2 class="fcf fl">注册</h2>
                        <span class="reg-log-close close-mask dlb vam pr cp" title="关闭窗口"></span>
                    </div>
                    <div class="register-con">
                        <label class="reg-log-tel reg-log-border db fc3 c r4 bcf">
                            <span class="tel-area dlb fl">+86</span>
                            <input class="reg-log-ipt register-ipt fl pl20" type="tel" placeholder="请输入手机号" />
                            <span class="reg-tel-err tel-err reg-log-err pr20 dlb fr">&emsp;</span>
                        </label>
                        <div class="reg-captcha c">
                            <label class="reg-log-border dlb fl r4 bcf">
                                <input class="reg-log-ipt reg-code-ipt fl fc3 pl20 pr20" type="text" placeholder="输入验证码" />
                                <span class="reg-code-err fr reg-log-err pr20">&emsp;</span>
                            </label>
                            <button class="send-code-reg reg-log-btn fr r4 bcm fcf ts4" type="button">发送验证码</button>
                        </div>
                        <label class="reg-log-pass reg-log-border db r4 bcf mb20 c">
                            <input class="reg-log-ipt reg-pass-ipt fl w200 pl20 pr20" type="password" placeholder="输入6-20位字符密码" />
                            <span class="reg-pass-err fr reg-log-err pr20">&emsp;</span>
                        </label>
                        <div class="mb30 c">
                            <span class="reg-log-sub-err reg-log-err fl">&emsp;</span>
                            <span class="fr">已有账号，<a class="login-trigger fcm cp">直接登陆</a></span>
                        </div>
                        <button class="reg-submit reg-log-submit reg-log-btn ts4 r4 bcm fcf" type="button">注册</button>
                        <p class="reg-agreement tac pt10">注册即代表同意Wederful<a class="fcm" target="_blank" href="<?php echo U('Home/Links/agreement/');?>">用户协议</a></p>
                    </div>
                </div>
            </div>
            <!-- 登录模板 -->
            <div id="loginDom" class="none">
                <div class="login-wrap middle r4 ofh active">
                    <div class="bcm c reg-log-tit tar">
                        <h2 class="fcf fl">登录</h2>
                        <span class="reg-log-close close-mask dlb vam pr cp" title="关闭窗口"></span>
                    </div>
                    <div class="login-con">
                        <label class="reg-log-tel reg-log-border db fc3 c r4 bcf">
                            <span class="tel-area dlb fl">+86</span>
                            <input class="login-ipt reg-log-ipt fl pl20" type="tel" placeholder="请输入手机号" />
                            <span class="log-tel-err tel-err reg-log-err pr20 dlb fr">&emsp;</span>
                        </label>
                        <label class="reg-log-pass reg-log-border db r4 bcf mb20 c">
                            <input class="log-pass-ipt reg-log-ipt fl w200 pl20 pr20" type="password" placeholder="输入6-20位字符密码" />
                            <span class="log-pass-err fr reg-log-err pr20">&emsp;</span>
                        </label>
                        <div class="mb30 tac c">
                            <a class="register-trigger cp fcm fl">免费注册</a>
                            <span class="reg-log-sub-err reg-log-err">&emsp;</span>
                            <a class="findPass-trigger cp fc3 fr">忘记密码？</a>
                        </div>
                        <button class="log-submit reg-log-submit reg-log-btn ts4 r4 mt10 bcm fcf" type="button">登录</button>
                    </div>
                </div>
            </div>
            <!-- 找回密码模块 -->
            <div id="findpassDom" class="none">
                <div class="find-pass-wrap middle r4 ofh active">
                    <div class="bcm c reg-log-tit tar">
                        <h2 class="fcf fl">重置密码</h2>
                        <span class="reg-log-close close-mask dlb vam pr cp" title="关闭窗口"></span>
                    </div>
                    <div class="find-pass-con">
                        <label class="reg-log-tel reg-log-border db fc3 c r4 bcf">
                            <span class="tel-area dlb fs16 fl">+86</span>
                            <input class="reg-log-ipt register-ipt fl pl20" type="tel" placeholder="请输入手机号" />
                            <span class="reg-tel-err tel-err reg-log-err pr20 dlb fr">&emsp;</span>
                        </label>
                        <div class="reg-captcha c">
                            <label class="reg-log-border dlb fl r4 bcf">
                                <input class="reg-log-ipt reg-code-ipt fl fc3 pl20 pr20" type="text" placeholder="输入验证码" />
                                <span class="reg-code-err fr reg-log-err pr20">&emsp;</span>
                            </label>
                            <button class="send-code-find reg-log-btn fr r4 bcm fcf ts4" type="button">发送验证码</button>
                        </div>
                        <label class="reg-log-pass reg-log-border db r4 bcf mb20 c">
                            <input class="reg-log-ipt reg-pass-ipt fl w200 pl20 pr20" type="password" placeholder="输入6-20位字符新密码" />
                            <span class="reg-pass-err fr reg-log-err pr20">&emsp;</span>
                        </label>
                        <button class="find-submit reg-log-submit reg-log-btn ts4 r4 bcm fcf" type="button">完成</button>
                        <span class="reg-log-sub-err reg-log-err db tac mt5">&emsp;</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 主体 -->
    
    <main class="i-mw pr">
        <!-- 封面 -->
        <section id="detailCover" class="cover-nav pr fs0">
            <img class="detail-cover w1 fs14" src="<?php echo ($productData["large_img"]); ?>" alt="封面图" />
            <nav id="navNative" class="nav w1 tac fs16 i-mw">
                <a data-role="intro" class="active ts4">介绍</a>
                <a data-role="package" class="ts4">套餐</a>
                <a data-role="notice" class="ts4">须知</a>
                <a data-role="prompt" class="ts4">提示</a>
                <!-- <a data-role="map" class="ts4">地图</a> -->
                <a data-role="recom" class="ts4">推荐</a>
            </nav>
            <nav id="nav" class="nav nav-fixed w1 tac fs16 i-mw ts4">
                <a data-role="intro" class="active ts4">介绍</a>
                <a data-role="package" class="ts4">套餐</a>
                <a data-role="notice" class="ts4">须知</a>
                <a data-role="prompt" class="ts4">提示</a>
                <!-- <a data-role="map" class="ts4">地图</a> -->
                <a data-role="recom" class="ts4">推荐</a>
            </nav>
        </section>
        <!-- 介绍 -->
        <section id="intro" class="i-p80 i-bcm">
            <div class="base-intro i-shadow bc bcf r4">
                <section class="pr">
                    <figure id="siteLogo" class="dlb vam pr mr20">
                        <img draggable="false" src="<?php echo ($productData["vendorLogo"]); ?>" class="middle" />
                    </figure>
                    <div class="dlb vam fs16">
                        <h1 class="fc3 mb10"><?php echo ($productData["name"]); ?></h1>
                        <h2 class="fc9"><?php echo ($productData["vendorName"]); ?></h2>
                        <h3 class="pa fc9 r0 mr20"><?php echo ($productData["name_en"]); ?></h3>
                    </div>
                </section>
                <ul class="site-kind tac fs16 mt20 c">
                    <?php if(is_array($productData["iconAttrData"])): $i = 0; $__LIST__ = $productData["iconAttrData"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attIcon): $mod = ($i % 2 );++$i;?><li>
                            <?php if(empty($attIcon["icon"]["icon_url"])): ?><img draggable="false" src="/dev_wederful/Public/Admin/images/icon/choice_photo.png" />
                                <?php else: ?>
                                    <img draggable="false" src="/dev_wederful/Public/Admin/images/icon/<?php echo ($attIcon["icon"]["icon_url"]); ?>" /><?php endif; ?>
                            <?php if($attIcon["name"] == '包含住宿'): ?><span><?php echo ($attIcon["icon"]["option"]); ?></span>
                                <?php elseif($attIcon["name"] == '最大人数'): ?>
                                    <span>最大人数:<?php echo ($attIcon["value"]); ?>人</span>
                                <?php elseif($attIcon["name"] == '场地类型'): ?>
                                    <span><?php echo ($attIcon["icon"]["option"]); ?></span>
                                <?php elseif($attIcon["name"] == '服务范围'): ?>
                                    <span><?php echo ($attIcon["icon"]["option"]); ?></span>
                                <?php elseif($attIcon["name"] == '服务语言'): ?>
                                    <span><?php echo ($attIcon["icon"]["option"]); ?></span>
                                <?php elseif($attIcon["name"] == '是否包含化妆'): ?>
                                    <span><?php echo ($attIcon["icon"]["option"]); ?></span>
                                <?php elseif($attIcon["name"] == '拍摄类型'): ?>
                                    <span><?php echo ($attIcon["icon"]["option"]); ?></span>
                                <?php elseif($attIcon["name"] == '所在地区'): ?>
                                    <span><?php echo ($attIcon["value"]); ?></span>
                                <?php else: ?>
                                    <span><?php echo ($attIcon["name"]); ?></span><?php endif; ?>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </section>
        <section class="i-p80">
            <article class="bc i-wm">
                <h2 class="section-label"><?php if(($productData["category_id"] == '56') or ($productData["category_id"] == '57')): ?>团队介绍<?php else: ?>场地介绍<?php endif; ?></h2>
                <section class="site-intro c">
                    <div id="siteIntro" class="intro-text dlb i-w5 bb fl">
                        <div class="ofh">
                            <p><?php echo ($productData["description"]); ?></p>
                        </div>
                        <span class="site-intro-btn db cp fcm mt15" data-i="open">显示全部</span>
                    </div>
                    <div class="intro-ext dlb i-w5 bb fr">
                        <?php if(is_array($productData["textAttrData"])): $i = 0; $__LIST__ = $productData["textAttrData"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attr): $mod = ($i % 2 );++$i;?><dl class="mb5">
                                <dt><?php echo ($attr["name"]); ?>:</dt>
                                <?php if($attr["type"] == 'radio' || $attr["type"] == 'select'): if(is_array($attr["options"])): $i = 0; $__LIST__ = $attr["options"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op): $mod = ($i % 2 );++$i; if($attr["value"] == $op['id']): ?><dd><?php echo ($op["option"]); ?></dd><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                <?php elseif($attr["type"] == 'checkbox'): ?>
                                    <?php if(is_array($attr["options"])): $i = 0; $__LIST__ = $attr["options"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$op): $mod = ($i % 2 );++$i; if(is_array($attr["value"])): $k = 0; $__LIST__ = $attr["value"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k; if($v == $op['id']): echo ($op["option"]); if($k != count($attr['value'])): ?>,<?php endif; endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                <?php else: ?>
                                    <dd><?php echo ($attr["value"]); ?></dd><?php endif; ?>
                            </dl><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </section>
            </article>
        </section>
        <section class="i-bcm i-p80">
            <div class="bc i-wm">
                <h2 class="section-label"><?php if(($productData["category_id"] == '56') or ($productData["category_id"] == '57')): ?>客户样片<?php else: ?>场地图片<?php endif; ?></h2>
                <section id="rollImg" class="roll-img w1000 bc ofh pr">
                    <!-- 以下的 r-i 表示 roll-img  -->
                    <div class="r-i-wrap w1 h1 pr fs0">
                        <figure class="h1 pr">
                            <!-- <div class="h1 dlb pr" data-video="http://static.youku.com/v1.0.0574/v/swf/loader.swf">
                                <img src="/dev_wederful/Public/Home/images/6.jpg" class="h1">
                            </div>
                            <div class="h1 dlb pr"><img src="/dev_wederful/Public/Home/images/4.jpg" class="h1"></div> -->
                            <?php if(is_array($productData["ImagesData"])): $i = 0; $__LIST__ = $productData["ImagesData"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><div class="h1 dlb pr"><img src="<?php echo ($img["img"]); ?>" class="h1"></div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </figure>
                        <span class="r-i-prev pa cp l0 t0 dlb"><i></i></span>
                        <span class="r-i-next pa cp r0 t0 dlb"><i></i></span>
                    </div>
                </section>
            </div>
        </section>
        <!-- 套餐 -->
        <section id="package" class="i-p80">
            <div class="bc i-wm">
                <h2 class="section-label">套餐信息</h2>
                <section class="package r4">
                    <!-- 给package-item 加上active 表示展开-->
                    <?php if(is_array($productData["packageData"])): $i = 0; $__LIST__ = $productData["packageData"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$package): $mod = ($i % 2 );++$i;?><div class="package-item ofh i-bc" data-name="<?php echo ($package["name"]); ?>" data-id="<?php echo ($package["id"]); ?>" data-min="<?php echo ($package["number_range_min"]); ?>" data-max="<?php echo ($package["number_range_max"]); ?>" data-charge="<?php echo ($package["out_charge"]); ?>" data-price="<?php echo ($package["price"]); ?>">
                            <div class="p-i-head">
                                <div class="p-i-h-tit open-pack fs18 h1 bb fl cp lh150 c">
                                    <div class="dlb fc3 fl">
                                        <span>
                                            <?php if($package["package_no"] == 1): ?>套餐A
                                            <?php elseif($package["package_no"] == 2): ?>
                                                套餐B
                                            <?php elseif($package["package_no"] == 3): ?>
                                                套餐C
                                            <?php elseif($package["package_no"] == 4): ?>
                                                套餐D
                                            <?php elseif($package["package_no"] == 5): ?>
                                                套餐E
                                            <?php elseif($package["package_no"] == 6): ?>
                                                套餐F
                                            <?php elseif($package["package_no"] == 7): ?>
                                                套餐G
                                            <?php elseif($package["package_no"] == 8): ?>
                                                套餐H
                                            <?php elseif($package["package_no"] == 9): ?>
                                                套餐I
                                            <?php elseif($package["package_no"] == 10): ?>
                                                套餐J<?php endif; ?>
                                        </span>
                                        <h3><?php echo ($package["name"]); ?></h3>
                                    </div>
                                    <ul class="dlb fr">
                                        <li>标准人数：<?php echo ($package["number_range_min"]); ?></li>
                                        <li>RMB <?php echo ($package["price"]); ?></li>
                                    </ul>
                                </div>
                                <ul class="fr h1">
                                    <?php if($package["is_collection"] == '1'): ?><li class="like-pack w80 h1 fl pr cp" data-t="fav" title="取消收藏">
                                            <span class="css-hart middle active"></span>
                                        </li>
                                    <?php else: ?>
                                        <li class="like-pack w80 h1 fl pr cp" data-t="fav" title="收藏">
                                            <span class="css-hart middle"></span>
                                        </li><?php endif; ?>
                                    <li class="open-pack w80 h1 fl pr cp">
                                        <span class="css-arrow middle ts4"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-i-con">
                                <!-- 选择日期和人数 -->
                                <section class="c mb20">
                                    <div class="calendar-wrap pr dlb hide fl">
                                        <section class="calendar-tit w1 bcf cp i-bc bb tac c">
                                            <span class="dlb fc3 fs16 ml20 fl">选择日期</span>
                                            <span class="now-date mr20 fs16 dlb"></span>
                                            <i class="i-arrow i-arrow-t dlb mr20 ts4 fr"></i>
                                        </section>
                                        <div class="calendar-con pa l0 w1 bcf i-bc bb z1"></div>
                                    </div>
                                    <dl class="num-wrap dlb fl">
                                        <dt class="dlb fc3 fs16 mr15 fl">选择人数</dt>
                                        <dd class="dlb fl">
                                            <span class="num-down dlb i-bc cp bcf fl mr5" title="增加人数">-</span>
                                            <input class="num-ipt only-num tac i-bc fl" type="text" placeholder="最大容纳<?php echo ($package["number_range_max"]); ?>人" value="<?php echo ($package["number_range_min"]); ?>" data-type="num" />
                                            <span class="num-up dlb i-bc cp bcf fl ml5" title="减少人数">+</span>
                                            <span class="remind-err fl ml10">&emsp;</span>
                                        </dd>
                                    </dl>
                                </section>
                                <!-- 套餐项目和赠送服务 -->
                                <section class="i-bc bcf lh200 r4">
                                    <h4 class="fc3 fs16 p-h4 pl20">套餐项目</h4>
                                    <div class="p-i-proj c">
                                        <div class="pkg-content bb fl i-w5"><?php echo ($package["content"]); ?></div>
                                        <section class="fr i-w5">
                                            <h5 class="fs16 fc3">赠送服务</h5>
                                            <div><?php echo ($package["gift_service"]); ?></div>
                                        </section>
                                    </div>
                                </section>
                                <!-- 增值服务 -->
                                <?php if(!empty($package["addValue"])): ?><div class="i-bc r4 bcf mt20">
                                        <h4 class="fc3 fs16 p-h4 pl20">增值服务</h4>
                                        <ul class="p-i-ext">
                                            <?php if(is_array($package["addValue"])): $i = 0; $__LIST__ = $package["addValue"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$add): $mod = ($i % 2 );++$i;?><li class="ext-item c mb10" data-price="<?php echo ($add["price"]); ?>" data-id="<?php echo ($add["id"]); ?>" data-min="<?php echo ($add["min_num"]); ?>" data-max="<?php echo ($add["max_num"]); ?>" data-name="<?php echo ($add["name"]); ?>">
                                                    <!-- 加上 avtive 表示选中 -->
                                                    <section class="p-ext-tit cp fl mr20" title="<?php echo ($add["name"]); ?>">
                                                        <i class="fl dlb h10 w10 mr10"></i>
                                                        <span class="fl to"><?php echo ($add["name"]); ?></span>
                                                    </section>
                                                    <?php if(($add["min_num"] != '0') and ($add["max_num"] != '0')): ?><section class="p-ext-num dlb fl tac">
                                                            <span class="ext-down dlb w20 i-bc cp fl mr5">-</span>
                                                            <input class="only-num i-bc fl" type="text" placeholder="<?php echo ($add["min_num"]); ?>个到<?php echo ($add["max_num"]); ?>个" data-type="ext" />
                                                            <span class="ext-up dlb w20 i-bc cp fl ml5">+</span>
                                                            <span class="remind-err fl ml10">&emsp;</span>
                                                        </section><?php endif; ?>
                                                    <span class="fr p-ext-money" data-price="<?php echo ($add["price"]); ?>">￥<?php echo ($add["price"]); ?></span>
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div><?php endif; ?>
                            </div>
                            <div class="p-i-foot p15 fs16 tar c">
                                <dl class="dlb vam mr15">
                                    <dt class="dlb">总计:</dt>
                                    <dd class="package-money dlb">RMB <?php echo ($package["price"]); ?></dd>
                                </dl>
                                <span class="pkg-order ml15 dlb vam r4 bcm fcf pl15 pr15 pt10 pb10 cp mr5">申请预定</span>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </section>
            </div>
        </section>
        <!-- 须知 -->
        <section id="notice" class="i-p80 i-bcm">
            <div class="bc i-wm">
                <h2 class="section-label">预定流程</h2>
                <section class="pt30 pb30 bcf i-shadow r4">
                    <article>
                        <h4 class="ml20 fc3 fs16 mb20"><i class="i-tit-icon i-process"></i>流程图</h4>
                        <img draggable="false" src="/dev_wederful/Public/Home/images/process.png" alt="预定流程图" />
                    </article>
                    <article class="n-order">
                        <h4 class="mb20 fc3 fs16"><i class="i-tit-icon i-notice"></i>预定须知</h4>
                        <ul class="lh200">
                            <?php echo ($productData["noticeData"]["booking_notice"]); ?>
                            <!--<li></li>-->
                        </ul>
                    </article>
                </section>
            </div>
        </section>
        <section class="i-p80 i-pt0 i-bcm">
            <div class="bc i-wm">
                <h2 class="section-label">费用说明</h2>
                <section class="pl20 pr20 pt30 pb30 bcf i-shadow r4 c">
                    <div class="i-w5 fl bb pr30">
                        <article>
                            <h4 class="fc3 fs16 mb10"><i class="i-tit-icon i-contain"></i>包含内容</h4>
                            <ul class="lh200">
                                <?php echo ($productData["noticeData"]["cost_include"]); ?>
                            </ul>
                        </article>
                        <article>
                            <h4 class="fc3 fs16 mt30 mb10"><i class="i-tit-icon i-no-contain"></i>不包含内容</h4>
                            <ul class="lh200">
                                <?php echo ($productData["noticeData"]["cost_not_include"]); ?>
                            </ul>
                        </article>
                    </div>
                    <div class="i-w5 fr bb pl30">
                        <article>
                            <h4 class="fc3 fs16 mb10"><i class="i-tit-icon i-instruct"></i>其他说明</h4>
                            <ul class="lh200">
                                <?php echo ($productData["noticeData"]["other_cost"]); ?>
                            </ul>
                        </article>
                    </div>
                </section>
            </div>
        </section>
        <section class="i-p80 i-pt0 i-bcm">
            <div class="bc i-wm">
                <h2 class="section-label">变更政策</h2>
                <section class="pl20 pr20 pt30 pb30 bcf i-shadow r4 c">
                    <article class="i-w5 fl bb pr30">
                        <h4 class="fc3 fs16 mb10"><i class="i-tit-icon i-cancel"></i>取消政策</h4>
                        <ul class="lh200">
                            <?php echo ($productData["noticeData"]["cancel_policy"]); ?>
                        </ul>
                    </article>
                    <article class="i-w5 fr bb pl30">
                        <h4 class="fc3 fs16 mb10"><i class="i-tit-icon i-modify"></i>修改政策</h4>
                        <ul class="lh200">
                            <?php echo ($productData["noticeData"]["change_policy"]); ?>
                        </ul>
                    </article>
                </section>
            </div>
        </section>
        <!-- 提示 -->
        <section id="prompt" class="i-p80">
            <div class="bc i-wm">
                <h2 class="section-label">出行提示</h2>
                <section class="travel-tips c">
                    <nav id="travelTipsNav" class="h1 bcf i-shadow bcm fl tac fcf fs16 ofh">
                        <a data-i="0" class="ts4 active">签证</a>
                        <a data-i="1" class="ts4">交通</a>
                        <a data-i="2" class="ts4">住宿</a>
                        <a data-i="3" class="ts4">消费</a>
                        <a data-i="4" class="ts4">气候</a>
                        <a data-i="5" class="ts4">其他</a>
                    </nav>
                    <div class="tips-wrap h1 i-bcm i-shadow ofh fr">
                        <ul id="travelTipsCon" class="travel-tips-con">
                            <!-- 签证 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <?php if(!empty($destinationData["visa_pic_title"])): ?><h5 class="fc3 mb20"><?php echo ($destinationData["visa_pic_title"]); ?></h5><?php endif; ?>
                                    <img class="mt5" draggable="false" src="<?php echo ($destinationData["visa_pic"]); ?>" alt="<?php echo ($destinationData["visa_pic_title"]); ?>" />
                                </figure>
                                <article class="tips-con fr">
                                    <?php if(is_array($infoData)): $i = 0; $__LIST__ = $infoData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if($info["type"] == 'visa'): ?><section class="mb20 c">
                                                <?php if(!empty($info["url"])): ?><img draggable="false" class="area-icon" src="/dev_wederful/Public/Admin/images/icon_area/<?php echo ($info["url"]); ?>" /><?php endif; ?>
                                                <div class="tips-each dlb"><?php echo ($info["content"]); ?></div>
                                            </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </article>
                            </li>
                            <!-- 交通 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <?php if(!empty($destinationData["traffic_pic_title"])): ?><h5 class="fc3 mb20"><?php echo ($destinationData["traffic_pic_title"]); ?></h5><?php endif; ?>
                                    <img class="mt5" draggable="false" src="<?php echo ($destinationData["traffic_pic"]); ?>" alt="<?php echo ($destinationData["traffic_pic_title"]); ?>" />
                                </figure>
                                <article class="tips-con fr">
                                    <?php if(is_array($infoData)): $i = 0; $__LIST__ = $infoData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if($info["type"] == 'traffic'): ?><section class="mb20 c">
                                                <?php if(!empty($info["url"])): ?><img draggable="false" class="area-icon" src="/dev_wederful/Public/Admin/images/icon_area/<?php echo ($info["url"]); ?>" /><?php endif; ?>
                                                <div class="tips-each dlb"><?php echo ($info["content"]); ?></div>
                                            </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </article>
                            </li>
                            <!-- 住宿 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <?php if(!empty($destinationData["stay_pic_title"])): ?><h5 class="fc3 mb20"><?php echo ($destinationData["stay_pic_title"]); ?></h5><?php endif; ?>
                                    <img class="mt5" draggable="false" src="<?php echo ($destinationData["stay_pic"]); ?>" alt="<?php echo ($destinationData["stay_pic_title"]); ?>" />
                                </figure>
                                <article class="tips-con fr">
                                    <?php if(is_array($infoData)): $i = 0; $__LIST__ = $infoData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if($info["type"] == 'stay'): ?><section class="mb20 c">
                                                <?php if(!empty($info["url"])): ?><img draggable="false" class="area-icon" src="/dev_wederful/Public/Admin/images/icon_area/<?php echo ($info["url"]); ?>" /><?php endif; ?>
                                                <div class="tips-each dlb"><?php echo ($info["content"]); ?></div>
                                            </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </article>
                            </li>
                            <!-- 消费 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <?php if(!empty($destinationData["consumption_pic_title"])): ?><h5 class="fc3 mb20"><?php echo ($destinationData["consumption_pic_title"]); ?></h5><?php endif; ?>
                                    <img class="mt5" draggable="false" src="<?php echo ($destinationData["consumption_pic"]); ?>" alt="<?php echo ($destinationData["consumption_pic_title"]); ?>" />
                                </figure>
                                <article class="tips-con fr">
                                    <?php if(is_array($infoData)): $i = 0; $__LIST__ = $infoData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if($info["type"] == 'consumption'): ?><section class="mb20 c">
                                                <?php if(!empty($info["url"])): ?><img draggable="false" class="area-icon" src="/dev_wederful/Public/Admin/images/icon_area/<?php echo ($info["url"]); ?>" /><?php endif; ?>
                                                <div class="tips-each dlb"><?php echo ($info["content"]); ?></div>
                                            </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </article>
                            </li>
                            <!-- 气候 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <?php if(!empty($destinationData["climate_pic_title"])): ?><h5 class="fc3 mb20"><?php echo ($destinationData["climate_pic_title"]); ?></h5><?php endif; ?>
                                    <img class="mt5" draggable="false" src="<?php echo ($destinationData["climate_pic"]); ?>" alt="<?php echo ($destinationData["climate_pic_title"]); ?>" />
                                </figure>
                                <article class="tips-con fr">
                                    <?php if(is_array($infoData)): $i = 0; $__LIST__ = $infoData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if($info["type"] == 'climate'): ?><section class="mb20 c">
                                                <?php if(!empty($info["url"])): ?><img draggable="false" class="area-icon" src="/dev_wederful/Public/Admin/images/icon_area/<?php echo ($info["url"]); ?>" /><?php endif; ?>
                                                <div class="tips-each dlb"><?php echo ($info["content"]); ?></div>
                                            </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </article>
                            </li>
                            <!-- 其他 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <?php if(!empty($destinationData["other_pic_title"])): ?><h5 class="fc3 mb20"><?php echo ($destinationData["other_pic_title"]); ?></h5><?php endif; ?>
                                    <img class="mt5" draggable="false" src="<?php echo ($destinationData["other_pic"]); ?>" alt="<?php echo ($destinationData["other_pic_title"]); ?>" />
                                </figure>
                                <article class="tips-con fr">
                                    <?php if(is_array($infoData)): $i = 0; $__LIST__ = $infoData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i; if($info["type"] == 'other'): ?><section class="mb20 c">
                                                <?php if(!empty($info["url"])): ?><img draggable="false" class="area-icon" src="/dev_wederful/Public/Admin/images/icon_area/<?php echo ($info["url"]); ?>" /><?php endif; ?>
                                                <div class="tips-each dlb"><?php echo ($info["content"]); ?></div>
                                            </section><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </article>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </section>
        <!-- 地图 -->
        <!-- temp change -->
        <section id="map" class="map i-bcm pr none">
            <!-- 这是地图 -->
            <div id="mapBox" class="w1 h1"></div>
            <div class="map-box i-shadow tac i-bcm">
                <figure class="w1">
                    <img draggable="false" class="w1" src="http://7xo7hn.com1.z0.glb.clouddn.com/1450075236180" />
                    <a class="center-lg map-lg db lh200 cp" data-lg="-8.80441, 115.2311">巴厘岛</a>
                </figure>
                <section class="bcf lh200 cp">
                    <div id="mapExPrev">
                        <i class="i-arrow i-arrow-t dlb pr"></i>
                    </div>
                    <div id="mapExCon" class="map-ex-wrap ofh">
                        <section class="ts4">
                            <a class="ex-lg map-lg" data-lg="-8.74608, 115.1672">推荐 - 巴厘岛机场</a>
                        </section>
                    </div>
                    <div id="mapExNext">
                        <i class="i-arrow i-arrow-b dlb pr"></i>
                    </div>
                </section>
            </div>
        </section>
        <!-- 推荐 -->
        <section id="recom" class="i-p80">
            <div class="bc i-wm">
                <h2 class="section-label">其他推荐</h2>
                <nav id="recomNav" class="recom-nav pb20 tar">
                    <!-- 初始化的时候给第一个a加上active -->
                    <?php $__FOR_START_2673__=0;$__FOR_END_2673__=$randLength;for($i=$__FOR_START_2673__;$i < $__FOR_END_2673__;$i+=1){ ?><a class="ts4 dlb cp ml15 r50 <?php if($i == 0): ?>active<?php endif; ?>" data-i="<?php echo ($i); ?>"></a><?php } ?>
                </nav>
                <section class="ofh">
                    <ul id="recomCon" class="recom-con tac lh150 c">
                        <?php if(is_array($rand)): $i = 0; $__LIST__ = $rand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li class="h1 bcf fl i-bcm">
                                <a class="db fs0 pr" href="/dev_wederful/<?php echo ($area); ?>/<?php echo ($r["id"]); ?>">
                                    <img class="w1 h1" src="<?php echo ($r["thumbnail"]); ?>" />
                                    <aside class="c bb">
                                        <h3 class="fl to tal"><?php echo ($r["name"]); ?></h3>
                                        <span class="fr">￥<?php echo ($r["startPrice"]); ?></span>
                                    </aside>
                                </a>
                                <div class="img-tip c">
                                    <span class="w90 to fl"><?php echo ($r["option"]); ?></span>
                                    <span class="w200 tar to fr"><?php echo ($r["vendor"]["name"]); ?></span>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </section>
            </div>
        </section>
    </main>


    <!-- 页脚 -->
    <footer class="footer">
        <h2 class="tac fc3 fs16 mb20">关注我们</h2>
        <ul class="tac footer-contact mb30">
            <li class="f-weixin-wrap dlb r50 pr">
                <a class="db footer-i i-weixin r50"></a>
                <figure class="pa ofh l0">
                    <img draggable="false" class="db" src="/dev_wederful/Public/Home/images/wdf_wx.png" alt="微信" />
                </figure>
            </li>
            <li class="dlb r50">
                <a href="http://weibo.com/wederful" class="db footer-i i-weibo r50" target="_blank"></a>
            </li>
        </ul>
        <section class="footer-us tac mb20">
            <dl class="f-us-1">
                <dt>公司信息</dt>
                <dd><a href="<?php echo U('Home/Links/about/');?>">关于我们</a></dd>
                <dd><a href="<?php echo U('Home/Links/agreement/');?>">用户协议</a></dd>
                <dd><a href="<?php echo U('Home/Links/dislaimer/');?>">免责声明</a></dd>
                <dd><a href="<?php echo U('Home/Links/contact/');?>">联系我们</a></dd>
            </dl>
            <dl class="f-us-2">
                <dt>帮助中心</dt>
                <dd><a href="<?php echo U('Home/Links/roblem/');?>">常见问题</a></dd>
                <dd><a href="<?php echo U('Home/Links/order/');?>">订购流程</a></dd>
                <dd><a href="<?php echo U('Home/Links/cancel/');?>">取消政策</a></dd>
                <dd><a class="none" href="<?php echo U('Home/Links/insurance/');?>">安全保障</a></dd>
            </dl>
            <dl class="f-us-3">
                <dt>发现</dt>
                <dd><a href="<?php echo U('Home/Links/dest/');?>">探索目的地</a></dd>
                <dd><a href="<?php echo U('Home/Links/service/');?>">精选服务与产品</a></dd>
                <dd><a class="none" href="<?php echo U('Home/Links/story/');?>">幸福故事</a></dd>
            </dl>
            <dl class="f-us-4">
                <dt>移动端</dt>
                <dd><a>iOS客户端（即将上线）</a></dd>
                <dd><a>Android客户端（即将上线）</a></dd>
            </dl>
            <dl class="footer-tel">
                <dt>客服电话&ensp;09:00-20:00</dt>
                <dd>400-070-2080</dd>
            </dl>
        </section>
        <section class="footer-friends i-fcb bc fc9 pt15 c">
            <span class="fl">友情链接</span>
            <nav class="f-fri-con ml20 dlb fr">
            </nav>
        </section>
        <section class="tac i-fcb">
            <i class="footer-i i-logo dlb pr"></i>&emsp;&ensp;蜀ICP备&ensp;12016537号-3&emsp;Copyright<sup>&copy;</sup>&ensp;wederful
        </section>
    </footer>

    <!-- 功能 侧边栏 -->
    <section id="asideFunc" class="aside-func pf">
        <span class="func-contact i-aside i-s-contact cp db" tenantId="9597" title="联系客服"></span>
        <span class="func-top i-aside i-s-top cp db" title="回到顶部"></span>
    </section>

    <!-- mask -->
    <div id="mask"></div>

    <!-- base -->
    <script src="/dev_wederful/Public/Home/js/jq.js"></script>
    <!-- public -->
    <script src="/dev_wederful/Public/Home/js/public.js"></script>
    <script src='//kefu.easemob.com/webim/easemob.js?tenantId=9597&hide=true' async='async'></script>
    <!-- header-footer -->
    <script src="/dev_wederful/Public/Home/js/head-foot.js"></script>
    <!-- this -->
    
	<script>
        var Map = (function() {
            "use strict";
            var geojson = [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-8.80441, 115.2311]
                    },
                    "properties": {
                        "title": "\u5df4\u5398\u5c9b\u541b",
                        "description": "\u5df4\u5398\u5c9b\u541b\u60a6\u5ea6\u5047\u9152\u5e97\u4f4d\u4e8e\u52aa\u6c99\u675c\u5df4\u5398\u5c9b",
                        "icon": {
                            "iconUrl": "/dev_wederful/Public\/Home\/images\/info\/resort.png",
                            "iconSize": [30, 70],
                            "iconAnchor": [15, 45],
                            "popupAnchor": [0, -25],
                            "className": "wdfMapIcon"
                        }
                    },
                    "wdfTime": 0,
                    "wdfType": "center"
                }, {
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [-8.74608, 115.1672]
                    },
                    "properties": {
                        "title": "\u5df4\u5398",
                        "description": "\u670914\u4e2a\u767b\u673a\u95e8\uff0c\u5176\u4e2d\u516b\u5ea7\u8bbe\u6709\u7a7a\u6865\u3002",
                        "icon": {
                            "iconUrl": "/dev_wederful/Public\/Home\/images\/info\/airport.png",
                            "iconSize": [30, 70],
                            "iconAnchor": [15, 45],
                            "popupAnchor": [0, -25],
                            "className": "wdfMapIcon"
                        }
                    },
                    "wdfTime": 0,
                    "wdfType": "recommend"
                }];

            return {
                // 获取地图数据
                getgeojson: function() {
                    return geojson;
                },

                // 获取套餐
                getPack: function() {
                    return pack;
                }
            };
        })();
    </script>
    <!-- 日历 -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/calendar.css" />
    <script src="/dev_wederful/Public/Home/js/calendar.js"></script>
    <!-- this -->
    <script src="/dev_wederful/Public/Home/js/detail-controler.js"></script>
    <!-- 地图 -->
    <!-- <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css" /> -->
    <!--// <script src="https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js"></script>
    // <script src="/dev_wederful/Public/Home/js/detail-map.js"></script> -->


</body>

</html>