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
                        <time>2019-06-05</time>
                        <h1>Learn09-- 邊框（Stroke）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>同為向量製圖，SVG 與 Adobe Illustrator 有許多相似之處，<em>stroke</em> 邊框便是其中之一，我們可以理解為兩者只是程式碼與面板操作的差別。<br>
有關邊框的設定一共有五個屬性，以下是其列表：</p>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stroke</em></span>
        <span class="t-flex5">邊框的顏色</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stroke-width</em></span>
        <span class="t-flex5">邊框的寬度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stroke-linecap</em></span>
        <span class="t-flex5">邊框端點的屬性（butt【預設】、square、round）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stroke-linejoin</em></span>
        <span class="t-flex5">邊框接合尖角的屬性（miter【預設】、round、bevel）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stroke-dasharray</em></span>
        <span class="t-flex5">虛線</span>
    </div>
</div>
<p>以上這些屬性，在 Illustrator 的筆畫面板中都可以找到：</p>
<figure>
    <img src="images/pic/html/svg-stroke-1.jpg">
</figure>
<p>這五個邊框屬性中，<em>stroke</em> 與 <em>stroke-width</em> 算是最常被使用的設定，也是最容易理解的，分別代表邊框的顏色和寬度。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M20 20 L100 20" stroke="#F00" stroke-width="10"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="zQgzdr" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: stroke-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/zQgzdr/">
    SVG-learn: stroke-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>接著來看看 <em>stroke-linecap</em> 這個屬性，它代表的是邊線兩端的端點，他有三個參數，見下表：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">參數</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>butt</em></span>
        <span class="t-flex5">預設值，代表平端點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>square</em></span>
        <span class="t-flex5">方端點</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>round</em></span>
        <span class="t-flex5">圓端點</span>
    </div>
</div>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="RmXgyM" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: stroke-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RmXgyM/">
    SVG-learn: stroke-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>如果看不懂平端點與方端點差異的，直接從 Illustrator 面板觀察會更明瞭：</p>
<figure>
    <img src="images/pic/html/svg-stroke-2.jpg">
    <figcaption>Illustrator 的筆畫邊框端點面板。</figcaption>
</figure>
<p>再來是 <em>stroke-linejoin</em> 屬性，指的是兩條邊框線接合處的形狀，一樣有三個參數，分別是：</p>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">參數</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>miter</em></span>
        <span class="t-flex5">預設值，尖角</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>round</em></span>
        <span class="t-flex5">圓角</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>bevel</em></span>
        <span class="t-flex5">斜角</span>
    </div>
</div>
<p>比較值得一提的是 <em>round</em> 圓角，它的弧形半徑相當於邊框設定的寬度值。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="oRKGvO" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: stroke-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/oRKGvO/">
    SVG-learn: stroke-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>
<p>最後要講的是 <em>stroke-dasharray</em>，它將邊框直線轉換為虛線，裡面的值是一個陣列，代表線段長度與虛線間隔長度的交錯數字，語法為下：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M10 50 L200 50" stroke="#F00" stroke-width="10" stroke-dasharray="5" /&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="BeXwoL" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: stroke-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/BeXwoL/">
    SVG-learn: stroke-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
</p>
</code>
<p>雖然說通常都是兩個數字為一組，但若是陣列裡的數字為奇數，則最後一個數字接續的間隔將會以第一個數字為接續的數值一直重複綿延下去。</p>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="oRKGPj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: stroke-5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/oRKGPj/">
    SVG-learn: stroke-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>關於 <em>stroke</em> 的用法就記錄到這邊，和複雜的路徑（<em>path</em>）操作比起來，<em>stroke</em> 真的相對簡單很多，若佐以 Illustrator 輔助，學習會更得心應手。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-06-stroke.html" target="_blank">SVG 研究之路 (6) - stroke 邊框</a></li>
    <li><a href="http://www.runoob.com/svg/svg-stroke.html" target="_blank">SVG Stroke 属性</a></li>
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