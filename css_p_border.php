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
                        <time>2019-08-14</time>
                        <h1>border</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>border</em> 可用來給元素添加邊框。<br><em>border</em> 是一行設置其所有屬性的方法，包含 <em>border-width</em>、<em>border-style</em> 與 <em>border-color</em>。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Property</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">border-width</span>
        <span class="t-flex5">邊框的寬度</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">border-style</span>
        <span class="t-flex5">邊框的樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">border-color</span>
        <span class="t-flex5">邊框的顏色</span>
    </div>
</div>
<h3 class="rule"></h3>
<div class="code-area">
    <pre id="area01" class="code-text"><code class="css">selector {
    border: width style color;      /* 順序可以變動 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
    <pre id="area02" class="code-text"><code class="css">img {
    border: 1px solid #000;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>border-width</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">medium</span>
        <span class="t-flex5">定義中等的邊框【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">thin</span>
        <span class="t-flex5">定義較細的邊框</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">thick</span>
        <span class="t-flex5">定義較粗的邊框</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">length</span>
        <span class="t-flex5">固定數字單位</span>
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

<h2 class="cssproperty"><em>border-style</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">none</span>
        <span class="t-flex5">無【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">hidden</span>
        <span class="t-flex5">隱藏的邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">dotted</span>
        <span class="t-flex5">點狀邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">dashed</span>
        <span class="t-flex5">虛線邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">solid</span>
        <span class="t-flex5">實線邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">double</span>
        <span class="t-flex5">雙線邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">groove</span>
        <span class="t-flex5">3D凹槽邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">ridge</span>
        <span class="t-flex5">3D凸槽邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inset</span>
        <span class="t-flex5">3D凹邊邊框樣式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">outset</span>
        <span class="t-flex5">3D凸邊邊框樣式</span>
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

<h2 class="cssproperty"><em>border-color</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">transparent</span>
        <span class="t-flex5">透明【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">color_name</span>
        <span class="t-flex5">顏色英文名稱（如：red）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">hex_number</span>
        <span class="t-flex5">十六進制值（如：#FF0000）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">rgb_number</span>
        <span class="t-flex5">RGB 代碼（如：rgba(255, 0, 0)）</span>
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
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="css,result" data-user="itrong" data-slug-hash="JjPGxNg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-border">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/JjPGxNg/">
    css-border</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="js">object.style.border="1px solid #000"

// border-width
object.style.borderWidth="1px"

// border-style
object.style.borderStyle="solid"

// border-color
object.style.borderColor="#000"
</code></pre>
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