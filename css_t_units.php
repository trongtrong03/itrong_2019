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
                        <time>2019-08-29</time>
                        <h1>CSS 使用單位介紹</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在網頁排版中，無論是元素佔據的空間比例，抑或者文字的顯示大小，「單位」皆扮演非常重要的角色，CSS 有許許多多計算單位，本篇將詳細對其作一連串的介紹。</p>
<br>

<h2>單位一覽：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Unit</span>
        <span class="t-flex4">Name</span>
        <span class="t-flex6">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">px</span>
        <span class="t-flex4">像素</span>
        <span class="t-flex6">屬絕對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">pt</span>
        <span class="t-flex4">點</span>
        <span class="t-flex6">point，屬絕對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">pc</span>
        <span class="t-flex4">pica</span>
        <span class="t-flex6">1 Pica = 12 pt，屬絕對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">mm</span>
        <span class="t-flex4">公厘</span>
        <span class="t-flex6">屬絕對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">cm</span>
        <span class="t-flex4">公分</span>
        <span class="t-flex6">屬絕對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">in</span>
        <span class="t-flex4">英吋</span>
        <span class="t-flex6">屬絕對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">%</span>
        <span class="t-flex4">百分比</span>
        <span class="t-flex6">屬相對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ex</span>
        <span class="t-flex4"></span>
        <span class="t-flex6">1 ex = 1 x-height of the font-size，屬相對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ch</span>
        <span class="t-flex4"></span>
        <span class="t-flex6">Relative to width of the "0" (zero)</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">em</span>
        <span class="t-flex4">相對於元素（element）<em>font-size</em> 的數值單位</span>
        <span class="t-flex6">屬相對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">rem</span>
        <span class="t-flex4">相對於根元素（root element）<em>font-size</em> 的數值單位</span>
        <span class="t-flex6">屬相對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vw</span>
        <span class="t-flex4">viewport width</span>
        <span class="t-flex6">屬相對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vh</span>
        <span class="t-flex4">viewport height</span>
        <span class="t-flex6">屬相對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vmin</span>
        <span class="t-flex4">the smallest of the viewport width or height</span>
        <span class="t-flex6">屬相對單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">vmax</span>
        <span class="t-flex4">the largest of the viewport width or height</span>
        <span class="t-flex6">屬相對單位</span>
    </div>
</div>

<h2><em>px</em> / <em>pt</em> / <em>pc</em>：</h2>
<p><em>px</em> 代表的是螢幕中的每一個點（pixel），可以說是網頁設計中最廣泛被使用的基礎單位。</p>
<p><em>pt</em> 是指印表機上的每一個點（point），定義是 <em>1 pt</em>等於 <em>1/72 in</em>，在 72 dpi 的作業系統上 <em>1 px</em> 等於 <em>1 pt</em>，若是在 96 dpi 作業係拱，則 <em>1 px</em> 等於 <em>0.75 pt</em>。</p>
<p><em>pc</em> 也是運用於印刷的單位，<em>1 pc</em>（pica）等於 <em>12 pt</em>。</p>
<p>這三個單位都屬於絕對單位，不會參考父階層元素或根元素設定的值跟著改變。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="ZEzBWvy" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/ZEzBWvy/">
    css-units _1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>mm</em> / <em>cm</em> / <em>in</em>：</h2>
<p>這三個單位是很常見的數字單位，在 96 dpi 的作業系統（例如 Windows），<em>1 mm</em> 等於 <em>3.7795275593333 px</em>，而 <em>1 cm</em> 等於 <em>10 mm</em>，<em>1 in</em> 則又等於 <em>2.54 cm</em>，幾乎趨近於 <em>96 px</em>，所以一般都會說 1 英吋等於 96 px。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="RwboavX" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RwboavX/">
    css-units _2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>%</em>：</h2>
<p>百分比單位取決於父階層元素設的值，屬相對單位。</p>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="PoYbNgP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/PoYbNgP/">
    css-units _3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>ex</em> / <em>ch</em>：</h2>
<p><em>ex</em> 定義為該元素所使用的 <em>font-family</em> 字型的 <em>x-height</em>，<em>x-height</em> 指的是小寫字母的高度，此單位常用於文字上標（sub）或下標（sup）元素的微調（可以比 <em>vertical-align</em> 更精細）。</p>
<p><em>ch</em> 尚在咀嚼，日後再回來補完。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="MWgbjpN" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/MWgbjpN/">
    css-units _4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>em</em>：</h2>
