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
                        <time>2019-08-16</time>
                        <h1>background-position</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>background-position</em> 可用來設定背景影像的定位。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    background-position: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    background-position: 50% 50%;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p><em>background-position</em> 包含水平與垂直位置的設定，若參數值是數字單位或百分比（可以混用），第一個數值為水平位置，第二個數值是垂直單位，此外，當只設定一個值（水平位置）的時候，另一個值（垂直位置）將默認為是 50%。</p>
<p>呈上，假如使用參數是 <em>left</em>、<em>right</em>、<em>center</em>、<em>top</em>、<em>bottom</em>，定位前後值就沒有前值是水平、後值是垂直位置的絕對性，如果只填入一個參數，瀏覽器會判讀該值代表的方向定位後，另一個位置自動帶入 <em>center</em> 參數。</p>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>background-position</em></h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">0% 0%</span>
        <span class="t-flex5">左上【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">x% y%</span>
        <span class="t-flex5">百分比</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">xpos ypos</span>
        <span class="t-flex5">固定數字單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">left top</span>
        <span class="t-flex5">左上 = 0% 0%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">left center</span>
        <span class="t-flex5">左中 = 0% 50%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">left bottom</span>
        <span class="t-flex5">左下 = 0% 100%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">center top</span>
        <span class="t-flex5">中上 = 50% 0%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">center center</span>
        <span class="t-flex5">正中 = 50% 50%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">center bottom</span>
        <span class="t-flex5">中下 = 50% 100%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">right top</span>
        <span class="t-flex5">右上 = 100% 0%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">right center</span>
        <span class="t-flex5">右中 = 100% 50%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">right bottom</span>
        <span class="t-flex5">右下 = 100% 100%</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex5">繼承父元素的設定值</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex5">使用 CSS 官方制定的初始值</span>
    </div>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="mdbPvPy" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-background-position">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/mdbPvPy/">
    css-background-position</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>此外，<em>background-position</em> 屬性的 <em>x</em>、<em>y</em> 值也可以拆分成獨立屬性：</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">selector {
    background-position-x: value;
    background-position-y: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="js">object.style.backgroundPosition="center"

// background-position-x
object.style.backgroundPositionX="center"

// background-position-y
object.style.backgroundPositionY="center"
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<!-- 瀏覽器支援性 -->
<h2 class="browser"></h2>
<div class="is-browser">
    <div class="t-form">
        <div class="t-head">
            <span class="t-flex1">Chrome</span>
            <span class="t-flex1">Firefox</span>
            <span class="t-flex1">IE9以下</span>
            <span class="t-flex1">IE Edge</span>
            <span class="t-flex1">Safari</span>
            <span class="t-flex1">Opera</span>
        </div>
        <div class="t-row">
            <span class="t-flex1"><i class="fab fa-chrome"></i></span>
            <span class="t-flex1"><i class="fab fa-firefox"></i></span>
            <span class="t-flex1"><i class="fab fa-internet-explorer"></i></span>
            <span class="t-flex1"><i class="fab fa-edge"></i></span>
            <span class="t-flex1"><i class="fab fa-safari"></i></span>
            <span class="t-flex1"><i class="fab fa-opera"></i></span>
        </div>
        <div class="t-row">
            <span class="t-flex1 is-none">-webkit-</span>
            <span class="t-flex1 is-none">-moz-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1 is-none">-webkit-</span>
            <span class="t-flex1 is-none">-o- / -webkit-</span>
        </div>
    </div>
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