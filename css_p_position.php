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
                        <time>2019-08-12</time>
                        <h1>position</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>position</em> 用來設定該元素與父元素或文檔階層的定位方式，而真正確立元素位置的屬性則是 <em>top</em>、<em>bottom</em>、<em>left</em>、<em>right</em>。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    position: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    position: absolute;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>position</em></h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">static</span>
        <span class="t-flex5">無定位，<em>top</em>、<em>bottom</em>、<em>left</em>、<em>right</em>、<em>z-index</em> 皆無作用【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">relative</span>
        <span class="t-flex5">相對定位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">absolute</span>
        <span class="t-flex5">絕對定位，往上層遍歷直至遇到第一個不是 <em>static</em> 定位的元素</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">fixed</span>
        <span class="t-flex5">絕對定位，以瀏覽器窗口定位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">sticky</span>
        <span class="t-flex5">黏性定位，是絕對定位與相對定位的混合</span>
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

<h2>relative：</h2>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="abovVzB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-position _1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/abovVzB/">
    css-position _1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2>absolute：</h2>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="GRKpOoB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-position _2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/GRKpOoB/">
    css-position _2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2>fixed：</h2>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="ZEzbaBQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-position _3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/ZEzbaBQ/">
    css-position _3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2>sticky：</h2>
<p><em>sticky</em> 是同時兼容相對定位（<em>relative</em>）與絕對定位（<em>fixed</em>）特色的參數，在可視畫面（Viewport）尚未觸及對象元素之前，它就像 <em>relative</em> 相對定位在父元素中；假設可視畫面接觸到對象元素，則轉為 <em>fixed</em> 絕對定位在瀏覽器窗口。</p>
<p>由於 <em>sticky</em> 是 CSS3 新增的參數，且仍在實驗階段，許多主流瀏覽器的舊版本皆不支援，若要顧及兼容性的問題則必須多注意這點。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="bGbVQVz" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-position _4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/bGbVQVz/">
    css-position _4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area03" class="code-text"><code class="js">object.style.position="absolute"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
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