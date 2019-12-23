<!doctype html>
<html class="pages js view">
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
                        <time>2017-07-15</time>
                        <h1>影像放大鏡（Image Zoom）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="http://www.elevateweb.co.uk/image-zoom/examples" target="_blank">elevate zoom</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://www.elevateweb.co.uk/wp-content/themes/radial/jquery.elevatezoom.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>基本效果：</h2>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;img id="imgZoom" src='圖片連結' data-zoom-image="圖片連結"/&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="javascript">$('#imgZoom').elevateZoom({
    zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 500
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="qjvLNy" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-image-zoom-1" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/qjvLNy/">JQ-image-zoom-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<br>


<h2>圓形的放大鏡：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    zoomType: "lens",
    lensShape: "round",
    lensSize: 200
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="MoxZxV" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-image-zoom-3" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/MoxZxV/">JQ-image-zoom-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<br>


<h2>使用滾輪縮放的放大鏡：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    scrollZoom: true
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="yXwZKG" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-image-zoom-5" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/yXwZKG/">JQ-image-zoom-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<br>


<h2>底圖著色 + 另開放大視窗：</h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="javascript">$('#imgZoom').elevateZoom({
    tint: true, 
    tintColour: '#000', 
    tintOpacity: 0.5
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="xrBmam" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-image-zoom-2" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/xrBmam/">JQ-image-zoom-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<br>


<h2>多圖切換且帶有縮圖：</h2>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="html">&lt;div class="img-wrap"&gt;
    &lt;div class="img-main"&gt;
        &lt;img id="imgZoom" src='中圖連結' data-zoom-image="大圖連結"/&gt;
    &lt;/div&gt;
    &lt;div id="gallery" class="img-cont"&gt;
    &lt;a href="#" data-image="中圖連結" data-zoom-image="大圖連結"&gt;
        &lt;img src="縮圖連結" /&gt;
    &lt;/a&gt;
    &lt;a href="#" data-image="中圖連結" data-zoom-image="大圖連結"&gt;
        &lt;img src="縮圖連結" /&gt;
    &lt;/a&gt;
    &lt;a href="#" data-image="中圖連結" data-zoom-image="大圖連結"&gt;
        &lt;img src="縮圖連結" /&gt;
    &lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    gallery:'gallery',
    zoomType: "inner",
    cursor: "crosshair",
    galleryActiveClass: 'active',
    imageCrossfade: true,
    loadingIcon: '影像連結'
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="vZPbyK" data-default-tab="result" data-user="itrong" data-embed-version="2" data-pen-title="JQ-image-zoom-4" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/vZPbyK/">JQ-image-zoom-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<br>

<h2>參數一覽：</h2>
<p>以下列出一些本套件可用的參數及其用法：</p>
<p>◆ 放大鏡效果的呈現方式：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area09" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    zoomType: "inner",
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<p><em>inner</em> 為顯示於圖片範圍內，<em>lens</em> 為放大鏡尺寸內，沒有設定此行則另開一浮動視窗於一旁。</p>
<br>

<p>◆ 滑鼠移入上方的樣式：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area10" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    cursor: "參數",
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<p>和 CSS 屬性相同，例如：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area11" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    cursor: "crosshair",
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area11">
        <span>COPY</span>
    </button>
</div>

<p>◆ 底圖著色效果：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area12" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    tint: true,     // 是否啟用著色功能。
    tintColour:'色彩代碼',      // 著色的顏色。
    tintOpacity: 數值           // 著色的透明度。
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area12">
        <span>COPY</span>
    </button>
</div>
<p>例如：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area13" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    tint: true, 
    tintColour:'#000', 
    tintOpacity: 0.5
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area13">
        <span>COPY</span>
    </button>
</div>

<p>◆ 可用滑鼠滾輪縮放放大鏡圖片：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area14" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    scrollZoom: true,
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area14">
        <span>COPY</span>
    </button>
</div>

<p>◆ 圓形放大鏡的設定：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area15" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    zoomType: "lens",
    lensShape: "round",     // 也可以是 square（方形）。
    lensSize: 200           // 放大鏡尺寸。
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area15">
        <span>COPY</span>
    </button>
</div>

<p>◆ 修改浮動側欄放大鏡的尺寸：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area16" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    zoomWindowWidth: 數值,
    zoomWindowHeight: 數值,
    lensFadeOut: 500
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area16">
        <span>COPY</span>
    </button>
</div>

<p>◆ 淡入淡出的效果：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area17" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    zoomWindowFadeIn: 數值,
    zoomWindowFadeOut: 數值,
    lensFadeIn: 數值,
    lensFadeOut: 數值,
    lensFadeOut: 500
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area17">
        <span>COPY</span>
    </button>
</div>
<p><em>zoomWindowFadeIn</em> 和 <em>zoomWindowFadeOut</em> 用於放大視窗內的大圖；<em>lensFadeIn</em> 和 <em>lensFadeOut</em>，效果用於放大鏡視窗本身。例如：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area18" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 500,
    lensFadeIn: 500,
    lensFadeOut: 500
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area18">
        <span>COPY</span>
    </button>
</div>

<p>◆ 多張圖片組成群組：</p>
<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area19" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    gallery: "ID 名稱",
    galleryActiveClass: "選取狀態時的 class 名稱"
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area19">
        <span>COPY</span>
    </button>
</div>
<p>例如：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area20" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    gallery: "gallery",
    galleryActiveClass: "active"
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area20">
        <span>COPY</span>
    </button>
</div>

<p>◆ 是否啟用緩動效果：</p>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area21" class="code-text"><code class="javascript">$("#imgZoom").elevateZoom({
    easing: true,
});</code></pre>
    <button class="copy-btn" data-clipboard-target="#area21">
        <span>COPY</span>
    </button>
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