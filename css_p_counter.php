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
                        <time>2019-08-15</time>
                        <h1>counter</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>counter</em> 通常與擬（偽）元素 <em>::before</em>、<em>::after</em> 搭配，設定元素的生成內容，如果擬（偽）元素沒有添加本屬性將無法作用。</p>
<p><em>content</em> 屬性有非常多種設定，例如添加純文字、圖片、連結...等。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector::before or ::after {
    content: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div::after {
    content: '●';
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>content</em></h2>
<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">normal</span>
        <span class="t-flex5">擬（偽）元素無作用【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">none</span>
        <span class="t-flex5">擬（偽）元素不可見</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">counter</span>
        <span class="t-flex5">添加計數（搭配 <em>counter-increment</em>）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">attr(attribute)</span>
        <span class="t-flex5">添加屬性值</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">string</span>
        <span class="t-flex5">添加字串</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">open-quote</span>
        <span class="t-flex5">添加左（起始）引號</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">close-quote</span>
        <span class="t-flex5">添加右（結束）引號</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">no-open-quote</span>
        <span class="t-flex5">移除左（起始）引號</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">no-close-quote</span>
        <span class="t-flex5">移除右（結束）引號</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">url(url)</span>
        <span class="t-flex5">添加路徑檔案（影像、音樂、影片...等）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex5">繼承父元素的設定值</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex5">使用 CSS 官方制定的初始值</span>
    </div>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="KKPzWLm" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-content">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/KKPzWLm/">
    css-content</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>counter</em>：</h2>
<p>此屬性參數需先通過元素設置 <em>counter-increment</em> 屬性去定義一個變數名稱，再由其擬元素呼叫該變數，如此一來，同階層內相同的元素就會依序進行累加記數。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">selector {
    counter-increment: varName;
}
selector::before or ::after {
    content: counter(varName);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="mOmvXK" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-CONTENT-2">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/mOmvXK/">
    CSS-CONTENT-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>attr(attribute)</em>：</h2>
<p>此參數可以獲取指定元素屬性的值，透過擬元素顯示該值內容。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="css">selector::before or ::after {
    content: attr(attribute);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="RoVveB" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-CONTENT-3">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RoVveB/">
    CSS-CONTENT-3</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<p><em>attr</em> 也可以與 HTML5 新增的元素屬性功能 <em>data-*</em> 合作，實現更豐富的操作。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="css">selector[data-varName]::before or ::after {
    content: attr(data-varName); 
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="RoVvze" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-CONTENT-4">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RoVvze/">
    CSS-CONTENT-4</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>string</em>：</h2>
<p>此參數可以透過擬元素添加任何文字字串。</p>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="rNBewOX" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-content-string">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/rNBewOX/">
    css-content-string</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>open-quote</em> / <em>close-quote</em> & <em>no-open-quote</em> / <em>no-close-quote</em>：</h2>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="rWmPwO" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-CONTENT-1">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/rWmPwO/">
    CSS-CONTENT-1</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<h2><em>url</em>：</h2>
<p>此參數可以透過擬元素添加影像、聲音或影片。</p>
<h3 class="rule"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="css">selector[data-varName]::before or ::after {
    content: url(path/name.png);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="KNmEVz" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS-CONTENT-5">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/KNmEVz/">
    CSS-CONTENT-5</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area07" class="code-text"><code class="js">object.style.content="string"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<!-- 瀏覽器支援性 -->
<h2 class="browser"></h2>
<div class="is-browser">
    <div class="t-form">
        <div class="t-head">
            <span class="t-flex1">Chrome</span>
            <span class="t-flex1">Firefox</span>
            <span class="t-flex1">IE9以下</span>
            <span class="t-flex1">IE Edge</span>
            <span class="t-flex1">Safari</span>
            <span class="t-flex1">Opera</span>
        </div>
        <div class="t-row">
            <span class="t-flex1"><i class="fab fa-chrome"></i></span>
            <span class="t-flex1"><i class="fab fa-firefox"></i></span>
            <span class="t-flex1"><i class="fab fa-internet-explorer"></i></span>
            <span class="t-flex1"><i class="fab fa-edge"></i></span>
            <span class="t-flex1"><i class="fab fa-safari"></i></span>
            <span class="t-flex1"><i class="fab fa-opera"></i></span>
        </div>
        <div class="t-row">
            <span class="t-flex1 is-none">-webkit-</span>
            <span class="t-flex1 is-none">-moz-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1 is-none">-ms-</span>
            <span class="t-flex1 is-none">-webkit-</span>
            <span class="t-flex1 is-none">-o- / -webkit-</span>
        </div>
    </div>
</div>
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