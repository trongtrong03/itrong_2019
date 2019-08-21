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
                        <h1>transition</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>transition</em> 是 CSS3 新增的屬性，可用來設置網頁元素發生變化期間的轉場過渡效果，讓 CSS 屬性變化不再是單調的瞬間切換，同時也能取代過往利用 jQuery 才能達到的過渡動畫效果。</p>
<p><em>transition</em> 是四個從屬屬性的一行簡寫，分別是：</p>

<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Property</span>
        <span class="t-flex3">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">transition-property</span>
        <span class="t-flex3">過渡的 CSS 屬性名稱</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">transition-duration</span>
        <span class="t-flex3">過渡效果的花費時間（秒或毫秒）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">transition-timing-function</span>
        <span class="t-flex3">過渡效果的速度曲線</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">transition-delay</span>
        <span class="t-flex3">過渡的延遲開始時間（秒或毫秒）</span>
    </div>
</div>
<h3 class="rule"></h3>
<div class="code-area">
    <pre id="area01" class="code-text"><code class="css">selector {
    transition: property duration timing-function delay;    /* 順序可以變動 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">img {
    transition: all .3s ease;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>倘若要設定複數過渡屬性（<em>transition-property</em>）卻不想使用 <em>all</em> 來概括，則用半形「逗號」來分隔設置即可。</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">img {
    transition: color .3s ease, backround .3s ease;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>transition</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">all 0s ease 0s</span>
        <span class="t-flex5">【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex5">繼承父元素的樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex5">使用 CSS 官方制定的初始值</span>
    </div>
</div>

<h2 class="cssproperty"><em>transition-property</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">all</span>
        <span class="t-flex5">全部屬性【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">none</span>
        <span class="t-flex5">不套用任何屬性</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">property</span>
        <span class="t-flex5">CSS 屬性名稱</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex5">繼承父元素的樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex5">使用 CSS 官方制定的初始值</span>
    </div>
</div>

<h2 class="cssproperty"><em>transition-duration</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">0</span>
        <span class="t-flex5">視為沒有效果【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">time</span>
        <span class="t-flex5">時間，單位是 <em>s</em>（秒） 或 <em>ms</em>（毫秒）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex5">繼承父元素的樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex5">使用 CSS 官方制定的初始值</span>
    </div>
</div>

<h2 class="cssproperty"><em>transition-timing-function</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">linear</span>
        <span class="t-flex5">頭尾均速</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ease</span>
        <span class="t-flex5">低速開始 -> 中間加速 -> 低速結束【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ease-in</span>
        <span class="t-flex5">低速開始 -> 加速</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ease-out</span>
        <span class="t-flex5">低速結束</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ease-in-out</span>
        <span class="t-flex5">低速開始 -> 中間加速 -> 低速結束（較 <em>ease</em> 平緩）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">cubic-bezier(n,n,n,n)</span>
        <span class="t-flex5">自定義貝茲曲線數值（0 ~ 1）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex5">繼承父元素的樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex5">使用 CSS 官方制定的初始值</span>
    </div>
</div>

<h2 class="cssproperty"><em>transition-delay</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">0</span>
        <span class="t-flex5">不延遲【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">time</span>
        <span class="t-flex5">時間，單位是 <em>s</em>（秒） 或 <em>ms</em>（毫秒）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inherit</span>
        <span class="t-flex5">繼承父元素的樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">initial</span>
        <span class="t-flex5">使用 CSS 官方制定的初始值</span>
    </div>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="VwZamaZ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-transition">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/VwZamaZ/">
    css-transition</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="js">object.style.="color .3s ease"

// transition-property
object.style.transitionProperty="width, height"

// transition-timing-function
object.style.transitionTimingFunction="linear"

// transition-duration
object.style.transitionDuration=".3s"

// transition-delay
object.style.transitionDelay="2s"
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
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
            <span class="t-flex1 is-none"><i class="fab fa-internet-explorer"></i></span>
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