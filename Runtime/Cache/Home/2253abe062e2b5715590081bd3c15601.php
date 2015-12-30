<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    
    <title><?php echo ($title); ?></title>
    <meta name="author" content="wederfull" />
    <meta name="keywords" content="<?php echo ($keywords); ?>" />
    <meta name="Copyright" content="wederful.com &copy;" />
    <meta name="description" content="<?php echo ($description); ?>" />


    <!-- icon -->
    <link rel="shortcut icon" href="/dev_wederful/Public/Home/images/shutPng.png" type="image/png" sizes="16x16 32x32" />

    <!-- basic -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/base.css?20151230" />
    <!-- public -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/public.css?20151230" />
    <!-- header-footer -->
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/head-foot.css?20151230" />
    <!-- this -->
    
    <link rel="stylesheet" href="/dev_wederful/Public/Home/css/list.css?20151230" />


    <!-- global javascript -->
    
    <script>
        var global = {
            type: '<?php echo ($categoryName); ?>',
            baseUrl:'/dev_wederful/<?php echo ($area); ?>/'
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
    
    <main class="main mw c">
        <!-- 封面 -->
        <div class="fs0 pr">
            <section class="w1 bc fcf fs14 pa t0 r0 none">
                <div class="list-weather bc c tac">
                    <dl class="fr ml30">
                        <dt>15:00</dt>
                        <dd>当地时间</dd>
                    </dl>
                    <dl class="fr">
                        <dt class="c">
                            <i class="fl weather-icon">图标</i>
                            33 &#176;C&ensp;99 &#176;F
                        </dt>
                        <dd>当地天气</dd>
                    </dl>
                </div>
            </section>
            <img draggable="false" class="fs14 w1" src="<?php echo ($destinationData["bigpic"]); ?>" alt="<?php echo ($destinationData["name"]); ?>" />
            <img draggable="false" class="middle" src="<?php echo ($destinationData["smallpic"]); ?>" alt="<?php echo ($destinationData["name"]); ?>" />
        </div>
        <!-- 导航 -->
        <nav id="listNav" class="list-nav mb10 bcf">
            <ul class="wm bc c tac fs16">
                <?php if(is_array($ProductCategoryData)): $i = 0; $__LIST__ = $ProductCategoryData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; if($data["is_show"] == '1'): ?><li data-name="category" data-id="<?php echo ($data["id"]); ?>" class="ts4 dlb pl15 pr15 ts4 cp <?php if($data["id"] == $categoryId): ?>active<?php endif; ?>">
                            <?php if($data["id"] == '55'): ?><a href="/dev_wederful/<?php echo ($area); ?>/venue" class="dlb"><?php echo ($data["name"]); ?></a>
                            <?php elseif($data["id"] == '56'): ?>
                                <a href="/dev_wederful/<?php echo ($area); ?>/prewedding" class="dlb"><?php echo ($data["name"]); ?></a>
                            <?php elseif($data["id"] == '56'): ?>
                                <a href="/dev_wederful/<?php echo ($area); ?>/wedding" class="dlb"><?php echo ($data["name"]); ?></a><?php endif; ?>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </nav>
        <!-- 类型选择 -->
        <!--<div class="list-sel wm bc pb10">
            <div id="listSel" class="bcf pl15 pr15">
                <section class="pt5 c">
                    <h4 class="dlb mr20 fl">特色：</h4>
                    <label class="sel-no active mr30 fl cp">不限</label>
                    <div class="sel-con dlb fl">
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂教</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                    </div>
                    <span class="opt-more fr cp fcm" data-role="open"><span>更多</span><i class="i-arrow i-arr-b ts4 pr"></i></span>
                </section>
                <section class="pt5 c">
                    <h4 class="dlb mr20 fl">特色：</h4>
                    <label class="sel-no active mr30 fl cp">不限</label>
                    <div class="sel-con dlb fl">
                        <label><span><i class="i-arrow i-choice-n pr"></i>5万-10万</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                    </div>
                    <span class="opt-more fr cp fcm" data-role="open"><span>更多</span><i class="i-arrow i-arr-b ts4 pr"></i></span>
                </section>
                <section class="pt5 c">
                    <h4 class="dlb mr20 fl">特色：</h4>
                    <label class="sel-no active mr30 fl cp">不限</label>
                    <div class="sel-con dlb fl">
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                    </div>
                    <span class="opt-more fr cp fcm" data-role="open"><span>更多</span><i class="i-arrow i-arr-b ts4 pr"></i></span>
                </section>
                <section class="pt5 c">
                    <h4 class="dlb mr20 fl">特色：</h4>
                    <label class="sel-no active mr30 fl cp">不限</label>
                    <div class="sel-con dlb fl">
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                        <label><span><i class="i-arrow i-choice-n pr"></i>教堂</span></label>
                    </div>
                    <span class="opt-more fr cp fcm" data-role="open"><span>更多</span><i class="i-arrow i-arr-b ts4 pr"></i></span>
                </section>
            </div>
            <span id="toggleList" data-role="open" class="type-more w80 db pl10 pr10 bc tc bcf fcm lh150 cp"><span>更多条件</span><i class="i-arrow i-arr-b ts4 pr"></i></span>
        </div> -->
        <!-- 选择类型结果 -->
            <!--<div id="filter" class="list-filter active wm bcf bc mb10">
            <div class="ml15 mr15 pt10 c">
                <h4 class="dlb mr20 fl">条件：</h4>
                <ul class="fcf fl">
                    <li class="bcm fl">5-10万<i class="i-arrow i-close pr cp"></i></li>
                </ul>
                <span id="clear" class="clear mb10 fcm cp fl">清除</span>
            </div>
        </div> -->
        <!-- 结果展示 （图片） -->
        <div class="wm bc pt10">
            <!--<div class="fcg mb10">
                <div class="c">
                    <div class="fl">仪式场地：<span>100个</span></div>
                    <div class="fr">
                        排序方式：
                        <ul class="sort dlb">
                            <li class="dlb cp mr10">热门度<i class="i-arrow i-point-t pr"></i></li>
                            <li class="active dlb cp">价格<i class="i-arrow i-poi-b pr"></i></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- 图片内容 -->
            <div class="c">
                <?php if(is_array($productData)): $i = 0; $__LIST__ = $productData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prodata): $mod = ($i % 2 );++$i;?><div class="each fl mb20 mr20">
                        <a title="<?php echo ($prodata["name"]); ?>" class="img-wrap db ofh pr" href="/dev_wederful/<?php echo ($area); ?>/<?php echo ($prodata["id"]); ?>" target="_blank">
                            <img class="h1 ts4" src="<?php echo ($prodata["thumbnail"]); ?>" alt="<?php echo ($prodata["name"]); ?>" />
                            <div class="pa b0 l0 w1 c fcf fs18">
                                <span class="each-name fl to ml20"><?php echo ($prodata["name"]); ?></span>
                                <span class="fr mr20">￥<?php echo ($prodata["startPrice"]); ?>起</span>
                            </div>
                        </a>
                        <div class="img-tip bcf c">
                            <span class="fl ml20 fc3"><?php echo ($prodata["option"]); ?></span>
                            <span class="fr mr20 fcg"><?php echo ($prodata["vendor"]["name"]); ?></span>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!-- 分页 -->
        <div id="paging" class="paging tac fs18 bcf mt20">
            <?php echo ($page); ?>
        </div>
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
    <section id="asideFunc" class="aside-func pf z2">
        <!-- <span class="func-contact i-aside i-s-contact cp db" tenantId="9597" title="联系客服"></span> -->
        <span class="func-top i-aside i-s-top cp db" title="回到顶部"></span>
    </section>

    <!-- mask -->
    <div id="mask"></div>

    <!-- base -->
    <script src="/dev_wederful/Public/Home/js/jq.js"></script>
    <!-- public -->
    <script src="/dev_wederful/Public/Home/js/public.js?20151230"></script>
    <!-- // <script src='//kefu.easemob.com/webim/easemob.js?tenantId=9597&hide=true' async='async'></script> -->
    <!-- header-footer -->
    <script src="/dev_wederful/Public/Home/js/head-foot.js?20151230"></script>
    <!-- this -->
    
    <script src="/dev_wederful/Public/Home/js/list-controler.js?20151230"></script>

</body>

</html>