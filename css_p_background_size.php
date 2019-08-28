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
                        <time>2019-08-11</time>
                        <h1>background-size</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>background-size</em> 可用來設定背景影像的尺寸。</p>

<h3 class="rule"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">selector {
    background-size: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div {
    background-size: 100% auto;   /* 寬度 高度 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>background-size</em></h2>
<div class="t-form mb-0">
    <div class="t-head"> 
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">auto</span>
        <span class="t-flex5">正常大小【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">length</span>
        <span class="t-flex5">固定數字單位</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">%</span>
        <span class="t-flex5">百分比</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">cover</span>
        <span class="t-flex5">使影像完全填滿元素區域</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">contain</span>
        <span class="t-flex5">使影像完整呈現於元素區域</span>
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
<p>如果使用數字單位或百分比設置 <em>bsckground-size</em> 屬性，其數值會有兩個，分別代表影像尺寸的寬度及高度，假設只填一個數值，則第二個數值（也就是高度）則會視為 <em>auto</em>，當中一個值設為 <em>auto</em>，代表該影像尺寸處於自動縮放的狀態。此外，<em>bsckground-size</em> 的數字單位、百分比不允許負值，使用時需要特別注意一下。</p>
<p><em>cover</em> 與 <em>contain</em> 的用途恰好相反，<em>cover</em> 使影像等比縮放填滿至整個元素範圍，若元素寬或高其中一個數值大於元素，則會直接溢出裁切掉。<br><em>contain</em> 則是將影像完整填滿至元素範圍內，所以不會有溢出裁切的問題，取而代之的可能是元素有多餘空白的狀況。<br>不過無論是哪一個參數，當元素範圍大於背景影像，都可能會造成影像失真。<br>簡而言之，若想要讓背景影像填滿整個元素，用 <em>cover</em>；要使影像始終完整呈現於元素內，則使用 <em>contain</em> 參數。</p>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="QeZPLr" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-background-size">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/QeZPLr/">
    css-background-size</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
    <pre id="area03" class="code-text"><code class="js">object.style.backgroundSize="100% auto"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
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