<p><em>em</em> 是相對單位，會往前參考父階層元素 <em>font-size</em> 的像素值（<em>px</em>）作「倍數」運算。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="PoYbbZg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/PoYbbZg/">
    css-units _5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>rem</em>：</h2>
<p><em>rem</em> 和 <em>em</em> 類似，都是以倍率計算該階層的數值，但每一層 <em>rem</em> 根據的對象是根元素（<em>html</em>），不受父階層元素的影響。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="OJLbbvJ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _6">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/OJLbbvJ/">
    css-units _6</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>vw</em> / <em>vh</em>：</h2>
<p>v 指的是 Viewport，意思就是這兩個單位分別參考瀏覽器視窗畫面的寬或高，比例為 <em>1 / 100</em>，也就是 Viewport 的 1%，屬於相對單位。</p>
<p>由於參照的對象是整個 Viewport，所以當窗口畫面尺寸發生變化時，使用 <em>vw</em> 或 <em>vh</em> 單位的元素也會跟著產生變化，因此很適合用在需要等比縮放的元素。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="ZEzBBgr" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _7">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/ZEzBBgr/">
    css-units _7</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>


<h2><em>vmin</em> / <em>vmax</em>：</h2>
<p><em>vw</em> 與 <em>vh</em> 取用的對象分別是 Viewport 的 <em>width</em> 及 <em>height</em>，而 <em>vmin</em> 和 <em>vmax</em> 則是取 Viewport 最小或最大其中一邊的值。</p>
<p>假設瀏覽器窗口的畫面大小是 <em>1000 x 800</em> 像素，<em>1 vmin</em> 等於 <em>8 px</em>，而 <em>1 vmax</em> 等於 <em>10 px</em>。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="OJLbWwg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _8">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/OJLbWwg/">
    css-units _8</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>這種單位類型十分強大，像是可以輕鬆製作一個不會溢出 Viewport 的等比縮放正方形，例如：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div {
    width: 100vmin;
    height: 100vmin;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h2>其他：</h2>
<p>除了以上這些單位外，我們也常在 <em>font-size</em> 看到 <em>small</em>、<em>large</em> 等參數值，以 <em>medium</em> 等於 <em>16 px</em> 為基礎，一共產生七個參數，且又分別代表 <em>&lt;h1&gt;</em> ~ <em>&lt;h6&gt;</em> 的預設字級大小（僅有一個值不在列），以下用一張表來看看。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex3">Scoling factor</span>
        <span class="t-flex3">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">xx-small</span>
        <span class="t-flex3">3/5</span>
        <span class="t-flex3">h6</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">x-small</span>
        <span class="t-flex3">3/4</span>
        <span class="t-flex3"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">small</span>
        <span class="t-flex3">8/9</span>
        <span class="t-flex3">h5</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">medium</span>
        <span class="t-flex3">1</span>
        <span class="t-flex3">h4</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">large</span>
        <span class="t-flex3">6/5</span>
        <span class="t-flex3">h3</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">x-large</span>
        <span class="t-flex3">3/2</span>
        <span class="t-flex3">h2</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">xx-large</span>
        <span class="t-flex3">2</span>
        <span class="t-flex3">h1</span>
    </div>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="oNvYZZB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _9">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/oNvYZZB/">
    css-units _9</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p>另外還有 <em>smaller</em> 跟 <em>larger</em> 的參數值，以百分比為單位，前者是父元素設定值的 <em>80%</em>，後者則是 <em>120%</em>。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="oNvYZGW" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-units _10">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/oNvYZGW/">
    css-units _10</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.w3schools.com/cssref/css_units.asp" target="_blank">w3schools CSS Units</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201809/css-font-size.html" target="_blank">一次搞懂 CSS 字體單位：px、em、rem 和 %</a></li>
    <li><a href="https://www.w3cplus.com/css/7-css-units-you-might-not-know-about.html" target="_blank">七个你可能不了解的CSS单位</a></li>
    <li><a href="https://www.hexschool.com/2016/01/02/2016-08-08-em-vs-rem/" target="_blank">實際展示 EM 與 REM 的差異</a></li>
    <li><a href="https://www.zcfy.cc/article/minmaxing-understanding-vmin-and-vmax-in-css" target="_blank">MinMaxing:理解CSS中的vMin和vMax</a></li>
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