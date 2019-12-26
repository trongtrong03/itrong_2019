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
                        <time>2019-05-10</time>
                        <h1>水平鍵字效果跑馬燈（News Ticker）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://www.jquerynewsticker.com/" target="_blank">jQuery Nres Ticker</a></p>
<p>jQuery News Ticker 是一款跑馬燈特效插件，有別於尋常 &lt;marquee&gt; 格式水平或垂直的移動方式，這款跑馬燈是由一個文字框浮標帶出內容文字的效果，使用上也相當輕量，讓跑馬燈可以有不同的動態呈現方式。</p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://www.jquerynewsticker.com/includes/jquery.ticker.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;ul id="js-news" class="js-hidden"&gt;
    &lt;li class="news-item"&gt;&lt;a href="#0"&gt;title1&lt;/a&gt;&lt;/li&gt;
    &lt;li class="news-item"&gt;&lt;a href="#0"&gt;title2&lt;/a&gt;&lt;/li&gt;
    &lt;li class="news-item"&gt;&lt;a href="#0"&gt;title3,&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(function () {
        $('#js-news').ticker({
            controls: false,        // Whether or not to show the jQuery News Ticker controls
            titleText: 'News',   // To remove the title set this to an empty String
            fadeInSpeed: 600,      // Speed of fade in animation
            fadeOutSpeed: 300      // Speed of fade out animation
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="MdyJER" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: news ticker">
      <span>See the Pen <a href="https://codepen.io/itrong/pen/MdyJER/">
      jq-plugin: news ticker</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
      on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2>參數列表：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;script&gt;
    $(function () {
        $('#js-news').ticker({
            speed: 0.10,           // The speed of the reveal
            ajaxFeed: false,       // Populate jQuery News Ticker via a feed
            feedUrl: false,        // The URL of the feed
            feedType: 'xml',       // Currently only XML
            htmlFeed: true,        // Populate jQuery News Ticker via HTML
            debugMode: true,       // Show some helpful errors in the console or as alerts
            controls: false,        // Whether or not to show the jQuery News Ticker controls
            titleText: 'News',   // To remove the title set this to an empty String
            displayType: 'reveal', // Animation type - current options are 'reveal' or 'fade'
            direction: 'ltr',       // Ticker direction - current options are 'ltr' or 'rtl'
            pauseOnItems: 2000,    // The pause on a news item before being replaced
            fadeInSpeed: 600,      // Speed of fade in animation
            fadeOutSpeed: 300      // Speed of fade out animation
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
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