<extend name="Public/base" />

<block name="meta">
	<title>我们的故事 - wederful</title>
	<meta name="author" content="wederfull" />
    <meta name="keywords" content="Wederful,海外婚礼,海外婚礼场地,海外婚礼旅拍" />
    <meta name="Copyright" content="wederful.com &copy;" />
    <meta name="description" content="国内首家海外婚礼垂直电商,提供海外婚礼场地、全球知名婚礼及旅拍摄影师、海外婚礼团队住宿、交通服务、当地游活动及婚礼装扮等服务预定。DIY 海外婚礼,从此变得很简单。" />
</block>

<block name="css">
    <link rel="stylesheet" href="__PUBLIC__/Home/css/article.css" />
</block>

<block name="global">
    <script>
        var global = {
            praiseUrl:'{:U("Article/praise")}',
            articleId:'{$data.id}'
        };
    </script>
</block>

<block name="body">
    <body id="body" class="body">
</block>

<block name="main">
    <main id="main" class="main">
        <section class="article-all-wrap bc">
            <h1 class="lovey-planet text-hide">爱星人的故事都在这儿</h1>
            <nav class="type-nav i-b-t tac">
                <volist name="categorys" id="category">
                    <if condition="$category.id eq '4'">
                        <a href="__ROOT__/lovelyplanet/lgbt" class="lgbt text-hide">{$category.name}</a>
                    <elseif condition="$category.id eq '3'"/>
                        <a href="__ROOT__/lovelyplanet/guru" >{$category.name}</a>
                    <elseif condition="$category.id eq '2'"/>
                        <a href="__ROOT__/lovelyplanet/story" >{$category.name}</a>
                    <elseif condition="$category.id eq '1'"/>
                        <a href="__ROOT__/lovelyplanet/inspired" >{$category.name}</a>
                    </if>
                </volist>
            </nav>
            <section class="mt30 c">
                <div class="article-wrap fl">
                    <!-- 文章 -->
                    <article id="article">
                        <!-- 文章大图 -->
                        <figure id="artImg">
                            <img draggable="false" class="w1" src="{$data.bigpic}" />
                        </figure>
                        <h2 id="artTit" class="fc3 fs22 mt20 mb10">{$data.title}</h2>
                        <h3 id="artSubTit" class="fs16 mb20">{$data.subtitle}</h3>
                        <section class="i-b-t fc9 pt20 pb20 c">
                            <time class="dlb mr30">{$data.createtime|substr=0,10}</time>
                            <dl class="dlb">
                                <dt class="dlb"><if condition="$data.source eq '0'">转载：<else />作者：</if></dt>
                                <dd class="dlb">{$data.author}</dd>
                            </dl>
                        </section>
                        <div class="article-con">{$data.content}</div>
                    </article>
                    <!-- 点赞 -->
                    <button class="art-praise db" type="button"><b class="db fs18">+1</b></button>
                    <!-- 阅读数量 -->
                    <section class="mb20 fc9">
                        <dl class="dlb mr30">
                            <dt class="dlb">阅读：</dt>
                            <dd class="dlb">{$data.visit_num}</dd>
                        </dl>
                        <dl class="dlb">
                            <dt class="dlb">喜欢：</dt>
                            <dd id="artLikeNum" class="dlb">{$data.praise_num}</dd>
                        </dl>
                    </section>
                    <!-- 标签和分享 -->
                    <section class="c">
                        <dl class="fl">
                            <dt class="dlb fcm">标签：</dt>
                            <dd class="art-tag dlb">
                                <volist name="tag" id="t">
                                    <a>{$t.name}</a>
                                </volist>
                            </dd>
                        </dl>
                        <dl id="artShare" class="fr">
                            <dt class="dlb fc9 mr20">分享到</dt>
                            <dd class="dlb vam">
                                <a target="_blank" class="share-weibo cp mr10"></a>
                                <!-- <a target="_blank" class="share-weixin cp"></a> -->
                            </dd>
                        </dl>
                    </section>
                    <!-- 相关文章 -->
                    <span class="db fc3 mt10 pt20 i-b-t">相关文章</span>
                    <ul class="mt20 lh150">
                        <volist name="aboutArticle" id="about">
                            <li class="c">
                                <a class="fl" href="__ROOT__/lovelyplanet/id/{$about.id}">{$about.title}</a>
                                <time class="fr">{$about.createtime|substr=0,10}</time>
                            </li>
                        </volist>
                    </ul>
                </div>
                <aside id="artSide" class="article-side bcf fr">
                    <!-- tags -->
                    <!-- <section class="side-tag pb30">
                        <h4 class="fs20 fc3 tac">TAGS</h4>
                        <div>
                            <a>攻略</a>
                            <a>海外</a>
                            <a>场地</a>
                        </div>
                    </section> -->
                    <!-- 宣传 -->
                    <section class="i-b-t pt30 pb30">
                        <figure>
                            <img draggable="false" class="w1" src="http://7xo7hn.com1.z0.glb.clouddn.com/129_thumbnail_1448261362423" />
                        </figure>
                    </section>
                    <!-- 热门文章 -->
                    <section class="side-hot-art i-b-t pt20">
                        <h4 class="fs16 fc3 tac mb10">热门文章</h4>
                        <div>
                            <volist name="listHot" id="hot">
                                <section>
                                    <time class="fc9">{$hot.createtime|substr=0,10}</time>
                                    <h2><a href="__ROOT__/lovelyplanet/id/{$hot.id}">{$hot.title}</a></h2>
                                    <h3 class="fc9">{$hot.subtitle}</h3>
                                </section>
                            </volist>
                        </div>
                    </section>
                    <!-- 分享我的故事 -->
                    <!-- <button class="share-you db bc mt20 fcm bcf ts4" type="button">分享我的故事</button> -->
                </aside>
            </section>
        </section>
    </main>
</block>

<block name="footer-js">
    <script src="__PUBLIC__/Home/js/article.js"></script>
</block>