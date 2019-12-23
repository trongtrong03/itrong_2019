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
                        <time>2017-07-24</time>
                        <h1>水平影像輪播（Horizontal Slider）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="http://bxslider.com/" target="_blank">bxslider</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;ul class="bxslider"&gt;
    &lt;li&gt;&lt;img src="images/img01.jpg" /&gt;&lt;/li&gt;
    &lt;li&gt;&lt;img src="images/img02.jpg" /&gt;&lt;/li&gt;
    &lt;li&gt;&lt;img src="images/img03.jpg" /&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="javascript">$(function() {
    $('.bxslider').bxSlider({
        mode: 'horizontal',
        adaptiveHeight: true,
        adaptiveHeightSpeed: 500,
        touchEnabled: true,
        pager: true,
        controls: true,
        auto: false,
        pause: 4000,
        moveSlides: 1,
        infiniteLoop: true,
        speed: 800,
    });
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="rzNYLp" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="jq-plugin-bxslider" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/rzNYLp/">jq-plugin-bxslider</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<br>

<h2>參數一覽：</h2>
<h4>GENERAL：</h4>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="javascript">mode: 'horizontal',   // 顯示模式
slideSelector: '',
infiniteLoop: true,     //循環啟用
hideControlOnEnd: false,
speed: 800,     //轉場速度
easing: null,
slideMargin: 0,
startSlide: 0,
randomStart: false,     //啟用亂數
captions: true,
ticker: false,
tickerHover: false,
adaptiveHeight: true,       //自動高度
adaptiveHeightSpeed: 500,       //高度轉場速度
video: false,
useCSS: true,
preloadImages: 'visible',
responsive: true,       //響應式自適應化
slideZIndex: 50,        //Slider 的 z 軸
wrapperClass: 'bx-wrapper',     //Slider 的類別選擇器名稱</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<h4>TOUCH：</h4>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="javascript">touchEnabled: true,   //啟用觸碰拖曳模式
swipeThreshold: 50,
oneToOneTouch: true,
preventDefaultSwipeX: true,
preventDefaultSwipeY: false,</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<h4>KEYBOARD：</h4>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="javascript">keyboardEnabled: false,   //啟用鍵盤控制模式,</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<h4>PAGER：</h4>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="javascript">pager: true,
pagerType: 'full',
pagerShortSeparator: ' / ',
pagerSelector: null,
buildPager: null,
pagerCustom: null,</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<h4>CONTROLS：</h4>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="javascript">controls: true,
nextText: 'Next',
prevText: 'Prev',
nextSelector: null,
prevSelector: null,
autoControls: false,
startText: 'Start',
stopText: 'Stop',
autoControlsCombine: false,
autoControlsSelector: null,</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>

<h4>AUTO：</h4>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="javascript">auto: true,
pause: 4000,
autoStart: true,
autoDirection: 'next',
stopAutoOnClick: false,
autoHover: false,
autoDelay: 0,
autoSlideForOnePage: false,</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>

<h4>CAROUSEL：</h4>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="javascript">minSlides: 1,
maxSlides: 1,
moveSlides: 0,
slideWidth: 0,
shrinkItems: false,</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
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