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
                        <time>2019-06-01</time>
                        <h1>縮圖型影像輪播（Thumb Slider）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://kenwheeler.github.io/slick/" target="_blank">slick</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://kenwheeler.github.io/slick/slick/slick.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="slider-wrap"&gt;
    &lt;div class="slider-stage"&gt;
        &lt;div&gt;img 1&lt;/div&gt;
        &lt;div&gt;img 2&lt;/div&gt;
        &lt;div&gt;img ...&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="slider-nav"&gt;
        &lt;div&gt;img 1s&lt;/div&gt;
        &lt;div&gt;img 2s&lt;/div&gt;
        &lt;div&gt;img ...&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
$(document).on('ready', function() {
    $('.slider-stage').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-stage',
        dots: true,
        centerMode: false,
        focusOnSelect: true
    });
});
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>共同參數：<br>
<em>arrows</em> 是否啟用前後箭頭。<br>
<em>dots</em> 是否啟用控制點。</p>
<br>

<p>大圖（<em>.slider-stage</em>）的參數：<br>
<em>slidesToShow</em> 是一次顯示的項目數量。<br>
<em>fade</em> 是否啟用漸層，若設定為 <em>false</em>，則為水平切換。</p>
<br>

<p>縮圖（<em>.slider-nav</em>）的參數：<br>
<em>slidesToScroll</em> 是切換滾動時的過渡數目。<br>
<em>centerMode</em> 選取狀態中的縮圖是否居中。</p>
<br>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="YoYPZB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq:plugin-slick">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/YoYPZB/">
    jq:plugin-slick</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
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