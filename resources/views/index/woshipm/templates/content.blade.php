@include('index.woshipm.templates.header')
@include('index.woshipm.templates.header_nav')
@include('index.woshipm.templates.search_overlay')
<div class="ajaxWrapper" ng-controller="contentCtrl">
    <div class="post-wrapper">

        <div class="contianer post-article is-showed" posturl="http://www.woshipm.com/active/654915.html">
            <div class="left-column">
                <div class="content--withBorder" ng-controller="contentCtrl" ng-init="getContent()">
                    <input type="hidden" id="content_id" name="" value="{{$content_id}}">
                    <article
                            class="single-article post-654915 post type-post status-publish format-standard hentry category-active">
                        <header class="entry-header">
                            <h2 class="post-title">@{{ content.title }}</h2>
                            <div class="post-meta">
                                <time>@{{ content.published_date }}</time>
                                <span class="post-views">
                                    <span class="iconfont icon-view"></span>阅读@{{ content.view }}
                                </span>
                                <span class="post-comment-count">
                                    <span class="iconfont icon-pinglun"></span> 评论 25
                                </span>
                                <span class="post-mark">
                                    <span class="iconfont icon-heart"></span>收藏@{{ content.collection }}
                                </span>
                            </div>
                        </header>
                        <div class="post-top-ad">专为互联网人打造的365天成长计划，构建你的产品、运营知识体系，做个有竞争力的互联网人。
                            <a target="_blank" href="http://y0.cn/aM4DS">查看详情</a>
                        </div>
                        <div class="entry-content">
                            <blockquote>@{{ content.abstract }}</blockquote>
                            <div ng-bind-html="content.content | to_trusted"></div>
                        </div>
                    </article>


                    <div class="support-author">
                        <div class="support-title">写文章不容易，打个赏支持下作者吧</div>
                        <button class="button--pay" data-post-id="654915" data-author="946" data-avatar=""><i
                                    class="iconfont icon-money1"></i><span>|</span>赞赏
                        </button>
                    </div>
                    <div class="post-actions">
                        <button title="收藏"
                                class="button button--primary button--toggle button--recommend button-post-654915 "
                                ng-click="loginOut()"><span
                                    class="iconfont icon-heart"></span><span
                                    class="button-label is-default">收藏</span><span
                                    class="button-label is-active">已收藏</span> | <span
                                    class="count">@{{ content.collection }}</span>
                        </button>
                        <button class="button button--primary button--postlike">
                            <span class="button-defaultState"></span>
                            <span class="button-activeState"></span>
                            <span class="iconfont icon-zan"></span>赞 |
                            <span class="count">@{{ content.like }}</span>
                        </button>
                        <div class="u-floatRight share-actions">
                            <a class="share-weibo" target="_blank" href="">
                                <span class="iconfont icon-weibo"></span>分享到微博
                            </a>
                            <span class="share-wechat">
                                <span class="iconfont icon-wechat"></span>分享到微信
                                <div class="share-qrcode-image">
                                    <img src="/public/upload/image/api.png">
                                    <p>扫码分享到微信</p>
                                </div>
                            </span>
                        </div>
                    </div>
                    <div class="post-tags">
                        <a href="http://www.woshipm.com/tag/%e5%9c%a8%e7%ba%bf%e7%9f%ad%e7%a7%9f" rel="tag">在线短租</a>
                        <a href="http://www.woshipm.com/tag/%e6%88%bf%e4%b8%9c%e5%b8%82%e5%9c%ba" rel="tag">房东市场</a>
                        <a href="http://www.woshipm.com/tag/%e7%9f%ad%e7%a7%9f%e5%b9%b3%e5%8f%b0" rel="tag">短租平台</a>
                        <a href="http://www.woshipm.com/tag/%e8%bf%90%e8%90%a5%e7%8a%b6%e5%86%b5" rel="tag">运营状况</a>
                    </div>
                    <div class="post-ads">
                        <a href="http://y0.cn/Lm82R" target="_blank">
                            <img src="/public/upload/image/ads.png">
                        </a>
                    </div>
                </div>
                <div id="" class="comments-area">
                    <h2 class="comments-title">
                        评论（ <span>25</span> ）
                    </h2>
                    <div id="respond" class="respond respond-654915" role="form">
                        <form action="http://www.woshipm.com/wp-comments-post.php" method="post" id="commentform"
                              data-post="654915" class="comment-form u-clearfix">
                            <div class="comment-avatar">
                                <a class="comment-avatar" href="javascript:;"><img class="avatar" width="40" height="40"
                                                                                   alt=""
                                                                                   src="#"></a>
                            </div>
                            <div class="comm-con">
                                <div class="comment-empty" data-action="popLogin">写下你的想法</div>
                            </div>
                            <input type="hidden" name="comment_post_ID" value="654915" id="comment_post_ID">
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        </form>
                    </div>
                    <div class="commentshow" id="comment-post-654915">
                        <ol class="comment-list comment-list-654915">
                            <li class="comment byuser comment-author-165091 even thread-even depth-1"
                                id="li-comment-208065"
                                itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                <div id="comment-208065" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/165091" target="_blank"><img
                                                    src="#"
                                                    alt="" height="40" width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/165091"
                                                        target="_blank">许凉晴</a></div>
                                            <span class="comment-author-bio">little white</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-08T09:24:24+08:00">
                                                2017/05/08
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>哇 忘记自己是第几期的跑过来和大家讲 作为入门 课程还是很靠谱的 而且认识的小伙伴们也都很棒的哦～我爱森哥！</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208065&#39;, &#39;208065&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-238006 odd alt thread-odd thread-alt depth-1"
                                id="li-comment-208038" itemtype="http://schema.org/Comment" itemscope=""
                                itemprop="comment">
                                <div id="comment-208038" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/238006" target="_blank"><img
                                                    src="#" alt=""
                                                    height="40" width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/238006"
                                                        target="_blank">怡桐</a></div>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-08T08:21:56+08:00">
                                                2017/05/08
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>一个班里有多少人呢？</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208038&#39;, &#39;208038&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment byuser comment-author-lilijiang2004 bypostauthor even depth-2"
                                        id="li-comment-208524" itemtype="http://schema.org/Comment" itemscope=""
                                        itemprop="comment">
                                        <div id="comment-208524" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/946"
                                                                target="_blank">漓江</a><span
                                                                class="post-c-a" title="文章作者">作者</span><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208038">怡桐</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208524&#39;, &#39;208524&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>一个班大约130人，赶快加班主任QQ 2759441299 找组织 <img
                                                            src="#"
                                                            alt=":oops:" class="wp-smiley"
                                                            style="height: 1em; max-height: 1em;"></p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-172163 odd alt depth-2"
                                        id="li-comment-210607"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-210607" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/172163"
                                                                target="_blank">奈文摩尔</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208524">漓江</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-210607&#39;, &#39;210607&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>报名多少费用哟</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-yao even thread-even depth-1"
                                id="li-comment-208036"
                                itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                <div id="comment-208036" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/196100" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/196100"
                                                        target="_blank">yao</a></div>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-08T08:09:48+08:00">
                                                2017/05/08
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>以前不是有2499的吗？现在没了?可以发私信给我</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208036&#39;, &#39;208036&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment byuser comment-author-lilijiang2004 bypostauthor odd alt depth-2"
                                        id="li-comment-208523" itemtype="http://schema.org/Comment" itemscope=""
                                        itemprop="comment">
                                        <div id="comment-208523" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/946"
                                                                target="_blank">漓江</a><span
                                                                class="post-c-a" title="文章作者">作者</span><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208036">yao</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208523&#39;, &#39;208523&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>不是一个课程噢，这个是线上的90天产品实战班 <img
                                                            src="#" alt=":idea:"
                                                            class="wp-smiley" style="height: 1em; max-height: 1em;"></p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-238343 even depth-2" id="li-comment-210421"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-210421" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/238343"
                                                                target="_blank">于乐</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208036">yao</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-210421&#39;, &#39;210421&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>发私信什么好处</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-172163 odd alt depth-2"
                                        id="li-comment-210608"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-210608" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/172163"
                                                                target="_blank">奈文摩尔</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208036">yao</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-210608&#39;, &#39;210608&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>2499？</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-Rocoberry even thread-odd thread-alt depth-1"
                                id="li-comment-208030" itemtype="http://schema.org/Comment" itemscope=""
                                itemprop="comment">
                                <div id="comment-208030" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/96050" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/96050"
                                                        target="_blank">Rocoberry</a></div>
                                            <span class="comment-author-bio">每天都在进步的小蜗牛</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-08T00:39:23+08:00">
                                                2017/05/08
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>应届生表示费用有点高😥</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208030&#39;, &#39;208030&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment byuser comment-author-lilijiang2004 bypostauthor odd alt depth-2"
                                        id="li-comment-208526" itemtype="http://schema.org/Comment" itemscope=""
                                        itemprop="comment">
                                        <div id="comment-208526" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/946"
                                                                target="_blank">漓江</a><span
                                                                class="post-c-a" title="文章作者">作者</span><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208030">Rocoberry</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208526&#39;, &#39;208526&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>可以分期呢 <img src="#"
                                                              alt=":mrgreen:" class="wp-smiley"
                                                              style="height: 1em; max-height: 1em;">
                                                    ，找班主任Eva要分期地址，班主任QQ 2759441299</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-41825 even thread-even depth-1"
                                id="li-comment-208020"
                                itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                <div id="comment-208020" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/41825" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/41825"
                                                        target="_blank">星宸</a></div>
                                            <span class="comment-author-bio">某互联网科技 产品设计</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-07T21:53:32+08:00">
                                                2017/05/07
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>已占座，坐等开课</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208020&#39;, &#39;208020&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-41827 odd alt thread-odd thread-alt depth-1"
                                id="li-comment-208018" itemtype="http://schema.org/Comment" itemscope=""
                                itemprop="comment">
                                <div id="comment-208018" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/41827" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/41827"
                                                        target="_blank">阿源</a></div>
                                            <span class="comment-author-bio">端点科技 产品经理</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-07T21:51:22+08:00">
                                                2017/05/07
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>6月2日开课，时间有点晚了，有更早一点的吗？老板想我早点学完好干活 <img
                                                    src="#" alt=":cry:"
                                                    class="wp-smiley" style="height: 1em; max-height: 1em;"></p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208018&#39;, &#39;208018&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-41832 even thread-even depth-1"
                                id="li-comment-208017"
                                itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                <div id="comment-208017" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/41832" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/41832"
                                                        target="_blank">南屿 </a></div>
                                            <span class="comment-author-bio">永远都不会晚</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-07T21:49:37+08:00">
                                                2017/05/07
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>如果加班错过了直播，怎么办？</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208017&#39;, &#39;208017&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment byuser comment-author-Warmen odd alt depth-2"
                                        id="li-comment-208023"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208023" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/41824"
                                                                target="_blank">Warmen</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208017">南屿 </a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208023&#39;, &#39;208023&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>错过直播可以看回放的，我们班还有同学分享笔记，我经常来不及细看就会先看他们的笔记</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-172163 even depth-2" id="li-comment-210612"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-210612" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/172163"
                                                                target="_blank">奈文摩尔</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208023">Warmen</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-210612&#39;, &#39;210612&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>213</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-165800 odd alt thread-odd thread-alt depth-1"
                                id="li-comment-208014" itemtype="http://schema.org/Comment" itemscope=""
                                itemprop="comment">
                                <div id="comment-208014" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/165800" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/165800"
                                                        target="_blank">流云逐月</a></div>
                                            <span class="comment-author-bio">产品汪</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-07T21:45:41+08:00">
                                                2017/05/07
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>我特别焦虑，真的，感觉身边的同龄人发展都不在一个层次了，老师能给我指点一下么？</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208014&#39;, &#39;208014&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment byuser comment-author-41834 even depth-2" id="li-comment-208016"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208016" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/41834"
                                                                target="_blank">泰山之巅 </a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208014">流云逐月</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208016&#39;, &#39;208016&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p><img src="#"
                                                        alt=":o" class="wp-smiley"
                                                        style="height: 1em; max-height: 1em;">
                                                    同感，越来越发现自己弱爆了，公司产品都是老板说了算，我就是一个画原型的，心塞塞</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-165811 odd alt depth-2"
                                        id="li-comment-208019"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208019" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/165811"
                                                                target="_blank">狗哥</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208014">流云逐月</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208019&#39;, &#39;208019&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>老师就在班级群里，我也是报名后才知道的。我个人感觉老师解答问题上还是蛮尽心的，有次课后我提了5个问题，老师每个问题都回答了好几百字
                                                    <img
                                                            src="#"
                                                            alt=":oops:" class="wp-smiley"
                                                            style="height: 1em; max-height: 1em;"> 希望对你有所帮助</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-165802 even depth-2" id="li-comment-208021"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208021" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/165802"
                                                                target="_blank">猫了个咪</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208019">狗哥</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208021&#39;, &#39;208021&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>狗哥，你报名了？</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-165811 odd alt depth-2"
                                        id="li-comment-208022"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208022" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/165811"
                                                                target="_blank">狗哥</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208021">猫了个咪</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208022&#39;, &#39;208022&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>嗯，不是这一期，我是4月份开学的</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-41836 even thread-even depth-1"
                                id="li-comment-208012"
                                itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                <div id="comment-208012" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/41836" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/41836"
                                                        target="_blank">自有子在</a></div>
                                            <span class="comment-author-bio">某电子商务 运营副总监</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-07T21:42:17+08:00">
                                                2017/05/07
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>星彻老师，已爱上。一次公开课就成了迷妹</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208012&#39;, &#39;208012&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment byuser comment-author-41834 odd alt depth-2"
                                        id="li-comment-208013"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208013" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/41834"
                                                                target="_blank">泰山之巅 </a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208012">自有子在</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208013&#39;, &#39;208013&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>星彻老师有公开课？有链接吗？</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                    <li class="comment byuser comment-author-41836 even depth-2" id="li-comment-208015"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208015" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/41836"
                                                                target="_blank">自有子在</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208013">泰山之巅 </a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208015&#39;, &#39;208015&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>上个月的时候了，我给你找个文字版，你看这个http://www.woshipm.com/pmd/622752.html</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li><!-- #comment-## -->
                            <li class="comment byuser comment-author-41838 odd alt thread-odd thread-alt depth-1"
                                id="li-comment-208011" itemtype="http://schema.org/Comment" itemscope=""
                                itemprop="comment">
                                <div id="comment-208011" class="comment-block">
                                    <div class="comment-avatar pm-relative">
                                        <a href="http://www.woshipm.com/u/41838" target="_blank"><img
                                                    src="#" alt="" height="40"
                                                    width="40" class="avatar"></a>
                                    </div>
                                    <div class="comment-info">
                                        <div class="comment-meta">
                                            <div class="comment-author" itemprop="author"><a
                                                        href="http://www.woshipm.com/u/41838"
                                                        target="_blank">孙大圣</a></div>
                                            <span class="comment-author-bio">康泰纳仕（中国） 高级产品经理</span>
                                            <div class="comment-time" itemprop="datePublished"
                                                 datetime="2017-05-07T21:40:28+08:00">
                                                2017/05/07
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content" itemprop="description">
                                        <p>厉害了我的哥，居然第9期了，老师也越来越6了，看的我都兴奋了</p>
                                    </div>

                                    <div class="u-clearfix comment-bottom"><span
                                                class="comment-reply-link u-cursorPointer"
                                                onclick="return addComment.moveForm(&#39;comment-208011&#39;, &#39;208011&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment byuser comment-author-Warmen even depth-2" id="li-comment-208024"
                                        itemtype="http://schema.org/Comment" itemscope="" itemprop="comment">
                                        <div id="comment-208024" class="comment-block">
                                            <div class="comment-info">
                                                <div class="comment-meta">
                                                    <div class="comment-author" itemprop="author"><a
                                                                href="http://www.woshipm.com/u/41824"
                                                                target="_blank">Warmen</a><span
                                                                class="color-noraml">回复</span><a
                                                                href="http://www.woshipm.com/active/654915.html#comment-208011">孙大圣</a>
                                                    </div>
                                                    <span class="comment-reply-link u-cursorPointer"><span
                                                                class="comment-reply-link u-cursorPointer"
                                                                onclick="return addComment.moveForm(&#39;comment-208024&#39;, &#39;208024&#39;, &#39;respond&#39;, &#39;654915&#39;)">回复</span></span>
                                                </div>
                                            </div>
                                            <div class="comment-content" itemprop="description">
                                                <p>大师兄，师傅被人抓走了，快来起点学院做校友啦</p>
                                            </div>
                                        </div>
                                    </li><!-- #comment-## -->
                                </ol><!-- .children -->
                            </li><!-- #comment-## -->
                        </ol>
                        <nav class="commentnav" data-fuck="654915"></nav>
                    </div>
                </div>
                <h2 class="comments-title">推荐阅读</h2>
                <div class="promote-posts">


                    <div class="promote-post-item">
                        <a target="_blank" href="http://www.woshipm.com/operate/668302.html"
                           style="background-image: url(http://image.woshipm.com/wp-files/2017/05/heXi1VRXdUxFqkwQN0Qt.jpg)"
                           class="promote-post-image">
                            <span>再谈定位理论：定位理论的再升级</span>
                        </a>
                    </div>
                    <div class="promote-post-item">
                        <a target="_blank" href="http://www.woshipm.com/it/668489.html"
                           style="background-image: url(http://image.woshipm.com/wp-files/2017/05/XXS3vAWjkqUZeU1GUo2k.png)"
                           class="promote-post-image">
                            <span>全面解析电商巨头力推的“新零售”</span>
                        </a>
                    </div>
                    <div class="promote-post-item">
                        <a target="_blank" href="http://y0.cn/2IbUV"
                           style="background-image: url(http://image.woshipm.com/wp-files/2017/03/Il8v4dI18IcRXTVeoLit.jpg)"
                           class="promote-post-image">
                            <span>每天3块钱，500门产品、运营课程随便学，做个有竞争力互联网人</span>
                        </a>
                    </div>
                    <div class="promote-post-item">
                        <a target="_blank" href="http://www.woshipm.com/evaluating/667920.html"
                           style="background-image: url(http://image.woshipm.com/wp-files/2017/05/lvzozeMQUbdm4ctxFpVz.jpg)"
                           class="promote-post-image">
                            <span>可能是最走心的“菜谱类”应用竞品分析</span>
                        </a>
                    </div>
                    <div class="promote-post-item">
                        <a target="_blank" href="http://www.woshipm.com/pmd/668149.html"
                           style="background-image: url(http://image.woshipm.com/wp-files/2017/05/oI0kXb9UakrzaQunHDS0.jpg)"
                           class="promote-post-image">
                            <span>场景入口知识浅析：从马斯洛层次理论出发的用户场景分类</span>
                        </a>
                    </div>
                    <div class="promote-post-item">
                        <a target="_blank" href="http://www.woshipm.com/pmd/668695.html"
                           style="background-image: url(http://image.woshipm.com/wp-files/2017/05/jyJVtIPS2Bzi5JOf0lAD.png)"
                           class="promote-post-image">
                            <span>做产品，自己的狗粮自己得先吃</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="sidebar">
                    <div class="widget">
                        <div class="author-board" ng-controller="authorBoardCtrl" ng-init="getAuthor()">
                            <div class="author-board-left">
                                <a href="http://www.woshipm.com/u/946" target="_blank" id="article-avatar-654915"><img
                                            alt=""
                                            src="#"
                                            srcset="http://cn.gravatar.com/avatar/3d2b199b08c81262d8d4b866f33ae18a?s=112&amp;d=mm&amp;r=g 2x"
                                            class="avatar avatar-56 photo"
                                            height="56"
                                            width="56"></a>
                                <button class="button button--toggleAuthor author-board-btn" data-action="showLoginForm"
                                        data-id="946"><span class="text">订阅专栏</span></button>
                            </div>
                            <div class="author-board-right"><h3 class="auhtor-title"><a target="_blank"
                                                                                        href="http://www.woshipm.com/u/946">
                                        %=doc.document_author%><span
                                                class="is-staff">作者</span></a></h3>
                                <p class="author-descripiton">专业杂工一枚，混迹于IT、产品周边，继续苦逼的做着残品的梦</p>
                                <div class="author-meta"><span>565 篇<i>作品</i></span><span>407 万<i>阅读总量</i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-ad fixed-sidebar-id">
                        <a href="http://y0.cn/N1aeF" target="_blank"> <img src="/public/upload/image/ad1.png" alt="">
                        </a>
                        <a href="http://y0.cn/Whr3A" target="_blank"> <img src="/public/upload/image/ad2.jpg" alt="">
                        </a>
                        <a href="http://y0.cn/5GMYS" target="_blank"> <img src="/public/upload/image/ad3.jpg#" alt="">
                        </a>
                    </div>
                    <aside id="" class="widget" ng-controller="hotDocCtrl" ng-init="getHotDoc()">
                        <h3 class="widget-title">热门文章</h3>
                        <ul class="hot-question-list">
                            <li class="hot-question-item"  ng-repeat="hot in hotList">
                                <span class="num">1</span>
                                <a href="@{{ hot.category }}/@{{ hot.id }}" target="_blank"
                                   class="link">@{{ hot.title }}</a>
                            </li>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>

    </div>
</div>
@include('index.woshipm.templates.site_footer')
@include('index.woshipm.templates.footer')

