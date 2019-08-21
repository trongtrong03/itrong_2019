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
                        <time>2019-08-22</time>
                        <h1>背景影像重複漸變（repeating-linear-gradient）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>repeating-linear-gradient</em> 是一個用來建立由重複性漸層構成的 image，與 <em>linear-gradient</em> 屬性採用相同的參數。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div {
    background: repeating-linear-gradient(angle | to side-or-corner, color-stop1, color-stop2, ...);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<div class="t-form">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">angle</span>
        <span class="t-flex5">代表角度，設定漸變角度方向，預設值為 <em>180deg</em></span>
    </div>
    <div class="t-row">
        <span class="t-flex1">to side-or-corner</span>
        <span class="t-flex5">指定漸變的起始位置，像是 <em>to left</em>、<em>to bottom</em>...等，與 <em>angle</em> 值擇一使用</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">color-stop</span>
        <span class="t-flex5">設定漸變的起訖顏色，由顏色值、停止位置依序組成，例如 <em>red 10%</em>，停止位置除了使用百分比，亦可用數值單位（<em>px</em>、<em>em</em>...），若有多組漸層則以「逗號」區隔。</span>
    </div>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    background-image: repeating-linear-gradient(
        180deg,
        #000 0%,
        #EEE 25%,
        #F00 25%,
        #900 50%);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="RdjYbY" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css3:  repeating-linear-gradient">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/RdjYbY/">
    css3:  repeating-linear-gradient</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
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