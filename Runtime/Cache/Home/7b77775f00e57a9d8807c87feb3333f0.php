<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    
    <title>Wederful海外婚礼_婚纱摄影_蜜月旅行网站</title>
    <meta name="author" content="wederfull" />
    <meta name="keywords" content="wederful,海外婚礼,旅行结婚,蜜月旅行,国外婚礼,海外婚纱摄影" />
    <meta name="Copyright" content="wederful.com &copy;" />
    <meta name="description" content="Wederful.com-最专业的海外婚礼定制平台,发现并预定全世界独一无二的婚礼场地、教堂、海岛、婚礼拍摄、婚纱照拍摄、化妆造型、旅拍、航拍、蜜月、纪念日等多种服务，专业的婚嫁社区为您的决策提供帮服务热线：400-070-2080" />


    <!-- icon -->
    <link rel="shortcut icon" href="/dev_wederful/Public/Home/images/shutPng.png" type="image/png" sizes="16x16 32x32" />

    <!-- basic -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/base.css" />
    <!-- public -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/public.css" />
    <!-- header-footer -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/head-foot.css" />
    <!-- this -->
    
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/index.css" />


    <!-- global javascript -->
    

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
    
    <main id="main" class="main">
        <!-- 首图轮播 -->
        <section id="hyRoll" class="hy-roll w1 pr ofh">
            <ul class="hy-roll-wrap db w1 h1 pr">
                <!-- roll-0 的数字要有规律 默认第一个为active -->
                <li class="roll-0 w1 h1 pa t0 l0 ts8 active">
                    <hgroup class="ts4 tac">
                        <h2 class="font-married text-hide mb15">走，去结婚 重新定义婚礼体验</h2>
                        <a href="<?php echo U('Home/Index/fullpage');?>" target="_blank" class="fc6 fs18">查看详情<span class="arial dlb ml10">&gt;</span></a>
                    </hgroup>
                </li>
            </ul>
            <nav class="hy-roll-nav w1 pa l0 b0 tac pt30 pb10 z3">
                <!-- data-i 应 hy-roll-wrap的li 数组下标 默认第一个为active -->
                <a class="ts4 active" data-i="0"></a>
            </nav>
            <span class="roll-nav-prev ts4 l0 z3 cp"></span>
            <span class="roll-nav-next ts4 r0 z3 cp"></span>
        </section>
        <!-- 基本概况 -->
        <section class="i-bcm">
            <div class="i-wm bc tac">
                <ul class="base-tag pt20 pb20 c">
                    <li class="fl">
                        <i class="i-mainIcon i-m-camera"></i>
                        <span>
                            全球婚礼元素自由结合
                        </span>
                    </li>
                    <li class="fl">
                        <i class="i-mainIcon i-m-heart"></i>
                        <span>
                            直采优选，拒绝低俗
                        </span>
                    </li>
                    <li class="fl">
                        <i class="i-mainIcon i-m-price"></i>
                        <span>
                            绕开中介，最低价格保证
                        </span>
                    </li>
                    <li class="fl">
                        <i class="i-mainIcon i-m-user"></i>
                        <span>
                            垂直社群，用户点评，真实客片
                        </span>
                    </li>
                </ul>
                <!-- 纯数字 -->
                <!-- <ul class="base-num pt20 pb20 c">
                    <li class="fl">
                        <em class="font-light">380</em>
                        个海外场地
                    </li>
                    <li class="fl">
                        <em class="font-light">293</em>
                        个服务商
                    </li>
                    <li class="fl">
                        <em class="font-light">429</em>
                        对新人
                    </li>
                </ul> -->
                <div class="people-num"></div>
            </div>
        </section>
        <!-- 地区入口 -->
        <section class="each-item">
            <h2 class="font-choice text-hide">甄选，精选，只为动情时刻 选择心仪婚礼地区</h2>
            <figure class="each-wrap area-enter c">
                <a href="<?php echo U('/bali');?>" data-w="3">
                    <img src="/dev_wederful/Public/Home/images/area/Bali.jpg" alt="巴厘岛 BALI" />
                    <div class="ts4">
                        <hgroup>
                            <h3 class="ts4">巴厘岛</h3>
                            <h3 class="ts4 fs20">BALI</h3>
                        </hgroup>
                    </div>
                </a>
                <a href="<?php echo U('/maldive');?>" data-w="1">
                    <img src="/dev_wederful/Public/Home/images/area/Maldives.jpg" alt="马尔代夫 MALDIVES" />
                    <div class="ts4">
                        <hgroup>
                            <h3 class="ts4">马尔代夫</h3>
                            <h3 class="ts4 fs20">MALDIVES</h3>
                        </hgroup>
                    </div>
                </a>
                <a href="<?php echo U('/australia');?>" data-w="1" data-dir="center">
                    <img src="/dev_wederful/Public/Home/images/area/Australia.jpg" alt="澳大利亚 AUSTRALIA" />
                    <div class="ts4">
                        <hgroup>
                            <h3 class="ts4">澳大利亚</h3>
                            <h3 class="ts4 fs20">AUSTRALIA</h3>
                        </hgroup>
                    </div>
                </a>
                <a href="<?php echo U('/thailand');?>" data-w="1">
                    <img src="/dev_wederful/Public/Home/images/area/Thailand.jpg" alt="泰国 THAILAND" />
                    <div class="ts4">
                        <hgroup>
                            <h3 class="ts4">泰国</h3>
                            <h3 class="ts4 fs20">THAILAND</h3>
                        </hgroup>
                    </div>
                </a>
                <a href="<?php echo U('/japan');?>" data-w="1">
                    <img src="/dev_wederful/Public/Home/images/area/Japan.jpg" alt="日本 JAPAN" />
                    <div class="ts4">
                        <hgroup>
                            <h3 class="ts4">日本</h3>
                            <h3 class="ts4 fs20">JAPAN</h3>
                        </hgroup>
                    </div>
                </a>
                <a href="<?php echo U('/unitedkingdom');?>" data-w="2" data-dir="right">
                    <img src="/dev_wederful/Public/Home/images/area/Unitedkingdom.jpg" alt="英国 UNITED KINGDOM" />
                    <div class="ts4">
                        <hgroup>
                            <h3 class="ts4">英国</h3>
                            <h3 class="ts4 fs20">UNITED KINGDOM</h3>
                        </hgroup>
                    </div>
                </a>
            </figure>
        </section>
        <!-- 促销 -->

        <!-- 用户反馈 -->
        <section class="each-item item-nav user-feedback">
            <h2 class="font-feedback text-hide">真实用户反馈</h2>
            <div class="each-wrap ofh">
                <section class="feedback-wrap roll-nav-wrap fcf c" data-min="2">
                    <article>
                        <a>
                            <img draggable="false" src="/dev_wederful/Public/Home/images/user/1.jpg" />
                            <span>天山派的小师姐</span>
                        </a>
                        <p>当和老公决定去巴厘岛结婚之后，看了不少婚礼攻略，也咨询了几家婚庆公司，总觉得大同小异，朋友介绍了Wederful，没想到这个平台有这么多类型的场地，而且价格很合理，毫不犹豫的就定了今年年底的婚礼。这个过程中，客服MM一直很耐心的解答我的问题，给我们很踏实的感觉。</p>
                    </article>
                    <article>
                        <a>
                            <img draggable="false" src="/dev_wederful/Public/Home/images/user/3.jpg" />
                            <span>使街Joan</span>
                        </a>
                        <p>看了周董在塞尔比教堂的婚礼，彻底不淡定了。随即开始在网上找合适的婚庆公司，结果兜了一圈发现，国内90%都是跑巴厘岛，英国的非常少。好不容易找到一家，结果报价贵的离谱，实在不能接受，没想到Wederful居然可以直接预订，而且价格很划算，婚礼+拍摄办下来只要3万多。已经和老公预订了11月的婚礼，现在就等签证了。</p>
                    </article>
                    <article>
                        <a>
                            <img draggable="false" src="/dev_wederful/Public/Home/images/user/4.jpg" />
                            <span>Katherine_Zhang</span>
                        </a>
                        <p>Wederful的同学真的太敬业了，之前定了马尔代夫香格里拉的婚礼和摄影，但后来临时改成我们的摄影师好友随行一起去马代帮我们拍婚纱照，眼看着免费取消时间就要到了，客服却加班帮我们改了订单，不仅节约了一大笔违约费用，还免费提供了2个拍摄场地给我们。太赞啦</p>
                    </article>
                    <article>
                        <a>
                            <img draggable="false" src="/dev_wederful/Public/Home/images/user/2.jpg" />
                            <span>利全先生</span>
                        </a>
                        <p>在Zank看到Wederful的海外婚姻注册服务，这应该是国内第一家提供同志婚礼的平台吧。抱着试一试的态度与客服取得联系，没想到客服非常耐心的帮我们解答了很多问题，还提供了两个方案选择。我们预定了明年新西兰的婚礼仪式，Wederful确实是一个非常多元化和人性化的婚礼品牌。</p>
                    </article>
                </section>
            </div>
            <nav class="roll-nav nav-white">
                <a data-i="0" class="ts4 active"></a>
                <a data-i="1" class="ts4"></a>
            </nav>
        </section>
        <!-- 媒体报道 -->
        <section class="each-item item-nav i-bcm">
            <h2 class="font-media text-hide">媒体报道</h2>
            <div class="each-wrap ofh">
                <section class="media-reports roll-nav-wrap c" data-min="2">
                    <article>
                        <a>
                            <img draggable="false" src="/dev_wederful/Public/Home/images/media/lieyun.png" />
                        </a>
                        <p>结婚对于中国人来说向来是件大事，大大小小的婚庆公司从来不缺，婚庆O2O也已经兴起一段时间。随着海外婚礼逐渐进入公众视线，一个名为Wederful的境外旅行+婚庆的垂直产品诞生了。创始人王颜告诉猎云网：“几年前就很流行在国外拍摄婚纱照，但用户获得这些婚礼服务只能通过国内中介公司，而传统婚庆行业的问题有两个，一是套餐打包售价，比如用户无法自带摄像师，二是暴利，这主要是由于信息不对称，用户很难获知国外婚庆服务的相关资费，只能任由中介公司宰割。</p>
                    </article>
                    <article>
                        <a>
                            <img draggable="false" src="/dev_wederful/Public/Home/images/media/xinming.png" />
                        </a>
                        <p>Wederful平台汇聚全球优质婚礼场地、摄影师、造型师，以及用户所需的相关婚礼服务产品。用户可根据清晰详尽的商品信息，方便快捷的进行海外婚礼各环节的在线预订及支付。与传统婚庆不同，Wederful坚持直采全球资源、去掉中间环节、不设传统线下形象店，把以往附加在用户身上的隐形消费彻底释放，以最直接、最透明、最高效的方式服务用户。</p>
                    </article>
                </section>
            </div>
            <nav class="roll-nav">
                <a data-i="0" class="ts4 active"></a>
            </nav>
        </section>
        <!-- 合作伙伴 -->
        <section class="each-item">
            <h2 class="font-cooperation text-hide">我们的合作伙伴</h2>
            <div class="each-wrap partners c">
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/01.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/02.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/03.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/04.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/05.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/06.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/07.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/08.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/09.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/10.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/11.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/12.jpg" /></a>
                <a><img draggable="false" src="/dev_wederful/Public/Home/images/cooperation/13.jpg" /></a>
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
    
    <script src="/dev_wederful/Public/Home/js/index-controler.js"></script>


</body>

</html>