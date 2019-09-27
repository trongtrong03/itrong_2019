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
                        <time>2019-06-12</time>
                        <h1>Learn14-- 遮色片（Masking）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>遮色片的概念就是：越黑越透明，越白越不透明。</p>
<p>操作方式與剪裁功能相同，於定義檔（<em>&lt;defs&gt;</em>）裡給予 <em>&lt;mask&gt;</em> 標籤並命名 ID，裏頭編寫要做為遮色片的圖形樣式，之後去讓物件目標指向這個遮色片 ID 即可。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;svg&gt;
    &lt;defs&gt;
        &lt;mask id="idName"&gt;
            &lt;!-- 遮色片圖形 --&gt;
        &lt;/mask&gt;
    &lt;/defs&gt;
    &lt;rect mask="url(#idName)"/&gt; 
&lt;/svg&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="vqvvmv" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: masking-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/vqvvmv/">
    SVG-learn: masking-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>在範例中，多增加一個灰底圖形是為了凸顯遮色片帶來的效果，灰色與藍色矩形是尺寸與位置皆相同的圖形，但藍色圖形有套上遮色片的緣故，故只會顯示遮色片範圍內的圖樣。</p>
<br>
<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="EBGGEQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: masking-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/EBGGEQ/">
    SVG-learn: masking-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>透過上面這個實作，可以理解到灰階深淺殊異的遮色片，賦予圖形的透明度也會有變化，越接近白色越不透明，反之則越透明。</p>
<br>
<p>此外，也可以利用漸層指令作出透明淡出的遮色片效果：</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="KjbbLq" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG-learn: masking-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/KjbbLq/">
    SVG-learn: masking-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.oxxostudio.tw/articles/201406/svg-09-clipping-masking.html" target="_blank">SVG 研究之路 (9) - Clipping and Masking</a></li>
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