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
                        <time>2019-06-22</time>
                        <h1>Learn01-- 什麼是 Canvas？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<figure>
    <img src="images/pic/html/canvas-logo.jpg" style="margin: 0 auto;">
</figure>
<h2>基本介紹：</h2>
<p>Canvas 是畫布的意思，為 Html5 裡新增的標籤之一，可用來在瀏覽器 DOM tree 中產生圖像，並可以透過 Javascript，針對其 <em>&lt;canvas&gt;</em> 繪製區域進行操作。另一種能在網頁進行圖形創作的技術則叫作 SVG，有關兩者的比較，可參見本站 SVG 學習系列中的<a href="html_svg_vs_canvas.php" target="_blank">〈Learn02-- SVG V.S. Canvas〉</a>一文。</p>
<br>

<h2>技術說明：</h2>
<p>Canvas 在 HTML 文件裡的寫法很簡單：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;canvas id="idName" width="寬度" height="高度"&gt;&lt;/canvas&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>值得注意的是，雖然 <em>&lt;canvas&gt;</em> 標籤可以透過 CSS 設置參數，但是部分屬性與直接在 HTML 標籤裡定義是有差別的，例如寬度與高度，可見下例：</p>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="orJKEP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="canvas-learn: intro">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/orJKEP/">
    canvas-learn: intro</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>左邊是在 HTML 標籤裡設置寬高屬性，右邊則是使用 CSS 樣式去給予參數，通過範例不難看出，在畫布尺寸大於影像尺寸的條件下，左邊畫布中的影像仍保持原本尺寸，而右邊畫布中的影像則會強制縮放到與畫布尺寸相同，產生影像變形失真的情況。因此，有關畫布的寬高尺寸設定，一般建議最好還是寫在 HTML 中。</p>
<br>

<h2>錯誤替代：</h2>
<p>由於舊版的瀏覽器普遍不支援 <em>&lt;canvas&gt;</em>，我們可以使用替代方案來解決就瀏覽器不可視的問題，程式碼為下：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;canvas&gt;
    &lt;img src="影像"/&gt;
&lt;/canvas&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>可以置入影像標籤或純文字內容，當使用的瀏覽器不支援時就會讀取這些替代內容，如果是有支援的瀏覽器，則會自動忽略 <em>&lt;canvas&gt;</em> 裡面的替代內容。</p>
<br>
<br>
<p>Canvas 除了廣泛運用在圖形、報表或一些絢麗的視覺效果外，也可以運用在製作遊戲上，例如近年頗為熱門的 PixiJS 就是使用 Canvas 來製作遊戲。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://blog.coding.net/blog/what-is-canvas" target="_blank">讲一讲 Canvas 究竟是个啥</a></li>
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/API/Canvas_API/Tutorial/Basic_usage" target="_blank">Canvas 基本用途</a></li>
    <li><a href="https://www.jianshu.com/p/06627c7833fd" target="_blank">canvas的简单使用</a></li>
    <li><a href="https://www.cnblogs.com/artwl/archive/2012/02/28/2372042.html" target="_blank">canvas标签的width和height以及style.width和style.height的区别</a></li>
    <li><a href="https://www.youtube.com/watch?v=_isKwzD4xm8" target="_blank">網頁前端工程進階：Canvas 繪圖 - 基本教學 By 彭彭</a></li>
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