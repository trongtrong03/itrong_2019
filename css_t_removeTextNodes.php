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
                        <time>2019-08-27</time>
                        <h1>解决 inline-block 的空白間距</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>方法一：</h2>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">.div {
    letter-spacing: -4px;
    word-spacing: -4px;
    font-size: 0;
}

.inline-block {
    display: inline-block;
    font-size: 16px;
    letter-spacing: normal;
    word-spacing: normal;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>在父元素設置 <em>font-size: 0;</em> 來兼容 Chrome，<em>letter-spacing</em>則用來兼容 Safari，其中，<em>letter-spacing</em> 與 <em>word-spacing</em> 可能需要視字體情況調整數值大小。由於底下子元素會繼承父元素的參數，所以子元素需要添加原本屬性的預設值以避免繼承。</p>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="aPRLov" data-default-tab="css,result" data-user="itrong" data-pen-title="CSS-removeTextNodes" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/aPRLov/">CSS-removeTextNodes</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>

<p>透過實作會發現，在 Chrome 與 Firefox 瀏覽器中，<em>word-spacing</em> 設 <em>-4px</em> 是會使其重疊的，調整為 <em>0</em> 較為合適，然而此一數值的更動，隨著字型或瀏覽器的修改，可能又會產生無法密合的情況，以下尚有另一種方法可供參考。</p>
<br>
<h2>方法二：</h2>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">.div {
    letter-spacing: -0.31em; /* Webkit: collapse white-space between units */
    *letter-spacing: normal; /* reset IE < 8 */
    *word-spacing: -0.43em; /* IE < 8: collapse white-space between units */
    text-rendering: optimizespeed; /* Webkit: fixes text-rendering: optimizeLegibility */
}

.inline-block {
    display: inline-block;
    zoom: 1;
    *display: inline;
    letter-spacing: normal;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="roqGLV" data-default-tab="css,result" data-user="itrong" data-pen-title="CSS-removeTextNodes-2" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/roqGLV/">CSS-removeTextNodes-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>和方法一達到一樣的功效，此方法是取自 Yahoo YUI3 的處理方式，原理與方法一大同小異，但對於數值的拿捏較為精準，也去除了 <em>font-size: 0;</em> 的使用。</p>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.w3cplus.com/css/fighting-the-space-between-inline-block-elements" target="_blank">如何解决inline-block元素的空白间距</a></li>
    <li><a href="https://www.puritys.me/docs-blog/article-259-%E7%A7%BB%E9%99%A4-CSS-inline-block-%E7%A9%BA%E7%99%BD.html" target="_blank">移除 CSS inline-block 空白</a></li>
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