<?php require_once 'include/_viewhead.php' ?>
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
                        <h1>transform-origin</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>transform-origin</em> 可用來設置 <em>transform</em> 效果變化時的基點，例如旋轉（<em>rotate</em>）或傾斜（<em>skew</em>）等的中心位置。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    transform-origin: x-axis y-axis z-axis;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    transform-origin: 20% 40%;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>如果不是 3D 變換，Z 軸的數值可以省略不寫。</p>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>transform</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Type</span>
        <span class="t-flex4">Value</span>
        <span class="t-flex4">Description</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">50% 50% 0</span>
        <span class="t-flex4">元素的正中央【預設值】</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">length</span>
        <span class="t-flex4">固定數字單位</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">%</span>
        <span class="t-flex4">百分比</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">inherit</span>
        <span class="t-flex4">繼承父元素的設定值</span>
        <span class="t-flex1"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"></span>
        <span class="t-flex4">initial</span>
        <span class="t-flex4">使用 CSS 官方制定的初始值</span>
        <span class="t-flex1"></span>
    </div>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="GRKqmEJ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-transform-origin">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/GRKqmEJ/">
    css-transform-origin</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area04" class="code-text"><code class="js">object.style.transformOrigin="20% 40%"</code></pre>
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