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
                        <time>2019-08-17</time>
                        <h1>實現元素的等比縮放</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>我們都知道要設置元素在畫面中等比縮放，只要利用 CSS3 的 vw、vh 單位就好，但畢竟不是所有瀏覽器都完全兼容 CSS3，其實，妥當地利用 <em>padding</em> 屬性，也一樣可以做到元素等比縮放的效果。</p>
<p><em>padding</em> 屬性和 <em>margin</em> 一樣，他們的百分比數值是相對父元素的「寬度」來計算，換句話說，只要將 <em>padding</em> 的垂直方向值設定等同元素寬度（<em>width</em>）百分比值就可以了，例如：</p>

<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div {
    width: 30%;
    padding-bottom: 30vw;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="bOaErB" data-default-tab="css,result" data-user="itrong" data-pen-title="div等比例缩放-1" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/bOaErB/">div等比例缩放-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>

<p>透過上例第二個 Div，會發現若元素內有塞入文字或其他內容，該元素百分比比值就會跑掉，若要改善此情況，則必須在元素內再添加 <em>height: 0</em> 這個參數。</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    width: 30%;
    height: 0;
    padding-bottom: 30vw;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="JwMGOx" data-default-tab="css,result" data-user="itrong" data-pen-title="div等比例缩放-2" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/JwMGOx/">div等比例缩放-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>

<p>如此一來，便可以解決前述的問題，同時又能兼顧相容性，唯一缺點就是此一手法會使 <em>max-width</em> 屬性失去作用，因為 <em>max-width</em> 無法自動收縮，這時就要利用偽元素（before、after）來處理...</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">div {
    width: 30%;    
    max-width: 200px;
    overflow: hidden;
    &::after {
        content: '';    
        display: block;    
        margin-top: 100%; //或 padding-top: 100%
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="oJpxoz" data-default-tab="css,result" data-user="itrong" data-pen-title="div等比例缩放-3" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/oJpxoz/">div等比例缩放-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>如果偽元素透過 <em>margin-top</em> 來撐高元素，那麼就會涉及 margin collapse 外邊距合併的情況，因此父元素需要追加一條 <em>overflow: hidden;</em> 來隱藏溢出。然而此例僅適用於父元素內不包括其他子元素的狀況，若該元素內仍需要添加其他內容，那第二例的使用方式會比較符合需求。</p>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://blog.csdn.net/u010513603/article/details/78200207" target="_blank">div等比例缩放-------纯CSS实现自适应浏览器宽度的正方形</a></li>
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