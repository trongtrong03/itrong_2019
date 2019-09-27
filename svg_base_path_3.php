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
                        <time>2019-06-03</time>
                        <h1>Learn07-- 路徑（Path） ● 其三：指令介紹-曲線</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>承襲上篇 <em>&lt;path&gt;</em> 的指令列表介紹，本篇將對這些指令做實例語法的記錄。</p>
<br>
<h2><em>C</em> / <em>c</em>（curve）：</h2>
<p><em>C</em> 表示曲線，它描繪的是<a href="https://zh.wikipedia.org/wiki/%E8%B2%9D%E8%8C%B2%E6%9B%B2%E7%B7%9A" target="_blank">三次貝茲曲線</a>，故總共會有六個控制點，也就是三組 <em>x,y</em> 值，依序分別為 <em>x1 y1, x2 y2, x y</em>，前兩組 <em>x,y</em> 各自代表三次貝茲曲獻的第一、二個點，最後一組 <em>x,y</em> 則是該曲線路徑的結束點座標。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M20 20 C40 40, 60 40, 80 20" stroke="#f00" fill="transparent"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="RmdyPr" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RmdyPr/">
    SVG-learn: path-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>透過上例會發現，曲線和前面幾個指令不同，根據大小寫反應不僅僅是座標定位，其產生的路徑結果也是不一樣的。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="C x1 y1, x2 y2, x y" /&gt;
    &lt;!-- or --&gt;
    &lt;path d="c dx1 dy1, dx2 dy2, dx dy" /&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<br>

<h2><em>S</em> / <em>s</em>（smooth curve）：</h2>
<p><em>S</em> 可以在目前的點後方增加帶有貝茲曲線的控制點，可見下圖：</p>
<figure class="mb-0">
    <img src="images/pic/html/svg-path-s.jpg">
</figure>
<p><em>S</em> 只有兩組座標值：<em>x2 y2, x y</em>，<em>x2 y2</em> 會以同樣斜率鏡射一個貝茲曲線控制點，與其相連形成曲線。<em>x y</em> 則與 <em>C</em> 一樣代表曲線路徑的結束座標。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M20 20 C40 40, 60 40, 80 20 S100 40, 140 40" stroke="#f00" fill="transparent"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="QRPMOa" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-8">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/QRPMOa/">
    SVG-learn: path-8</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>單純只設定 <em>S</em> 點也是可以產生曲線，但肯定沒有 <em>C</em> 來的弧度美觀。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="eaoROd" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-7">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/eaoROd/">
    SVG-learn: path-7</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>此外，<em>S / s</em> 大小寫除了座標定位區別，路徑繪製方式也有差別。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="S x2 y2, x y" /&gt;
    &lt;!-- or --&gt;
    &lt;path d="s dx2 dy2, dx dy" /&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<br>

<h2><em>Q</em> / <em>q</em>（quadratic Bézier curve）：</h2>
<p><em>Q</em> 為起點與終點的貝茲曲線共用同一個控制錨點，所以它的座標只需要貝茲控制點的座標（<em>x1 y1</em>）以及終點座標（<em>x y</em>）。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M50 50 Q150 150, 250 50" stroke="#000" fill="transparent"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="GaLMbY" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-9">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/GaLMbY/">
    SVG-learn: path-9</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
</code>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="Q x1 y1, x y" /&gt;
    &lt;!-- or --&gt;
    &lt;path d="q dx1 dy1, dx dy" /&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<h2><em>T</em>（quadratic Bézier curve）：</h2>
<p>與 <em>S</em> 相似，<em>T</em> 會以目前的控制點，推斷出一個新的控制點，因此我們只要定義終點的 <em>x y</em>值，就能直接創造曲線。</p>
<figure class="mb-0">
    <img src="images/pic/html/svg-path-t.jpg">
</figure>
<p>根據 <a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial/Paths" target="_blank">MDN</a> 文件說明，<em>T</em> 指令前面必須是 <em>Q</em> 指令或另一個 <em>T</em> 指令才能達到效果。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M50 50 Q150 150, 250 50 T300 150" stroke="#F00" fill="transparent"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="PvgExj" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-10">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/PvgExj/">
    SVG-learn: path-10</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>前後都是 <em>T</em> 指令：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="oROqPQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-11">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/oROqPQ/">
    SVG-learn: path-11</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>假設 <em>T</em> 指令被單獨使用，控制點會被認為跟終點是相同的點，最終畫出來的結果將會是直線：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="vwMRPq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-12">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/vwMRPq/">
    SVG-learn: path-12</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>


<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial/Paths" target="_blank">MDN - Paths</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-04-path-1.html" target="_blank">SVG 研究之路 (4) - Path 基礎篇</a></li>
    <li><a href="https://www.yinchengli.com/2018/06/17/svg-path/" target="_blank">SVG Path路径在网页开发的作用</a></li>
    <li><a href="https://ithelp.ithome.com.tw/articles/10156809" target="_blank">Day4 - SVG Path 基礎篇</a></li>
    <li><a href="https://segmentfault.com/a/1190000005053782" target="_blank">svg之&lt;path&gt;详解</a></li>
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