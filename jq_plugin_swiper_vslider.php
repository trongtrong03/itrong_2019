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
                        <time>2019-06-18</time>
                        <h1>垂直影像輪播（Vertical Slider）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://idangero.us/swiper/" target="_blank">Swiper</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;!-- 套件預設的 CSS 樣式 --&gt;
&lt;link rel="stylesheet" href="https://swiperjs.com/package/css/swiper.min.css"&gt;
&lt;!-- Js --&gt;
&lt;script src="https://swiperjs.com/package/js/swiper.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="swiper-container"&gt;
    &lt;div class="swiper-wrapper"&gt;
        &lt;div class="swiper-slide"&gt;
            &lt;img src="img1"&gt;
        &lt;/div&gt;
        &lt;div class="swiper-slide"&gt;
            &lt;img src="img2"&gt;
        &lt;/div&gt;
        &lt;div class="swiper-slide"&gt;
            &lt;img src="img3"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="swiper-pagination"&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;script&gt;
    var swiper = new Swiper('.swiper-container', {
        direction: 'vertical',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>參數說明：<br>
<em>direction</em> 代表輪播切換方向，因本篇採垂直式，故參數為 <em>vertical</em><br>
<em>pagination</em> 控制點管理，如不需要，則將整組參數刪除即可。</p>
<br>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="pXpGGO" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: swiper-vertical slider">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/pXpGGO/">
    jq-plugin: swiper-vertical slider</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>以下是備註：<br>
<a href="https://idangero.us/swiper/" target="_blank">swiper</a> slider 有嵌套影像的元素高度無法自動調整的問題，在 RWD 設計上可能會有些不便，待日後有找到解決方式，將會迅速於本篇進行補完。</p>
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