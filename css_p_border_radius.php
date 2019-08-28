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
                        <time>2019-08-10</time>
                        <h1>border-radius</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>border-radius</em> 是 CSS3 新增的屬性，主要用來設置元素的圓角邊框效果。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    border-radius: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    border-radius: 100%;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>border-radius</em></h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">0</span>
        <span class="t-flex5">無【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">length</span>
        <span class="t-flex5">固定數字單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">%</span>
        <span class="t-flex5">百分比</span>
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

<p>當只設定一個數字單位，代表元素的四個角通通套用該數值的圓角，然而，<em>border-radius</em> 完整公式事實上是這樣：</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">selector {
    border-radius: top-left top-right bottom-right bottom-left;    /* 上左 上右 下右 下左 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h2><em>border-radius</em> 細分的四個屬性：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Property</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">border-top-left-radius</span>
        <span class="t-flex5">邊框左上角的導圓角形狀</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">border-top-right-radius</span>
        <span class="t-flex5">邊框右上角的導圓角形狀</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">border-bottom-right-radius</span>
        <span class="t-flex5">邊框右下角的導圓角形狀</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">border-bottom-left-radius</span>
        <span class="t-flex5">邊框左下角的導圓角形狀</span>
    </div>
</div>

<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="WVgLzW" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-border-radius _1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/WVgLzW/">
    css-border-radius _1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>簡單來說就是以元素左上角開始順時針輸入數值的概念，假設只填入兩個值，視同省略下右與下左的參數，這時下右（bottom-right）會判定與上左（top-left）相同，下左（bottom-left）則與上右（top-right）相同。</p>
<br>

<p>除此之外，也可以針對每個圓角的水平、垂直曲度做調整，公式是利用「/」區隔即可，如下：</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="css">selector {
    border-radius: value / value;    /* 水平曲度 / 垂直曲度 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="RXYvwe" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-border-radius _2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RXYvwe/">
    css-border-radius _2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
</p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area05" class="code-text"><code class="js">object.style.borderRadius="100%"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
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
            <span class="t-flex1 is-none"><i class="fab fa-internet-explorer"></i></span>
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