<!doctype html>
<html class="pages html view">
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
                        <time>2019-05-29</time>
                        <h1>Learn03-- SVG 的基本圖形 ● 其一：矩形、圓角矩形</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>許許多多圖形都是由基本形狀堆砌交疊出來的，例如我們常見的幾何圖形：矩形、圓形、多邊形...等等，本篇將一一記錄 SVG 的基本圖形相關程式碼及設定參數。<br>
<p>這一連串學習過程將以 Oxxo Studio 的 <a href="https://www.oxxostudio.tw/articles/201410/svg-tutorial.html" target="_blank">SVG 完整教學 31 天</a> 系列教學文章作為主體學習對象，因此筆記順序也會依照其教學課程分篇記述，偶穿插一些其他各大教學平台輔助學習。</p></p>
<br>
<h2>矩形：</h2>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;rect x="10" y="10" width="100" height="100"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>這是最基本的矩形語法，使用 <em>&lt;rect&gt;</em> 標籤，其中，<em>x</em>、<em>y</em> 屬性指的是矩形「左上角」的座標位置（像素），<em>width</em>、<em>height</em> 則分別指的是寬與高。</p>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="xNyBPG" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn2-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/xNyBPG/">
    SVG-learn2-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>可以發現在沒有設定填色的情況下，SVG 預設填充顏色為黑色。<br>
設置顏色的屬性有兩個，分別是 <em>fill</em>（填色）、<em>stroke</em>（邊框顏色），如果要設定邊線顏色，記得也得給目標矩形加上 <em>stroke-width</em>（邊框寬度）的屬性，如果沒設定寬度卻有設定邊框色的話，則自動產生寬度 <em>1px</em> 的邊框線。<br>
舉例：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;rect x="10" y="10" width="100" height="100" fill="#CCC" stroke="#000" stroke-width="5"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="XwyWKQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn2-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/XwyWKQ/">
    SVG-learn2-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>來複習一下矩形可設置的屬性有哪些：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>x</em></span>
        <span class="t-flex5">矩形左上角的 X 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>y</em></span>
        <span class="t-flex5">矩形左上角的 Y 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>width</em></span>
        <span class="t-flex5">寬度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>height</em></span>
        <span class="t-flex5">高度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>fill</em></span>
        <span class="t-flex5">填充顏色</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stroke</em></span>
        <span class="t-flex5">邊框顏色</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stroke-width</em></span>
        <span class="t-flex5">邊框寬度</span>
    </div>
</div>
<br>
<h2>圓角矩形：</h2>
<p>圓角矩形承襲矩形的標籤屬性，僅新增 <em>rx</em>（圓角 X 軸半徑尺寸）、<em>ry</em>（圓角 Y 軸半徑尺寸） 這兩個圓角半徑屬性。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;svg&gt;
    &lt;rect x="10" y="10" rx="20" ry="20" width="100" height="100"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="xNQxJw" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn2-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/xNQxJw/">
    SVG-learn2-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>rx</em></span>
        <span class="t-flex5">圓角 X 軸半徑尺寸</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>ry</em></span>
        <span class="t-flex5">圓角 Y 軸半徑尺寸</span>
    </div>
</div>
<p>補充一點：若是使用 Illustrator 匯出的 SVG 圓角矩形，其圓角半徑會被轉換為 <em>path</em>，可見下圖：</p>
<figure>
    <img src="images/pic/html/svg-rect-1.jpg">
    <figcaption>path 留待日後再學。</figcaption>
</figure>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-03-basic-shapes.html" target="_blank">SVG 研究之路 (3) - 基本形狀</a></li>
    <li><a href="http://blog.infographics.tw/2015/06/introduction-to-svg-graphics-on-web/" target="_blank">網頁視覺化必備 － 可縮放向量圖 SVG 入門</a></li>
    <li><a href="http://www.softwhy.com/article-9743-1.html" target="_blank">SVG 绘制圆角矩形-蚂蚁部落</a></li>
</ul>
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