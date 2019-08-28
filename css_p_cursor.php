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
                        <time>2019-08-13</time>
                        <h1>cursor</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>cursor</em> 可用來設定滑鼠游標在元素範圍內的形狀。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    cursor: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    cursor: pointer;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>cursor</em></h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex2">Description</span>
        <span class="t-flex2">Demo</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">auto</span>
        <span class="t-flex2">採用瀏覽器預設的鼠標【預設值】</span>
        <span class="t-flex2" style="cursor: auto;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">alias</span>
        <span class="t-flex2">預設箭頭右上角又多一個小箭頭</span>
        <span class="t-flex2" style="cursor: alias;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">all-scroll</span>
        <span class="t-flex2">與 <em>move</em> 類似，拖曳的十字箭頭</span>
        <span class="t-flex2" style="cursor: all-scroll;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">cell</span>
        <span class="t-flex2">粗十字</span>
        <span class="t-flex2" style="cursor: cell;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">context-menu</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: context-menu;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">col-resize</span>
        <span class="t-flex2">有左右箭頭的拉桿</span>
        <span class="t-flex2" style="cursor: col-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">copy</span>
        <span class="t-flex2">箭頭右上角多一個「+」號</span>
        <span class="t-flex2" style="cursor: copy;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">crosshair</span>
        <span class="t-flex2">十字線</span>
        <span class="t-flex2" style="cursor: crosshair;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">default</span>
        <span class="t-flex2">預設款式，通常是指箭頭</span>
        <span class="t-flex2" style="cursor: default;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">e-resize</span>
        <span class="t-flex2">指示元素邊緣可向右（東）移動</span>
        <span class="t-flex2" style="cursor: e-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ew-resize</span>
        <span class="t-flex2">指示元素邊緣可向左右（東西）移動</span>
        <span class="t-flex2" style="cursor: ew-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">grab</span>
        <span class="t-flex2">指示元素可被抓取（放開狀態）</span>
        <span class="t-flex2" style="cursor: grab;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">grabbing</span>
        <span class="t-flex2">指示元素可被抓取（抓起狀態）</span>
        <span class="t-flex2" style="cursor: grabbing;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">help</span>
        <span class="t-flex2">箭頭右邊有問號</span>
        <span class="t-flex2" style="cursor: help;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">move</span>
        <span class="t-flex2">拖曳的十字箭頭</span>
        <span class="t-flex2" style="cursor: move;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">n-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: n-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ne-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: ne-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">nesw-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: nesw-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ns-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: ns-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">nw-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: nw-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">nwse-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: nwse-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">no-drop</span>
        <span class="t-flex2">禁止形狀</span>
        <span class="t-flex2" style="cursor: no-drop;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">none</span>
        <span class="t-flex2">不顯示鼠標</span>
        <span class="t-flex2" style="cursor: none;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">not-allowed</span>
        <span class="t-flex2">禁止形狀</span>
        <span class="t-flex2" style="cursor: not-allowed;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">pointer</span>
        <span class="t-flex2">連結顯示的手指狀</span>
        <span class="t-flex2" style="cursor: pointer;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">progress</span>
        <span class="t-flex2">有讀取狀態的箭頭</span>
        <span class="t-flex2" style="cursor: progress;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">row-resize</span>
        <span class="t-flex2">有上下箭頭的拉桿</span>
        <span class="t-flex2" style="cursor: row-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">s-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: s-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">se-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: se-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">sw-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: sw-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">text</span>
        <span class="t-flex2">顯示文本的鼠標</span>
        <span class="t-flex2" style="cursor: text;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vertical-text</span>
        <span class="t-flex2">顯示文本的鼠標（垂直狀）</span>
        <span class="t-flex2" style="cursor: vertical-text;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">w-resize</span>
        <span class="t-flex2"></span>
        <span class="t-flex2" style="cursor: w-resize;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">wait</span>
        <span class="t-flex2">等待狀態</span>
        <span class="t-flex2" style="cursor: wait;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">zoom-in</span>
        <span class="t-flex2">放大</span>
        <span class="t-flex2" style="cursor: zoom-in;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">zoom-out</span>
        <span class="t-flex2">縮小</span>
        <span class="t-flex2" style="cursor: zoom-out;">移動滑鼠至我上方試試</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">URL</span>
        <span class="t-flex2">自定義影像，不同瀏覽器支援的格式也不同，通用格式為 .ico、.cur</span>
        <span class="t-flex2"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex2">繼承父元素的設定值</span>
        <span class="t-flex2"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex2">使用 CSS 官方制定的初始值</span>
        <span class="t-flex2"></span>
    </div>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="JjPGaNZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-cursor">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/JjPGaNZ/">
    css-cursor</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p><em>cursor</em> 除了本身提供的款式參數外，也可以透過 URL 指定影像路徑實現特製的滑鼠游標，不過為了避免連結路徑出錯，一般在指定影像路徑時，後方會再添加內建的游標參數以防萬一。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">div {
    cursor: url(path/name.cur), auto;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area04" class="code-text"><code class="js">object.style.cursor="pointer"</code></pre>
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