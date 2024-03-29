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
                        <h1>padding</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>padding</em> 用來設置元素的內邊距。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Property</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">padding-top</span>
        <span class="t-flex5">上內距</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">padding-bottom</span>
        <span class="t-flex5">下內距</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">padding-right</span>
        <span class="t-flex5">右內距</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">padding-left</span>
        <span class="t-flex5">左內距</span>
    </div>
</div>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    padding: top right bottom left;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    padding: 2rem 4rem 3rem 6rem;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>padding</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">auto</span>
        <span class="t-flex5">依瀏覽器預設【預設值】</span>
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

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="qeJZNx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-padding">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/qeJZNx/">
    css-padding</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>假設內距值只有三個數值，代表最後一個值（<em>padding-left</em>）與第二個值（<em>padding-right</em>）相同。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">div {
    padding: 2rem 4rem 6rem;    /* padding-left = padding-right = 4rem */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>如果內距上下值相同，左右值相同，<em>padding</em> 可設定兩個值即可。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="css">div {
    padding: 2rem 4rem;    /* 先上下 後左右 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>若內距四個值都相同，那麼 <em>padding</em> 僅需輸入一個值。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="css">div {
    padding: 2rem;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>


<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area06" class="code-text"><code class="js">object.style.padding="2rem"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
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