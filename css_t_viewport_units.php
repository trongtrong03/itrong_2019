<!doctype html>
<html class="pages css view">
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
                        <time>2019-08-21</time>
                        <h1>可視區域單位（Viewport units）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>以往在設定元素的寬高尺寸單位，我們會習慣使用像素（px）或百分比（%），甚至是 em 或 rem 等，然而有些情況，特別是對文字大小來說，要做到可隨畫面等比放大縮小，一直是令諸多開發者苦惱的問題。在 CSS3 中，出現了以 v 作為開頭的全新數值單位，可以充分改善我們的困擾。</p>

<p>這些單位分別是 <em>vw</em>、<em>vh</em>、<em>vmin</em>，以及<em>vmax</em>，其中，v 指的是 viewport，意即畫面可視區域，例如 <em>vw</em>（viewport width）指的是可視區域的寬度，假設我們給予其數值為 10，代表該元素的寬度將佔整體瀏覽器視窗畫面的 10% 比例，無論視窗如何縮放，元素寬度始終保持在畫面 10% 的佔據比例。</p>

<p>這樣說來，感覺 viewport 和百分比（%）似乎非常神似，然而他們主要的差別在於，百分比的佔幅取決於父元素寬度，而 viewport 則無視父元素，僅以視窗畫面作為依據。</p>

<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">標籤</span>
        <span class="t-flex4">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vw</span>
        <span class="t-flex4">可視畫面的寬度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vh</span>
        <span class="t-flex4">可視畫面的高度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vmin</span>
        <span class="t-flex4">可視畫面的寬度或高度中取一最小值</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vmax</span>
        <span class="t-flex4">可視畫面的寬度或高度中取一最大值</span>
    </div>
</div>

<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div {
    width: 10vw;
    height: 10vh;
    font-size: 10vw;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="VqyPxB" data-default-tab="css,result" data-user="itrong" data-pen-title="CSS3- viewport units" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/VqyPxB/">CSS3- viewport units</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
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