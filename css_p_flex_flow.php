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
                        <time>2019-08-19</time>
                        <h1>flex-flow</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>flex-flow</em> 是包含 <em>flex-direction</em> 與 <em>flex-wrap</em> 兩種屬性的複合屬性，分別控制彈性盒子的排序方向與是否換行。

</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    flex-flow: flex-direction flex-wrap;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">.parent {
    flex-flow: row-reverse wrap;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<!-- 屬性值 -->
<h2 class="cssproperty"><em>flex-direction</em></h2>
<p><em>flex-direction</em> 設定 Flexbox 子元素的方向。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">row</span>
        <span class="t-flex5">水平方向，HTML 在前的先排【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">row-reverse</span>
        <span class="t-flex5">水平方向，HTML 在後的先排</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">column</span>
        <span class="t-flex5">垂直方向，HTML 在前的先排</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">column-reverse</span>
        <span class="t-flex5">垂直方向，HTML 在後的先排</span>
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
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="NbveQa" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-flexbox-flex-direction">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/NbveQa/">
    CSS-flexbox-flex-direction</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<br>

<h2 class="cssproperty"><em>flex-wrap</em></h2>
<p><em>flex-wrap</em> 設定 Flexbox 是單行或多行，同時水平軸的方向決定了新行堆疊的方向。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">nowrap</span>
        <span class="t-flex5">不換行【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">wrap</span>
        <span class="t-flex5">換行，HTML 在後會排到下面</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">wrap-reverse</span>
        <span class="t-flex5">換行，HTML 在後會排到上面</span>
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
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="MbvLKP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-flexbox-flex-wrap">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/MbvLKP/">
    CSS-flexbox-flex-wrap</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>



<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="js">object.style.flexFlow="row-reverse wrap"

/* flex-direction */
object.style.flexDirection="row-reverse"

/* flex-wrap */
object.style.flexWrap="nowrap"
</code></pre>
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