<!doctype html>
<html class="pages js view">
<?php require_once 'include/_head.php' ?>
<body>
    <article id="wrap">
        <!-- Header -->
        <v-header></v-header>
        <v-ihead></v-ihead>
        <main class="inside-wrap">
            <section class="inside-main">
                <!-- 文章標題 -->
                <div class="inside-view">
                    <hgroup>
                        <time>2017-07-25</time>
                        <h1>頁籤型影像輪播（Tabs Slider）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>引用 <a href="http://responsiveslides.com/" target="_blank">responsiveSlides</a> 腳本檔案：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="http://responsiveslides.com/responsiveslides.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="tabs-box"&gt;
    &lt;div class="tabs-main clearfix"&gt;
        &lt;div class="title"&gt;
            &lt;ul&gt;
                &lt;li class="active"&gt;item A&lt;/li&gt;
                &lt;li&gt;item B&lt;/li&gt;
                &lt;li&gt;item C&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
        &lt;div class="content active" &gt;
            &lt;div class="tabslider-box"&gt;
                &lt;ul class="tabslider"&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/20A/fff"&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/80C/fff"&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/F0F/fff"&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="content"&gt;
            &lt;div class="tabslider-box"&gt;
                &lt;ul class="tabslider"&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/333/A00"&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/666/A00"&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/999/A00"&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="content"&gt;
            &lt;div class="tabslider-box"&gt;
                &lt;ul class="tabslider"&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/C90/000"&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/A90/000"&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;img src="http://placehold.it/480x240/E90/000"&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    //tabs
    $(function(){
        var $block = $('.tabs-box');
        $('.tabs-box .title ul li').click(function(){
            var $this = $(this);
            $this.add($('.tabs-main .content', $block)
                .eq($this.index()))
                .addClass('active')
                .siblings('.active')
                .removeClass('active');
        });
    });

    //slides
    $(function(){
        $(".tabslider").responsiveSlides({
            auto: false,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "tabslider-ctrl",
            before: function () {
                $('.events').append("&lt;li&gt;before event fired.&lt;/li&gt;");
            },
            after: function () {
                $('.events').append("&lt;li&gt;after event fired.&lt;/li&gt;");
            }
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>


<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="LjENXe" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="jq-tec-tabslides" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/LjENXe/">jq-tec-tabslides</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<!-- end -->
                </div>
            </section>
        </main>
        <!-- Footer -->
        <v-footer></v-footer>
    </article>
    <?php require_once 'include/_viewjs.php' ?>
</body>

</html>