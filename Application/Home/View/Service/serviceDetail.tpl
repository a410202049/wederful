<extend name="Public/base" />

<block name="meta">
    <title>详情页 - wederful</title>
    <meta name="author" content="wederfull" />
    <meta name="keywords" content="Wederful,海外婚礼,海外婚礼场地,海外婚礼旅拍" />
    <meta name="Copyright" content="wederful.com &copy;" />
    <meta name="description" content="国内首家海外婚礼垂直电商,提供海外婚礼场地、全球知名婚礼及旅拍摄影师、海外婚礼团队住宿、交通服务、当地游活动及婚礼装扮等服务预定。DIY 海外婚礼,从此变得很简单。" />
</block>

<block name="css">
    <link rel="stylesheet" href="__PUBLIC__/Home/css/detail.css" />
</block>
<block name="global">
    <script>
        var global = {
            collectionPackage: "{:U('User/collectionPackage')}"
        };
    </script>
</block>
<block name="body">
    <body id="body" class="body">
</block>

<block name="main">
    <main class="i-mw pr">
        <!-- 封面 -->
        <section id="detailCover" class="cover-nav pr fs0">
            <img class="detail-cover w1 fs14" src="{$productData.large_img}" alt="封面图" />
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
                        <img draggable="false" src="{$productData.vendorLogo}" class="middle" />
                    </figure>
                    <div class="dlb vam fs16">
                        <h1 class="fc3 mb10">{$productData.name}</h1>
                        <h2 class="fc9">{$productData.vendorName}</h2>
                        <h3 class="pa fc9 r0 mr20">{$productData.name_en}</h3>
                    </div>
                </section>
                <ul class="site-kind tac fs16 mt20 c">
                    <volist name="productData.iconAttrData" id="attIcon">
                        <li>
                            <empty name="attIcon.icon.icon_url">
                                    <img draggable="false" src="__PUBLIC__/Admin/images/icon/choice_photo.png" />
                                <else />
                                    <img draggable="false" src="__PUBLIC__/Admin/images/icon/{$attIcon.icon.icon_url}" />
                            </empty >
                            <if condition="$attIcon.name eq '包含住宿'">
                                    <span>{$attIcon.icon.option}</span>
                                <elseif condition="$attIcon.name eq '最大人数'"/>
                                    <span>最大人数:{$attIcon.value}人</span>
                                <elseif condition="$attIcon.name eq '场地类型'"/>
                                    <span>{$attIcon.icon.option}</span>
                                <elseif condition="$attIcon.name eq '服务范围'"/>
                                    <span>{$attIcon.icon.option}</span>
                                <elseif condition="$attIcon.name eq '服务语言'"/>
                                    <span>{$attIcon.icon.option}</span>
                                <elseif condition="$attIcon.name eq '是否包含化妆'"/>
                                    <span>{$attIcon.icon.option}</span>
                                <elseif condition="$attIcon.name eq '拍摄类型'"/>
                                    <span>{$attIcon.icon.option}</span>
                                <elseif condition="$attIcon.name eq '所在地区'"/>
                                    <span>{$attIcon.value}</span>
                                <else />
                                    <span>{$attIcon.name}</span>
                            </if>
                        </li>
                    </volist>
                </ul>
            </div>
        </section>
        <section class="i-p80">
            <article class="bc i-wm">
                <h2 class="section-label"><if condition="($productData.category_id eq '56') or ($productData.category_id eq '57')">团队介绍<else />场地介绍</if></h2>
                <section class="site-intro c">
                    <div id="siteIntro" class="intro-text dlb i-w5 bb fl">
                        <div class="ofh">
                            <p>{$productData.description}</p>
                        </div>
                        <span class="site-intro-btn db cp fcm mt15" data-i="open">显示全部</span>
                    </div>
                    <div class="intro-ext dlb i-w5 bb fr">
                        <volist name="productData.textAttrData" id="attr">

                            <dl class="mb5">
                                <dt>{$attr.name}:</dt>
                                <if condition="$attr.type eq 'radio' || $attr.type eq 'select'">
                                    <volist name="attr.options" id="op">
                                        <if condition="$attr.value eq $op['id']">
                                            <dd>{$op.option}</dd>
                                        </if>
                                    </volist>
                                <elseif condition="$attr.type eq 'checkbox'"/>
                                    <volist name="attr.options" id="op">
                                        <volist name="attr.value" id="v" key='k'>
                                            <if condition="$v eq $op['id']">
                                                {$op.option}<if condition = "$k neq count($attr['value'])">,</if>
                                            </if>
                                        </volist>
                                    </volist>
                                <else />
                                    <dd>{$attr.value}</dd>
                                </if>
                            </dl>
                        </volist>
                    </div>
                </section>
            </article>
        </section>
        <section class="i-bcm i-p80">
            <div class="bc i-wm">
                <h2 class="section-label"><if condition="($productData.category_id eq '56') or ($productData.category_id eq '57')">客户样片<else />场地图片</if></h2>
                <section id="rollImg" class="roll-img w1000 bc ofh pr">
                    <!-- 以下的 r-i 表示 roll-img  -->
                    <div class="r-i-wrap w1 h1 pr fs0">
                        <figure class="h1 pr">
                            <!-- <div class="h1 dlb pr" data-video="http://static.youku.com/v1.0.0574/v/swf/loader.swf">
                                <img src="__PUBLIC__/Home/images/6.jpg" class="h1">
                            </div>
                            <div class="h1 dlb pr"><img src="__PUBLIC__/Home/images/4.jpg" class="h1"></div> -->
                            <volist name="productData.ImagesData" id="img">
                                <div class="h1 dlb pr"><img src="{$img.img}" class="h1"></div>
                            </volist>
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
                    <volist name="productData.packageData" id="package">
                        <div class="package-item ofh i-bc" data-id="{$package.id}">
                            <div class="p-i-head">
                                <div class="p-i-h-tit open-pack fs18 h1 bb fl cp lh150 c">
                                    <div class="dlb fc3 fl">
                                        <span>
                                            <if condition="$package.package_no eq 1">
                                                套餐A
                                            <elseif condition="$package.package_no eq 2"/>
                                                套餐B
                                            <elseif condition="$package.package_no eq 3"/>
                                                套餐C
                                            <elseif condition="$package.package_no eq 4"/>
                                                套餐D
                                            <elseif condition="$package.package_no eq 5"/>
                                                套餐E
                                            <elseif condition="$package.package_no eq 6"/>
                                                套餐F
                                            <elseif condition="$package.package_no eq 7"/>
                                                套餐G
                                            <elseif condition="$package.package_no eq 8"/>
                                                套餐H
                                            <elseif condition="$package.package_no eq 9"/>
                                                套餐I
                                            <elseif condition="$package.package_no eq 10"/>
                                                套餐J
                                            </if>
                                        </span>
                                        <h3>{$package.name}</h3>
                                    </div>
                                    <ul class="dlb fr">
                                        <li>标准人数：{$package.number_range_min}</li>
                                        <li>RMB {$package.price}</li>
                                    </ul>
                                </div>
                                <ul class="fr h1">
                                    <if condition="$package.is_collection eq '1'">
                                        <li class="like-pack w80 h1 fl pr cp" data-t="fav" title="取消收藏">
                                            <span class="css-hart middle active"></span>
                                        </li>
                                    <else />
                                        <li class="like-pack w80 h1 fl pr cp" data-t="fav" title="收藏">
                                            <span class="css-hart middle"></span>
                                        </li>
                                    </if>
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
                                            <span class="now-date mr20 fs16 dlb">2015-12-12</span>
                                            <i class="i-arrow i-arrow-t dlb mr20 ts4 fr"></i>
                                        </section>
                                        <div class="calendar-con pa l0 w1 bcf i-bc bb z1"></div>
                                    </div>
                                    <dl class="num-wrap dlb fl">
                                        <dt class="dlb fc3 fs16 mr15 fl">选择人数</dt>
                                        <dd class="dlb fl">
                                            <span class="num-up dlb i-bc cp bcf fl mr5" title="增加人数">-</span>
                                            <input class="num-ipt only-num tac i-bc fl" type="text" placeholder="最大容纳30人" />
                                            <span class="num-down dlb i-bc cp bcf fl ml5" title="减少人数">+</span>
                                            <span class="fl ml10">&emsp;</span>
                                        </dd>
                                    </dl>
                                </section>
                                <!-- 套餐项目和赠送服务 -->
                                <section class="i-bc bcf lh200 r4">
                                    <h4 class="fc3 fs16 p-h4 pl20">套餐项目</h4>
                                    <div class="p-i-proj c">
                                        <div class="pkg-content bb fl i-w5">{$package.content}</div>
                                        <section class="fr i-w5">
                                            <h5 class="fs16 fc3">赠送服务</h5>
                                            <div>{$package.gift_service}</div>
                                        </section>
                                    </div>
                                </section>
                                <!-- 增值服务 -->
                                <notempty name="package.addValue">
                                    <div class="i-bc r4 bcf mt20">
                                        <h4 class="fc3 fs16 p-h4 pl20">增值服务</h4>
                                        <ul class="p-i-ext">
                                            <volist name="package.addValue" id="add">
                                                <li class="c mb10">
                                                    <!-- 加上 avtive 表示选中 -->
                                                    <section class="p-ext-tit cp fl mr20" title="{$add.name}">
                                                        <i class="fl dlb h10 w10 mr10"></i>
                                                        <span class="fl to">{$add.name}</span>
                                                    </section>
                                                    <if condition="($add.min_num neq '0') and ($add.max_num neq '0')">
                                                        <section class="p-ext-num dlb fl tac">
                                                            <span class="dlb w20 i-bc cp fl mr5">-</span>
                                                            <input class="only-num i-bc fl" type="text" placeholder="{$add.min_num}个到{$add.max_num}个" />
                                                            <span class="dlb w20 i-bc cp fl ml5">+</span>
                                                        </section>
                                                    </if>
                                                    <span class="fr p-ext-money">￥{$add.price}</span>
                                                </li>
                                            </volist>
                                        </ul>
                                    </div>
                                </notempty>
                            </div>
                            <div class="p-i-foot p15 fs16 tar c">
                                <dl class="dlb vam mr15">
                                    <dt class="dlb">总计:</dt>
                                    <dd class="package-money dlb">RMB {$package.price}</dd>
                                </dl>
                                <span class="ml15 dlb vam r4 bcm fcf pl15 pr15 pt10 pb10 cp mr5">申请预定</span>
                            </div>
                        </div>
                    </volist>
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
                        <img src="__PUBLIC__/Home/images/process.png" alt="预定流程图" />
                    </article>
                    <article class="n-order">
                        <h4 class="mb20 fc3 fs16"><i class="i-tit-icon i-notice"></i>预定须知</h4>
                        <ul class="lh200">
                            {$productData.noticeData.booking_notice}
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
                                {$productData.noticeData.cost_include}
                            </ul>
                        </article>
                        <article>
                            <h4 class="fc3 fs16 mt30 mb10"><i class="i-tit-icon i-no-contain"></i>不包含内容</h4>
                            <ul class="lh200">
                                {$productData.noticeData.cost_not_include}
                            </ul>
                        </article>
                    </div>
                    <div class="i-w5 fr bb pl30">
                        <article>
                            <h4 class="fc3 fs16 mb10"><i class="i-tit-icon i-instruct"></i>其他说明</h4>
                            <ul class="lh200">
                                {$productData.noticeData.other_cost}
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
                            {$productData.noticeData.cancel_policy}
                        </ul>
                    </article>
                    <article class="i-w5 fr bb pl30">
                        <h4 class="fc3 fs16 mb10"><i class="i-tit-icon i-modify"></i>修改政策</h4>
                        <ul class="lh200">
                            {$productData.noticeData.change_policy}
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
                                    <notempty name="destinationData.visa_pic_title">
                                        <h5 class="fc3 mb20">{$destinationData.visa_pic_title}</h5>
                                    </notempty>
                                    <img class="mt5" draggable="false" src="{$destinationData.visa_pic}" alt="{$destinationData.visa_pic_title}" />
                                </figure>
                                <article class="tips-con fr">
                                    <volist name="infoData" id="info">
                                        <if condition="$info.type eq 'visa'">
                                            <section class="mb20 c">
                                                <notempty name="info.url">
                                                    <img draggable="false" class="area-icon" src="__PUBLIC__/Admin/images/icon_area/{$info.url}" />
                                                </notempty>
                                                <div class="tips-each dlb">{$info.content}</div>
                                            </section>
                                        </if>
                                    </volist>
                                </article>
                            </li>
                            <!-- 交通 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <notempty name="destinationData.traffic_pic_title">
                                        <h5 class="fc3 mb20">{$destinationData.traffic_pic_title}</h5>
                                    </notempty>
                                    <img class="mt5" draggable="false" src="{$destinationData.traffic_pic}" alt="{$destinationData.traffic_pic_title}" />
                                </figure>
                                <article class="tips-con fr">
                                    <volist name="infoData" id="info">
                                        <if condition="$info.type eq 'traffic'">
                                            <section class="mb20 c">
                                                <notempty name="info.url">
                                                    <img draggable="false" class="area-icon" src="__PUBLIC__/Admin/images/icon_area/{$info.url}" />
                                                </notempty>
                                                <div class="tips-each dlb">{$info.content}</div>
                                            </section>
                                        </if>
                                    </volist>
                                </article>
                            </li>
                            <!-- 住宿 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <notempty name="destinationData.stay_pic_title">
                                        <h5 class="fc3 mb20">{$destinationData.stay_pic_title}</h5>
                                    </notempty>
                                    <img class="mt5" draggable="false" src="{$destinationData.stay_pic}" alt="{$destinationData.stay_pic_title}" />
                                </figure>
                                <article class="tips-con fr">
                                    <volist name="infoData" id="info">
                                        <if condition="$info.type eq 'stay'">
                                            <section class="mb20 c">
                                                <notempty name="info.url">
                                                    <img draggable="false" class="area-icon" src="__PUBLIC__/Admin/images/icon_area/{$info.url}" />
                                                </notempty>
                                                <div class="tips-each dlb">{$info.content}</div>
                                            </section>
                                        </if>
                                    </volist>
                                </article>
                            </li>
                            <!-- 消费 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <notempty name="destinationData.consumption_pic_title">
                                        <h5 class="fc3 mb20">{$destinationData.consumption_pic_title}</h5>
                                    </notempty>
                                    <img class="mt5" draggable="false" src="{$destinationData.consumption_pic}" alt="{$destinationData.consumption_pic_title}" />
                                </figure>
                                <article class="tips-con fr">
                                    <volist name="infoData" id="info">
                                        <if condition="$info.type eq 'consumption'">
                                            <section class="mb20 c">
                                                <notempty name="info.url">
                                                    <img draggable="false" class="area-icon" src="__PUBLIC__/Admin/images/icon_area/{$info.url}" />
                                                </notempty>
                                                <div class="tips-each dlb">{$info.content}</div>
                                            </section>
                                        </if>
                                    </volist>
                                </article>
                            </li>
                            <!-- 气候 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <notempty name="destinationData.climate_pic_title">
                                        <h5 class="fc3 mb20">{$destinationData.climate_pic_title}</h5>
                                    </notempty>
                                    <img class="mt5" draggable="false" src="{$destinationData.climate_pic}" alt="{$destinationData.climate_pic_title}" />
                                </figure>
                                <article class="tips-con fr">
                                    <volist name="infoData" id="info">
                                        <if condition="$info.type eq 'climate'">
                                            <section class="mb20 c">
                                                <notempty name="info.url">
                                                    <img draggable="false" class="area-icon" src="__PUBLIC__/Admin/images/icon_area/{$info.url}" />
                                                </notempty>
                                                <div class="tips-each dlb">{$info.content}</div>
                                            </section>
                                        </if>
                                    </volist>
                                </article>
                            </li>
                            <!-- 其他 -->
                            <li class="tips-item c">
                                <figure class="i-w5 h1 ofh pr15 bb fl tac">
                                    <notempty name="destinationData.other_pic_title">
                                        <h5 class="fc3 mb20">{$destinationData.other_pic_title}</h5>
                                    </notempty>
                                    <img class="mt5" draggable="false" src="{$destinationData.other_pic}" alt="{$destinationData.other_pic_title}" />
                                </figure>
                                <article class="tips-con fr">
                                    <volist name="infoData" id="info">
                                        <if condition="$info.type eq 'other'">
                                            <section class="mb20 c">
                                                <notempty name="info.url">
                                                    <img draggable="false" class="area-icon" src="__PUBLIC__/Admin/images/icon_area/{$info.url}" />
                                                </notempty>
                                                <div class="tips-each dlb">{$info.content}</div>
                                            </section>
                                        </if>
                                    </volist>
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
                    <img class="w1" src="http://7xo7hn.com1.z0.glb.clouddn.com/1450075236180" />
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
                    <for start="0" end="$randLength">
                        <a class="ts4 dlb cp ml15 r50 <if condition='$i eq 0'>active</if>" data-i="{$i}"></a>
                    </for>
                </nav>
                <section class="ofh">
                    <ul id="recomCon" class="recom-con tac lh150 c">
                        <volist name="rand" id="r">
                            <li class="h1 bcf fl i-bcm">
                                <a class="db fs0 pr" href="__ROOT__/{$area}/{$r.id}">
                                    <img class="w1 h1" src="{$r.thumbnail}" />
                                    <aside class="c bb">
                                        <h3 class="fl to tal">{$r.name}</h3>
                                        <span class="fr">￥{$r.startPrice}</span>
                                    </aside>
                                </a>
                                <div class="img-tip c">
                                    <span class="w90 to fl">{$r.option}</span>
                                    <span class="w200 tar to fr">{$r.vendor.name}</span>
                                </div>
                            </li>
                        </volist>
                    </ul>
                </section>
            </div>
        </section>
    </main>
</block>

<block name="footer-js">
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
                            "iconUrl": "__PUBLIC__\/Home\/images\/info\/resort.png",
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
                            "iconUrl": "__PUBLIC__\/Home\/images\/info\/airport.png",
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
    <link rel="stylesheet" href="__PUBLIC__/Home/css/calendar.css" />
    <script src="__PUBLIC__/Home/js/calendar.js"></script>
    <!-- this -->
    <script src="__PUBLIC__/Home/js/detail-controler.js"></script>
    <!-- 地图 -->
    <!-- <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.css" /> -->
    <!--// <script src="https://api.tiles.mapbox.com/mapbox.js/v2.1.9/mapbox.js"></script>
    // <script src="__PUBLIC__/Home/js/detail-map.js"></script> -->
</block>