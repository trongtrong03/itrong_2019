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
                        <time>2019-05-30</time>
                        <h1>Learn04-- SVG 的基本圖形 ● 其二：圓形、橢圓形、多邊形</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>前一篇已了解繪製矩形和圓角矩形的方法，這篇接著講圓形、橢圓形以及多邊形的繪製方式及其結構。</p>
<br>
<h2>圓形：</h2>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;circle cx="60" cy="60" r="50"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>圓形標籤使用的是 <em>&lt;circle&gt;</em>，它和矩形不同，沒有 <em>width</em> 及 <em>height</em> 屬性來設定大小，取而代之的是半徑值（<em>r</em>），<em>cx</em> 與 <em>cy</em> 則代表圓心（center）的座標值。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="eabrZq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn3-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/eabrZq/">
    SVG-learn3-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>cx</em></span>
        <span class="t-flex5">圓心的 X 軸座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>cy</em></span>
        <span class="t-flex5">圓心的 Y 軸座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>r</em></span>
        <span class="t-flex5">半徑</span>
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
<h2>橢圓形：</h2>
<p>橢圓形使用的標籤是 <em>ellipse</em>，它的繪製的方式較複雜，見下圖：</p>
<figure>
    <img src="images/pic/html/svg-circle.gif">
</figure>
<p>由此可知，繪製橢圓形需要中心圓的 <em>rx</em> 與 <em>ry</em> 值，分別代表其 X、Y 方向的半徑，也因為如此，就不需要圓形的 <em>r</em> 半徑屬性了。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;ellipse cx="50" cy="30" rx="40" ry="20"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="dEwwQV" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn3-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/dEwwQV/">
    SVG-learn3-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>cx</em></span>
        <span class="t-flex5">圓心的 X 軸座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>cy</em></span>
        <span class="t-flex5">圓心的 Y 軸座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>rx</em></span>
        <span class="t-flex5">X 軸方向的半徑</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>ry</em></span>
        <span class="t-flex5">Y 軸方向的半徑</span>
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
<h2>多邊形：</h2>
<p>多邊形的標籤是 <em>polygon</em>，用 <em>point</em> 屬性來表示有幾個點，例如：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;svg&gt;
    &lt;polygon points="0,0 30,30 60,0"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>每一個 <em>point</em> 都有 x、y 值，並用逗號表示每一組座標，點與點之間則用空白符來區隔。其餘屬性的設置則與矩形相同。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="XwoOQZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn3-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/XwoOQZ/">
    SVG-learn3-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>point</em></span>
        <span class="t-flex5">每一個座標位置，x1,y1 x2,y2, x3,y3...</span>
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

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-03-basic-shapes.html" target="_blank">SVG 研究之路 (3) - 基本形狀</a></li>
    <li><a href="http://blog.infographics.tw/2015/06/introduction-to-svg-graphics-on-web/" target="_blank">網頁視覺化必備 － 可縮放向量圖 SVG 入門</a></li>
    <li><a href="https://abgne.tw/svg/svg-getting-started/svg-shape-polygon.html" target="_blank">[SVG]SVG 基本圖形 - 多邊形 polygon</a></li>
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