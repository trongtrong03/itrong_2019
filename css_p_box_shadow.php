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
                        <h1>box-shadow</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>box-shadow</em> 是 CSS3 新增的屬性，可用來實現元素的陰影效果，由於添加對象是元素本身，故陰影並不會依隨元素內的文字或圖片形狀做變化，但倘若是套用元素本身的屬性，像是利用 <em>border-radius</em> 設定圓角，那麼陰影就會貼緊圓角進行渲染。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    box-shadow: h-offset v-offset blur spread color inset;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    box-shadow: 3px 3px 6px 9px rgba(0, 0, 0, .7);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>box-shadow</em></h2>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">none</span>
        <span class="t-flex5">無陰影效果【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">h-offset</span>
        <span class="t-flex5">水平陰影的位置，可以是負值</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">v-offset</span>
        <span class="t-flex5">垂直陰影的位置，可以是負值</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">blur</span>
        <span class="t-flex5">陰影模糊半徑</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">spread</span>
        <span class="t-flex5">陰影擴散程度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">color</span>
        <span class="t-flex5">陰影顏色</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inset</span>
        <span class="t-flex5">設置內陰影效果</span>
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
<p>這裡有幾個需要注意的地方，首先，<em>h-offset</em>、<em>v-offset</em> 是必填屬性，其餘屬性可填也不可填，包含上述兩者在內，<em>blur</em> 與 <em>spread</em> 鍵入的值皆是數學單位，但不能是百分比。<br>
<em>inset</em> 為單一參數，若元素陰影是為內陰影，則直接填入 <em>inset</em> 即可。</p>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="ObjzXy" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-box-shadow _1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/ObjzXy/">
    css-box-shadow _1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<P><em>box-shadow</em> 也可以透過增加複數陰影設定來實現疊合陰影的效果，只要用逗號將每一組陰影語法隔開即可：</P>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="wVYMLZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-box-shadow _2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/wVYMLZ/">
    css-box-shadow _2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area03" class="code-text"><code class="js">object.style.boxShadow="3px 3px 6px 9px #000"</code></pre>
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