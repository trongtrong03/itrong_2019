<!doctype html>
<html class="pages res view">
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
                        <time>2016-12-13</time>
                        <h1>什麼是跨瀏覽器前綴？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>瀏覽器百家爭鳴，使用不同技術的瀏覽器對 CSS 的相容未必一致，尤其 CSS3 推出後，不見得所有瀏覽器都能支援這些新屬性，供應商開發人員為了改善這樣情況，紛紛推出他們獨有的前綴，以確保 CSS 在自家瀏覽器能正常被執行。</p>
<p>儘管如此，現今各供應商最新版本的瀏覽器大多已能支援 CSS3，前綴的目的是讓某些 CSS3 屬性能讓舊版本的瀏覽器得以兼容判讀。</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">前綴</span>
        <span class="t-flex5">使用瀏覽器</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">-moz-</span>
        <span class="t-flex5">Firefox</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">-webkit-</span>
        <span class="t-flex5">Safari, Google chrome</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">-o-</span>
        <span class="t-flex5">Opera</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">-ms-</span>
        <span class="t-flex5">IE</span>
    </div>
</div>
<p>範例：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div {
    -moz-border-radius: 1rem; 
    -webkit-border-radius: 1rem;
    border-radius: 1rem; 
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>注意！不帶前綴的原始屬性要放在最後一行。</p>
<p>網路上也有很多方式，幫助網頁設計師手刻 CSS 時，提供跨瀏覽器前綴的協助，例如：</p>
<ol class="decimal">
    <li>JavaScript：<a href="http://leaverou.github.io/prefixfree/" target="_blank">-prefix-free</a></li>
    <li>線上工具：<a href="http://expressprefixr.herokuapp.com/" target="_blank">Express Prefixr</a></li>
    <li>使用前處理器（Preprocessors）：<a href="http://compass-style.org/" target="_blank">Compass</a>、<a href="http://bourbon.io/" target="_blank">Bourbon</a> ...等。</li>
</ol>
<p>另外，不是所有的 CSS（尤其是 CSS3）都需要加上前綴，也不是所有瀏覽器供應商都有前綴，例如 <em>border-radius</em> 屬性，有些設計師可能會習慣性把主流的前綴通通寫上去，然而，針對 Opera 瀏覽器，<em>border-radius</em> 並沒有 <em>-o-border-radius</em> 這樣的支援前綴屬性，所以使用前最好還是查詢清楚。</p>
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