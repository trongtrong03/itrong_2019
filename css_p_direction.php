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
                        <time>2019-08-07</time>
                        <h1>direction</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>direction</em> 可用來設置元素文本或元素內並排子元素的書寫對齊方向。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    direction: value;
}</code></pre>
<button class="copy-btn" data-clipboard-target="#area01">
    <span>COPY</span>
</button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    direction: rtl;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>direction</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ltr</span>
        <span class="t-flex5">left to right，左至右【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">rtl</span>
        <span class="t-flex5">right to left，右至左</span>
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

<p>實作部部份分別透過純文本及並排元素來觀察 <em>direction</em> 的變化：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="bXLxwB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-direction">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/bXLxwB/">
    css-direction</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="bXLxde" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-direction">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/bXLxde/">
    css-direction</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p><em>direction</em> 套用在純文本身上幾乎與 <em>text-align</em>
無異，但是在並排元素中，明顯發現參數值若設定為右至左（<em>rtl</em>）排列，第一個子元素 A 會從父元素區域中的最右側開始排列，其餘子元素則依次由右至左靠齊，而這也是
<em>direction</em> 與 <em>text-align</em> 差異最明顯之處。<br>
若要更詳細知道這兩者的比較，可見<a href="css_t_direction_vs_text_align.php" target="_blank">〈direction V.S. text-align〉</a>一文。</p>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area03" class="code-text"><code class="js">object.style.direction="rtl"</code></pre>
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