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
                        <time>2019-06-04</time>
                        <h1>Learn08-- 路徑（Path） ● 其四：指令介紹-弧形</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>A</em> 是 <em>&lt;path&gt;</em> 裡面最複雜也是最困難的指令，<em>A</em> 指的是弧形，也就是 Arcs。它的屬性參數很多，一共有七個參數。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex5">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>rx</em></span>
        <span class="t-flex5">橢圓的 X 軸半徑</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>ry</em></span>
        <span class="t-flex5">橢圓的 Y 軸半徑</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>x-axis-rotation </em></span>
        <span class="t-flex5">弧線與 X 軸的夾角</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>large-arc-flag</em></span>
        <span class="t-flex5">1 為大角度弧線，0 為小角度弧線（前提必須有三個點）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>sweep-flag</em></span>
        <span class="t-flex5">1 為順時針方向，0 為逆時針</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>x</em></span>
        <span class="t-flex5">終點 X 座標</span>
    </div>
    <div class="t-row">
        <span class="t-flex1"><em>y</em></span>
        <span class="t-flex5">終點 Y 座標</span>
    </div>
</div>
<br>
<h2><em>A</em> / <em>a</em>（Arcs）：</h2>
<p>同樣有大小寫的區別，語法如下：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="A rx ry x-axis-rotation large-arc-flag sweep-flag x y" /&gt;
    &lt;!-- or --&gt;
    &lt;path d="a rx ry x-axis-rotation large-arc-flag sweep-flag dx dy" /&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>基本用法：</p>
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="html">&lt;svg&gt;
    &lt;path d="M10 150 A20 30 0 0 0 200 150" stroke="#F00" fill="transparent"/&gt;
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p><em>rx</em> 與 <em>ry</em> 的 X、Y 軸半徑若小於起點與終點的長度，則會換算成比例，上例中 X、Y 軸的比例為 2:3，後方的參數依順序為弧線與 X 軸的夾角（0）、小角度弧線（0）、逆時針方向（0），以及終點 X、Y 座標（200, 150）。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="dExpgr" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-13">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/dExpgr/">
    SVG-learn: path-13</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>如果想要路徑方向是順時針，那麼僅需將 <em>sweep-flag</em> 參數改成 1 即可。</p>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="eaqBvP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-14">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/eaqBvP/">
    SVG-learn: path-14</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>弧線與 X 軸的夾角：</p>
<p>沿用前面的範例，我們給這個弧形線增加 60 度的夾角，所得結果為下：</p>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="KLOmgZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-16">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/KLOmgZ/">
    SVG-learn: path-16</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>用圖解的方式來看會比較清楚：</p>
<figure>
    <img src="images/pic/html/svg-path-1.jpg">
</figure>

<p>大小角度弧線：</p>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="pmMeQw" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-15">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/pmMeQw/">
    SVG-learn: path-16</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
</code>
<p>大小角度弧線需要有三個點才會產生顯著的視覺效果，上面的例子因為只有兩個點，沒有角度的差異，所以繪製的結果是相同的。</p>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="xNvqma" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: path-16">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/xNvqma/">
    SVG-learn: path-17</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>增加第三個點後，我們就能很清楚看到大小角度線的差異，紅色線為小角度線（０），綠色線則為大角度線（1）</p>
<p>有關大小角度的計算方式個人也尚在學習摸索，建議可以參考置底參考資料的連結，有更豐富詳細的教學解說。</p>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial/Paths" target="_blank">MDN - Paths</a></li>
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-05-path-2.html" target="_blank">SVG 研究之路 (5) - Path 進階篇</a></li>
    <li><a href="https://wcc723.github.io/d3js/2014/10/03/Ironman-30-days-04/" target="_blank">SVG 超硬派了解 path Arcs</a></li>
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