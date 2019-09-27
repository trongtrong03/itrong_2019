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
                        <time>2019-06-06</time>
                        <h1>Learn10-- 填色（Fill）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>相信前面幾篇也已經看過不少次 <em>fill</em> 的應用了，這個屬性的功能是給形狀填入顏色，前面幾篇文章釋例看到編寫的大多是十六進位數字（例如：#000），或是直譯名稱（例如：red、green），這些都是純色，然而，<em>fill</em> 的運用並非只有純色，它還可以填入漸層，也可以利用圖案來填色，這其實和 Illustrator 色票裡的功能雷同。</p>
<figure>
    <img src="images/pic/html/svg-fill-1.jpg">
</figure>
<p>以下我們一樣一個個來筆記。</p>
<h2>純色：</h2>
<p>純色是最基本的用法，只要是瀏覽器可以支援的色票代碼都可以成功渲染出來。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="qGeVXR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: fill-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/qGeVXR/">
    SVG-learn: fill-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
</code>
<br>

<h2>漸層：</h2>
<p>漸層是 SVG <em>fill</em> 填色裡比較複雜的做法，若要簡化來說，它主要有兩個步驟：</p>
<p class="step">
    <span>Step01. 建立一個漸層的定義檔。</span>
</p>
<p class="step">
    <span>Step02. 讓需要漸層的元件指向該定義檔。</span>
</p>
<p>關於定義檔的寫法，首先，它的父元素標籤是 <em>&lt;defs&gt;</em>（definitions），接著在標籤裡面加入漸層定義的標籤，例如線性漸層（<em>&lt;linearGradient&gt;</em>）或是放射狀漸層（<em>&lt;radialGradient&gt;</em>），決定好漸層結構，再來就是賦予它們漸層的顏色，在 SVG 我們使用 <em>&lt;stop&gt;</em> 來控制各漸層色的範圍，完整的語法如下：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;linearGradient id="demo"&gt;
            &lt;stop offset="0%" stop-color="red" /&gt;
            &lt;stop offset="100%" stop-color="green" /&gt;
        &lt;/linearGradient&gt;
    &lt;/defs&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>上面這段語法範例有幾個重點：</p>
<p>1. 定義檔 <em>&lt;defs&gt;</em> 必須被包覆在 <em>&lt;svg&gt;</em> 內才生效。<br>
2. 在定義檔中必須給予漸層定義標籤 ID 值，如此一來，要被套用漸層的元件才有指向參考。<br>
3. 承上，不同的元件可以指向同一個定義檔 ID。</p>
<p>另外，<em>&lt;stop&gt;</em> 有兩個屬性：<em>offset</em> 與 <em>stop-color</em>，分別代表漸層百分比定位與該位置的顏色，如果漸層裡存在超過兩個以上的顏色，僅需一直累加 <em>&lt;stop&gt;</em> 數量即可。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">&lt;stop&gt; 屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>offset</em></span>
        <span class="t-flex5">漸層位置（百分比）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>stop-color</em></span>
        <span class="t-flex5">漸層顏色</span>
    </div>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="GaVOBG" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: fill-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/GaVOBG/">
    SVG-learn: fill-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>當然，漸層定義檔非單單只能用在 <em>fill</em> 上而已，就連前一篇學習的 <em>stroke</em> 邊框也同樣適用漸層設定，見以下範例操作：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="eaqeXZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: fill-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/eaqeXZ/">
    SVG-learn: fill-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p><em>&lt;linearGradient&gt;</em> 線性漸層可以設定它的方向，以下是其參數表：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">&lt;linearGradient&gt; 屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>x1</em></span>
        <span class="t-flex5">起點 X 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>y1</em></span>
        <span class="t-flex5">起點 Y 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>x2</em></span>
        <span class="t-flex5">終點 X 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>y2</em></span>
        <span class="t-flex5">終點 Y 座標</span>
    </div>
</div>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;linearGradient id="demo" x1="0%" y1="0%" x2="0%" y2="100%"&gt;
            &lt;stop offset="0%" stop-color="red" /&gt;
            &lt;stop offset="100%" stop-color="green" /&gt;
        &lt;/linearGradient&gt;
    &lt;/defs&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>此語法最後生成的線性漸層將會是橫向。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="PvMEYV" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: fill-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/PvMEYV/">
    SVG-learn: fill-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p><em>&lt;radialGradient&gt;</em> 放射狀漸層的參數只有設定它的圓中心：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">&lt;linearGradient&gt; 屬性</span>
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
</div>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;radialGradient id="demo1" cx="50%" cy="50%"&gt;
            &lt;stop offset="0%" stop-color="red" /&gt;
            &lt;stop offset="100%" stop-color="green" /&gt;
        &lt;/radialGradient&gt;
    &lt;/defs&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>這個語法的放射狀漸層中心將會是正中央（50% 50%）。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="byXadX" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: fill-5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/byXadX/">
    SVG-learn: fill-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>當然，這兩個漸層結構細部都其實還有一些進階參數可以使用，有興趣鑽研的可以詳看 W3C 的 <a href="https://www.w3.org/TR/SVG/pservers.html" target="_blank">Chapter 14: Paint Servers: Gradients and Patterns</a> 介紹。</p>
<br>

<h2>圖案：</h2>
<p>利用圖案來填色的做法和漸層有些類似，都是先透過定義檔，再讓目標去指向定義檔來渲染漸層，但是圖案在 <em>&lt;defs&gt;</em> 定義檔元素標籤裡用的不是漸層結構，而是 <em>&lt;pattern&gt;</em> 元素，它表示的是一個圖案內的區域，填色目標元件會用這個區域進行重複排列的動作。</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;pattern id="demo" patternUnits="userSpaceOnUse" x="0" y="0" width="20" height="20"&gt;
        &lt;rect x="0" y="0" width="16" height="16" fill="#F00"&gt;&lt;/rect&gt;
        &lt;/pattern&gt;
    &lt;/defs&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p><em>&lt;pattern&gt;</em> 裡面可以設置自己想要的圖形，為了避免圖形被裁切，要注意區域範圍內的圖形大小不應超過 <em>&lt;pattern&gt;</em> 本身的尺寸。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="eaqyZg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: fill-6">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/eaqyZg/">
    SVG-learn: fill-6</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>以下是 <em>&lt;pattern&gt;</em> 區域內圖形尺寸超過區域本身的大小，造成目標元件圖形填色被裁切的範例：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="yWmpjM" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: fill-7">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/yWmpjM/">
    SVG-learn: fill-7</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-07-fill.html" target="_blank">SVG 研究之路 (7) - fill 填色</a></li>
    <li><a href="https://www.w3.org/TR/SVG/pservers.html" target="_blank">Chapter 14: Paint Servers: Gradients and Patterns</a></li>
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