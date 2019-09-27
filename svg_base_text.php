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
                        <time>2019-06-11</time>
                        <h1>Learn11-- 文字（Text） ● 其一：基本語法</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>SVG 除了繪製圖形，也可以針對文字設定一系列與 Illustrator 相同的功能特效，從最基本的位置、大小屬性，或是套用上篇純色及漸層的顏色填充，到進階的文字跟隨路徑展示，甚至還能做到目前 CSS3 尚無法做到的文字拉伸（也許應該說瀏覽器尚未支援），學習的過程會發現 SVG 在文字屬性這一領域有著非常靈活的自由度。</p>
<h2>基本語法：</h2>
<p>文字的元素標籤是 <em>&lt;text&gt;</em>，然後將要表示的文字輸入在其標籤內即可，它有以下這些屬性：</p>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>x</em></span>
        <span class="t-flex5">文字的 X 軸座標絕對位置</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>y</em></span>
        <span class="t-flex5">文字的 Y 軸座標絕對位置</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>dx</em></span>
        <span class="t-flex5">文字的 X 軸座標相對位置（基於前一個字的位置作推算）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>dy</em></span>
        <span class="t-flex5">文字的 Y 軸座標相對位置（基於前一個字的位置作推算）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>rotate</em></span>
        <span class="t-flex5">文字旋轉</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>textLength</em></span>
        <span class="t-flex5">設定文字長度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>lengthAdjust</em></span>
        <span class="t-flex5">設定對這段文字長度的調整，有 <em>spacing</em>（預設） 與 <em>spacingAndGlyphs</em> 兩個參數</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>writing-mode</em></span>
        <span class="t-flex5">設定文字書寫模式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>text-anchor</em></span>
        <span class="t-flex5">文字繪製的對齊位置，有 <em>start</em>（預設）、<em>middle</em>、<em>end</em> 三個參數</span>
    </div>
</div>
<p>除了上列這些 <em>&lt;text&gt;</em> 自有的屬性外，也可以加入 <em>fill</em>、<em>stroke</em> ...等屬性，甚至還能導入 <em>style</em>，將 CSS 的樣式寫在裡面，例如：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;text x="10" y="50" fill="#F00" stroke="#000" stroke-width="2" style="font-size: 3rem; font-weight: bold;"&gt;iTrong&lt;/text&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="gNOWza" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/gNOWza/">
    SVG-learn: text-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
</code>

<p>值得注意的是，<em>&lt;text&gt;</em> 持有屬性都可以透過陣列達到細部的設定，舉例來說，若將 <em>x</em> 值通過陣列表示，像 <em>x="10,30,50,70"</em>，代表的是 <em>&lt;text&gt;</em> 內字元依序的 X 軸絕對位置，我們可以看看下方實際操作：</p>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="zVYzQG" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/zVYzQG/">
    SVG-learn: text-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>當軸定位數字只有單一值的時候，影響的只有字串中的第一個字元，爾後的字元會接續在第一個字元之後緊鄰排列，若定位值為陣列，超過陣列對應順序的後方其它字元，同樣會接著被陣列定位範圍內的最後一個字元繼續排列。</p>
<br>
<p><em>x</em>、<em>y</em> 與 <em>dx</em>、<em>dy</em>：</p>
<p>在開頭的屬性列表中，有簡略提到這兩組 X、Y 軸定位的差異，<em>x</em>、<em>y</em> 是絕對定位，基於原本的位置改變定位，<em>dx</em>、<em>dy</em> 則是相對定位，會以前面一個字的位置為依據做變化。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="LKYjgQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/LKYjgQ/">
    SVG-learn: text-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p><em>rotate</em>：</p>
<p>用來設置文字的旋轉角度，可以是負數，也可以用陣列去細部設定各字元的度數。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;text x="20" y="20" rotate="45"&gt;iTrong&lt;/text&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="rENGNw" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/rENGNw/">
    SVG-learn: text-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p><em>textLength</em> 與 <em>lengthAdjust</em>：</p>
<p>通常這兩個屬性會同時使用，它們用來設定文字的長度與寬度，<em>textLength</em> 代表間距，透過數字來決定字元間的距離；<em>lengthAdjust</em> 有兩個參數，<em>spacing</em> 是預設值，將每個字元的間距拓展到與 <em>textLength</em> 設定的數字相等；<em>spacingAndGlyphs</em> 則是直接將文字本身拉寬，直到符合 <em>textLength</em> 的數值。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;svg&gt;
    &lt;text x="20" y="40" textLength="100" lengthAdjust="spacing"&gt;iTrong&lt;/text&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="RzwLOP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RzwLOP/">
    SVG-learn: text-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p><em>writing-mode</em>：</p>
<p>用來設定文字的書寫方式，例如中文圈常見的直書寫法，它的參數很多，以下整理成表：</p>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">writing-mode 屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>lr-tb</em></span>
        <span class="t-flex5"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>rl-tb</em></span>
        <span class="t-flex5"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>tb-rl</em></span>
        <span class="t-flex5"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>lr</em></span>
        <span class="t-flex5"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>rl</em></span>
        <span class="t-flex5"></span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>tb</em></span>
        <span class="t-flex5">top-to-bottom</span>
    </div>
</div>
<p>過目一些相關的文章，這些參數大多適用於阿拉伯文的書寫格式，在亞洲國家，尤其是中、日文文化圈，直書（<em>tb</em>）應該是其中較容易使用到的參數。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;svg&gt;
    &lt;text x="20" y="20" writing-mode="tb"&gt;iTrong&lt;/text&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="BgamzZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-6">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/BgamzZ/">
    SVG-learn: text-6</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p><em>text-anchor</em>：</p>
<p><em>text-anchor</em> 可決定 SVG 文字繪製的起始位置，並以 <em>x</em> 值作為基準，它有三個設定參數，分別為：</p>
<div class="t-form mb-0">
    <div class="t-head">
        <span class="t-flex1">text-anchor 屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>start</em></span>
        <span class="t-flex5">預設值，從 <em>x</em> 座標點右側開始繪製</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>middle</em></span>
        <span class="t-flex5">以 <em>x</em> 位置為中間點左右拓展文字</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>end</em></span>
        <span class="t-flex5">最後一個字會對齊 <em>x</em> 座標點的左側</span>
    </div>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;svg&gt;
    &lt;text x="20" y="20" text-anchor="middle"&gt;iTrong&lt;/text&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="wLvpoR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-7">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/wLvpoR/">
    SVG-learn: text-7</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>假如使用結合直書的書寫模式，文字繪製會轉以 <em>y</em> 座標點為對齊基準。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="LKYeWL" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: text-8">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/LKYeWL/">
    SVG-learn: text-8</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>以上就是關於 SVG <em>&lt;text&gt;</em> 的一些基本用法，下一篇將繼續記錄更多文字元素的運用方式。</p>
<br>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-08-text.html" target="_blank">SVG 研究之路 (8) - text 文字</a></li>
    <li><a href="https://medium.com/@yurenju/svg-text-%E7%B0%A1%E4%BB%8B%E8%88%87%E7%AF%84%E4%BE%8B-665a011b5a48" target="_blank">SVG Text 簡介與範例</a></li>
    <li><a href="https://cloud.tencent.com/developer/section/1424042" target="_blank">writing-mode（写作模式）</a></li>
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