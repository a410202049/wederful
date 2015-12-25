<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    
	<title>个人中心 - wederful</title>
	<meta name="author" content="wederfull" />
    <meta name="keywords" content="Wederful,海外婚礼,海外婚礼场地,海外婚礼旅拍" />
    <meta name="Copyright" content="wederful.com &copy;" />
    <meta name="description" content="国内首家海外婚礼垂直电商,提供海外婚礼场地、全球知名婚礼及旅拍摄影师、海外婚礼团队住宿、交通服务、当地游活动及婚礼装扮等服务预定。DIY 海外婚礼,从此变得很简单。" />


    <!-- icon -->
    <link rel="shortcut icon" href="/dev_wederful/Public/Home/images/shutIco.ico" type="image/x-icon" sizes="16x16 32x32" />

    <!-- basic -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/base.css" />
    <!-- public -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/public.css" />
    <!-- header-footer -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/head-foot.css" />
    <!-- this -->
    
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/user.css" />


    <!-- global javascript -->
    
    <script>
        var global = {
            jsonUrl: '/dev_wederful/Public/Home/js/',
            reset: "<?php echo U('Login/reset');?>",
            checkNikeName: "<?php echo U('Login/checkNikeName');?>"
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
               <li class="header-top-line fl h1 fs0">
                    <a class="h1 dlb" href="/dev_wederful/lovelyplanet">
                        <img class="h-down2 mt20 h20 fs18 fcm" src="/dev_wederful/Public/Home/images/Lonvely_Planet_logo.png" alt="爱的行星" />
                    </a>
                </li>
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
                            <li><a href="<?php echo U('Home/User/orders/');?>" class="dlb w1 ts4">订单信息</a></li>
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
                            <input class="login-ipt reg-log-ipt fl pl20" type="tel" placeholder="请输入手机号" autofocus="autofocus" />
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
        <section class="title-wrap i-mw pr fs0">
            <img class="w1 fs16" draggable="false" src="http://7xo7hn.com1.z0.glb.clouddn.com/1450075236180" alt="个人中心" />
            <div class="title-text w1 fcf fs22 tac pa t0">
                <h2>WEDERFUL</h2>
                <h2>个人中心</h2>
            </div>
        </section>
        <section class="con-wrap w1000 bc p c">
            <aside class="aside tac fl">
                <figure class="fs0 pr mb20">
                    <img class="r50" draggable="false" src="http://7xo7hn.com1.z0.glb.clouddn.com/head-default.png" alt="用户名" />
                    <!-- <button class="fs22 bct pa t0" type="button" title="删除头像">×</button> -->
                </figure>
                <!-- <button class="portrait-btn bcf r4 ts4" type="button">上传头像</button> -->
                <nav class="aside-nav mt30 pt30 pb30">
                    <!-- 加上active 高亮 -->
                    <a href="/dev_wederful/account" class="icon-data db mb10 active">
                        <i class="i-icon i-icon-data"></i>
                        个人资料
                    </a>
                    <a href="/dev_wederful/favor" class="icon-fav db mb10">
                        <i class="i-icon i-icon-fav"></i>
                        收藏夹&emsp;
                    </a>
                    <a href="<?php echo U('Home/User/orders/');?>" class="icon-mes db">
                        <i class="i-icon i-icon-mes"></i>
                        订单信息
                    </a>
                </nav>
            </aside>
            <div class="con-main fr">
                <ul id="tabIndex" class="main-nav i-bc mb20">
                    <li data-to="msg" class="dlb mr20 ts4 cp active">基本信息</li>
                    <li data-to="pass" class="dlb ts4 cp">修改密码</li>
                </ul>
                <div id="tab" class="main-con i-bc pr">
                    <section class="sub-wrap msg">
                        <form id="userInfo" method="POST" autocomplete="off">
                            <label class="label-item">
                                <span class="item-tip">昵称</span>
                                <input class="nickname ipt-trigger" name="nickname" type="text" value="<?php echo ($data["nickname"]); ?>"/>
                            </label>
                            <label class="label-item">
                                <span class="item-tip">邮箱</span>
                                <input class="ipt-email ipt-trigger" name="email" type="email" value="<?php echo ($data["email"]); ?>" />
                            </label>
                            <section class="label-tel c">
                                <div class="dlb">
                                    <span class="item-tip">手机</span>
                                    <label class="tel-wrap bcf dlb">
                                        <span>+86</span>
                                        <input class="ipt-trigger" name="mobile" id="tel" readonly="readonly" value="<?php echo ($data["mobile"]); ?>"/>
                                    </label>
                                </div>
                                <div class="tel-func dlb fr">
                                    <!-- <span class="status-tel true dlb mr10">已验证</span> -->
                                    <button type="button" class="send-code bct ts4 r4 none">发送验证码</button>
                                    <span>&emsp;</span>
                                    <button type="button" class="modify-tel bct fr ts4 none">修改</button>
                                </div>
                            </section>
                            <label class="label-item">
                                <span class="item-tip">性别</span>
                                <select name="sex">
                                    <option value="0" <?php if($data["sex"] == '0'): ?>selected="selected"<?php endif; ?>>保密</option>
                                    <option value="1" <?php if($data["sex"] == '1'): ?>selected="selected"<?php endif; ?>>男</option>
                                    <option value="2" <?php if($data["sex"] == '2'): ?>selected="selected"<?php endif; ?>>女</option>
                                    <option value="3" <?php if($data["sex"] == '3'): ?>selected="selected"<?php endif; ?>>其他</option>
                                </select>
                            </label>
                            <label class="label-item">
                                <span class="item-tip">期望的目的地</span>
                                <input class="ipt-trigger" name="wedding_location" type="text" value="<?php echo ($data["wedding_location"]); ?>"/>
                            </label>
                            <section class="label-item">
                                <label class="item-tip">所在地</label>
                                <select name="country_id" id="country">
                                    <?php if(empty($data["country_id"])): ?><option value="null"></option>
                                    <?php else: ?>
                                        <option value="<?php echo ($data["country_id"]); ?>"></option><?php endif; ?>
                                </select>
                                <select name="province_id" id="province">
                                    <?php if(empty($data["province_id"])): ?><option value="null"></option>
                                    <?php else: ?>
                                        <option value="<?php echo ($data["province_id"]); ?>"></option><?php endif; ?>
                                </select>
                                <select name="city_id" id="city">
                                    <?php if(empty($data["city_id"])): ?><option value="null"></option>
                                    <?php else: ?>
                                        <option value="<?php echo ($data["city_id"]); ?>"></option><?php endif; ?>
                                </select>
                            </section>
                            <section class="label-item">
                                <span class="item-tip">婚期</span>
                                <?php if(empty($data["wedding_date"])): ?><select id="year">
                                        <option value="null"></option>
                                    </select>
                                    <select id="mouth">
                                        <option value="null"></option>
                                    </select>
                                    <select id="day">
                                        <option value="null"></option>
                                    </select>
                                <?php else: ?>
                                    <select id="year">
                                        <option value="<?php echo (substr($data["wedding_date"],0,4)); ?>"></option>
                                    </select>
                                    <select id="mouth">
                                        <option value="<?php echo (substr($data["wedding_date"],5,2)); ?>"></option>
                                    </select>
                                    <select id="day">
                                        <option value="<?php echo (substr($data["wedding_date"],8,2)); ?>"></option>
                                    </select><?php endif; ?>
                                <input id="YMD" name="wedding_date" type="hidden" />
                            </section>
                            <section class="save-btn">
                                <span class="item-tip">&emsp;</span>
                                <button type="button" data-role="info" class="submit-btn fcf tac ts4 r4">保存</button>
                                <span class="submit-err">&emsp;</span>
                            </section>
                        </form>
                    </section>
                    <section class="sub-wrap pass none">
                        <label class="label-item">
                            <span class="item-tip">旧密码</span>
                            <input class="old-pass ipt-trigger" type="password" />
                        </label>
                        <label class="label-item">
                            <span class="item-tip">新密码</span>
                            <input class="new-pass ipt-trigger" type="password" placeholder="输入6-20位字符密码" />
                        </label>
                        <label class="label-item">
                            <span class="item-tip">确认新密码</span>
                            <input class="re-pass ipt-trigger" type="password" placeholder="重复密码" />
                        </label>
                        <section class="save-btn">
                            <span class="item-tip">&emsp;</span>
                            <button type="button" data-role="pass" class="submit-btn fcf tac ts4 r4">保存</button>
                            <span class="submit-err">&emsp;</span>
                        </section>
                    </section>
                </div>
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
                <dt>7×24小时&ensp;客服电话</dt>
                <dd>400-070-2080</dd>
            </dl>
        </section>
        <section class="footer-friends i-fcb bc fc9 pt15 c">
            <span class="fl">友情链接</span>
            <nav class="f-fri-con ml20 dlb fr">
                <a href="<?php echo U('/');?>">wederful</a>
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
    
    <script src="/dev_wederful/Public/Home/js/user.js"></script>


</body>

</html>