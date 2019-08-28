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
                        <time>2019-08-13</time>
                        <h1>list-style</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p><em>list-style</em> 是一行設置相關屬性的屬性方法，主要用來設定列表（<em>&lt;ul&gt;</em>、<em>&lt;ol&gt;</em>、<em>&lt;li&gt;</em>）的樣式，它囊括以下這些屬性項目：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Property</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">list-style-type</span>
        <span class="t-flex5">樣式標記的類型</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">list-style-position</span>
        <span class="t-flex5">樣式標記的位置</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">list-style-image</span>
        <span class="t-flex5">用影像呈現樣式標記</span>
    </div>
</div>
<h3 class="rule"></h3>
<div class="code-area">
    <pre id="area01" class="code-text"><code class="css">ul {
    list-style: list-style-type list-style-position list-style-image    /* 按順序，可省略，被省略的屬性將以預設值顯示 */
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
    <pre id="area02" class="code-text"><code class="css">ul {
    list-style: decimal inside url('images/icon.png');
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<!-- 屬性值 -->
<h2 class="cssproperty"><em>list-style-type</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">disc</span>
        <span class="t-flex5">實心圓【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">circle</span>
        <span class="t-flex5">空心圓</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">square</span>
        <span class="t-flex5">實心方塊</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">decimal</span>
        <span class="t-flex5">數字</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">decimal-leading-zero</span>
        <span class="t-flex5">0 開頭的數字標記（01、02、03...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">lower-roman</span>
        <span class="t-flex5">小寫羅馬數字標記（i、ii、iii...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">upper-roman</span>
        <span class="t-flex5">大寫羅馬數字標記（I、II、III...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">lower-alpha</span>
        <span class="t-flex5">小寫英文字母標記（a、b、c...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">upper-alpha</span>
        <span class="t-flex5">大寫英文字母標記（A、B、C...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">lower-greek</span>
        <span class="t-flex5">小寫希臘字母標記（alpha、beta、gamma...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">lower-latin</span>
        <span class="t-flex5">小寫拉丁字母標記（a、b、c...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">upper-latin</span>
        <span class="t-flex5">大寫拉丁字母標記（A、B、C...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">hebrew</span>
        <span class="t-flex5">傳統的希伯來編號</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">armenian</span>
        <span class="t-flex5">傳統的亞美尼亞編號</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">georgian</span>
        <span class="t-flex5">傳統的喬治亞編號</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">cjk-ideographic</span>
        <span class="t-flex5">簡單的表意方式</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">hiragana</span>
        <span class="t-flex5">日本片假名標記（a、i、u、e、o、ka、ki...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">katakana</span>
        <span class="t-flex5">日本片假名標記（A、I、U、E、O、KA、KI...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">hiragana-iroha</span>
        <span class="t-flex5">日本片假名標記（i、ro、ha、ni、ho、he、to...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">katakana-iroha</span>
        <span class="t-flex5">日本片假名標記（I、RO、HA、NI、HO、HE、TO...）</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">none</span>
        <span class="t-flex5">無標記</span>
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

<h2 class="cssproperty"><em>list-style-position</em></h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">Value</span>
        <span class="t-flex5">Description</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">outside</span>
        <span class="t-flex5">標記坐落於文本左側外【預設值】</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">inside</span>
        <span class="t-flex5">標記坐落於文本左側內</span>
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

<h2 class="cssproperty"><em>list-style-image</em></h2>
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
        <span class="t-flex1">url</span>
        <span class="t-flex5">影像路徑</span>
    </div>
</div>



<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="html,result" data-user="itrong" data-slug-hash="wvwMoLx" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css-list-style">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/wvwMoLx/">
    css-list-style</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>

<!-- JS調用 -->
<h2 class="cssjs"></h2>
<h3 class="js"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="js">object.style.listStyle="decimal inside"

// list-style-type
object.style.listStyleType="square"

// list-style-position
object.style.listStylePosition="inside"

// list-style-image
object.style.listStyleImage="url('/path/name.png')"
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