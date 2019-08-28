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
                        <time>2019-08-09</time>
                        <h1>介紹 Media Queries</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>簡介：</h2>
<p>Media Queries 敘述的語意是先「詢問」（query）「媒體」（media）的屬性，然後再針對其定義樣式，不僅可以根據指定的裝置型態（例如螢幕或列印）或特定特徵（例如螢幕解析度或瀏覽器可視範圍寬度）套用指定的樣式屬性，更是實現響應式網頁（RWD）不可或缺的重要方法。</p>
<br>
<h2>語法：</h2>
<p>一個 media query 是由一個可選的 media types 及不定數量的 media features 運算式構成。media query 本身具有邏輯的概念，若指定的 media types 與正在顯示的裝置內容相符，且 media features 運算式結果也為 <em>true</em> 時，回傳為 <em>true</em>（套用屬性樣式），否則為 <em>false</em>（不套用屬性樣式）。<br>假如設定的 media types 是未知的類型，則該 media query 將會永遠是 <em>false</em>。</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="css">@media screen and (min-width: 640px) and (max-width: 1023px) {
    /* CSS */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>　
<p>這是 media query 其中一種常見的案例，其構成方式是一個 media types（<em>screen</em>）及兩個 media features（<em>min-width: 640px</em>、<em>max-width: 1023px</em>）。</p>
<p>除了 <em>and</em> 之外，還有 <em>or</em>、<em>not</em>、<em>only</em>一共四種應用方法，這部份將保留至後面再提。</p>
<br>

<h2>Media Types：</h2>
<p>Media Types 描述裝置類型，有以下四種參數：</p>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">all</span>
        <span class="t-flex5">所有裝置【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">print</span>
        <span class="t-flex5">印刷裝置，包含使用列印預覽產生的所有畫面 ( 例如列印為 pdf )</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">screen</span>
        <span class="t-flex5">螢幕裝置，不屬於 print 和 speech 的設備</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">speech</span>
        <span class="t-flex5">朗讀裝置，針對可以「讀出」頁面的設備</span>
    </div>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">/* print */
@media print and (max-width: 1024px) { /* CSS */ }

/* screen */
@media screen and (min-width: 1024px) { /* CSS */ }

/* speech */
@media speech and (aspect-ratio: 16/9) { /* CSS */ }
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>也可以同時指定複數的裝置類型，例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="css">@media screen, print { /* CSS */ }</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>　
<p>逗號是邏輯 <em>and</em> 的意思。</p>
<br>

<h2>Media features：</h2>
<p>Media features 也可以稱為特徵，用來給 Media Types 更加詳細的設定，要注意的是，每一個特徵都需要用括號包覆起來，並與邏輯關鍵字（<em>and</em>、<em>or</em>、<em>not</em>、<em>only</em>）結合，以下將特徵分門別類為視窗或頁面尺寸、顯示品質、顏色、互動這四大項來一一介紹。</p>
<p>視窗或頁面尺寸（Viewport/Page Dimensions）：</p>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Feature</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">width</span>
        <span class="t-flex5">螢幕寬度，另支援 <em>min-width</em>（最小寬度） 與 <em>max-width</em>（最大寬度）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">height</span>
        <span class="t-flex5">螢幕高度，另支援 <em>min-height</em>（最小高度） 與 <em>max-height</em>（最大高度）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">aspect-ratio</span>
        <span class="t-flex5">螢幕長寬比例，支援 <em>min-aspect-ratio</em> 與 <em>max-aspect-ratio</em></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">orientation</span>
        <span class="t-flex5">螢幕旋轉方向，選項為 <em>portrait</em>（直向）與 <em>landscape</em>（橫向）</span>
    </div>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text mb-0"><code class="css">/* width */
@media (min-width: 1024px) { /* CSS */ }
@media (min-width: 768px) and (max-width: 1023px) { /* CSS */ }
@media (max-width: 767px) { /* CSS */ }

/* height */
@media (max-width: 1080px) { /* CSS */ }

/* aspect-ratio */
@media (aspect-ratio: 1440/1080) { /* CSS */ }
@media (max-aspect-ratio: 16/9) { /* CSS */ }

/* orientation */
@media (orientation: portrait) { /* CSS */ }
@media (orientation: landscape) { /* CSS */ }
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>　
<p>特徵運算式彼此之間可以混用，例如：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area05" class="code-text mb-0"><code class="css">@media screen and (min-width: 960px) and (orientation: landscape) { /* CSS */ }
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>　

<p>顯示品質（Display Quality）：</p>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Feature</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">resolution</span>
        <span class="t-flex5">解析度（dpi、ppx...等），支援 <em>max-resolution</em> 和 <em>min-resolution</em></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">scan</span>
        <span class="t-flex5">電視掃描方式，有 <em>interlace</em>（交錯式掃描） 和 <em>progressive</em>（漸進式掃描） 這兩個參數，後者是現在大多數電視採用的模式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">update</span>
        <span class="t-flex5">更新媒體，參數有三：<br>
            <em>none</em> 表示不會更新的顯示裝置，例如列印文件<br>
            <em>slow</em> 為更新速度慢的顯示裝置<br>
            <em>fast</em> 表示更新速度快的裝置，例如電腦螢幕
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">overflow-block</span>
        <span class="t-flex5">當內容包含 block 特性並超過邊界範圍，參數有四：<br>
            <em>none</em> 表示任何超過範圍都不顯示，例如看板<br>
            <em>scroll</em> 表示可滾動查看超出範圍，例如電腦螢幕<br>
            <em>optional-paged</em> 表示可手動查看超出的內容，例如簡報<br>
            <em>paged</em> 表示超出的內容會以分頁顯示，例如印表機
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">overflow-inline</span>
        <span class="t-flex5">當內容包含 inline 特性並超過邊界範圍，有 <em>none</em> 與 <em>scroll</em> 此二參數</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">grid</span>
        <span class="t-flex5">網格媒體，參數為 <em>0</em> 和 <em>1</em></span>
    </div>
</div>

<p>顏色（Color）：</p>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Feature</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">color</span>
        <span class="t-flex5">輸出裝置的色彩位元數，0 代表黑白裝置，支援 <em>max-color</em> 和 <em>min-color</em></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">color-index</span>
        <span class="t-flex5">輸出裝置的色彩索引位元數，支援 <em>max-color-index</em> 和 <em>min-color-index</em></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">monochrome</span>
        <span class="t-flex5">單色媒體功能，0 代表「不是」單色設備</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">color-gamut</span>
        <span class="t-flex5">輸出裝置色域，參數有三：<br>
            <em>srgb</em> 在大多數的顯示器皆獲得支援 
            <em>p3</em> 色域比 <em>srgb</em> 更廣且包含 <em>srgb</em>
            <em>rec2020</em> 比 <em>p3</em> 更大且包含 <em>p3</em>
        </span>
    </div>
</div>

<p>互動（Interaction）：</p>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Feature</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">pointer / any-pointer</span>
        <span class="t-flex5">指標裝置（例如滑鼠）的準確性，參數有三：<br>
            <em>none</em> 表示沒有指標裝置
            <em>coarse</em> 表示精度較差的指標裝置，例如觸控螢幕
            <em>fine</em> 表示精度比較高的裝置，例如滑鼠或手寫筆
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">hover / any-hover</span>
        <span class="t-flex5">裝置具備 hover 的能力，參數有 <em>none</em> 與 <em>hover</em></span>
    </div>
</div>
<br>
<h2>邏輯應用：</h2>
<p>前面曾提過 Media Queries 的邏輯使用除了 <em>and</em> 外，還有另外三種方式，分別是：</p>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">and</span>
        <span class="t-flex5">所有裝置【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">or</span>
        <span class="t-flex5">「或」的意思，是唯一一個可以用符號（逗號（<em>,</em>））書寫的方法，只要 feature 符合其中一項即可套用</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">not</span>
        <span class="t-flex5">可以排除特定裝置媒體，其他裝置媒體可套用樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">only</span>
        <span class="t-flex5">可以指定「只有」特定裝置媒體才可套用該樣式</span>
    </div>
</div>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="css">/* and */
@media (min-width: 960px) and (orientation: landscape) { /* CSS */ }

/* or */
@media (min-height: 680px), screen and (orientation: portrait) { /* CSS */ }

/* not */
@media not screen and (color), print and (color) { /* CSS */ }

/* only */
@media only screen and (color) { /* CSS */ }
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<p>此外，<em>and</em> 與 <em>or</em> 可混搭運用，例如：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="css">@media screen and (max-width: 960px) and (min-width: 768px), (orientation: portrait) { /* CSS */}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>意思是「螢幕」介於最小寬度 768px 與 最大寬度 960px 之間，或者旋轉方向是直向的時候，套用其屬性樣式。</p>

<p>在定義 <em>not</em> 及 <em>only</em> 時也有需要謹記的地方，若要使用這兩者，後方必須接續 Media Types 始可生效，否則將無任何效果。</p>
<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/zh-TW/docs/Web/CSS/Media_Queries/Using_media_queries" target="_blank">使用 media queries</a></li>
    <li><a href="https://www.w3schools.com/css/css3_mediaqueries_ex.asp" target="_blank">CSS Media Queries - Examples</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201810/css-media-queries.html" target="_blank">CSS Media Queries 詳細介紹</a></li>
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