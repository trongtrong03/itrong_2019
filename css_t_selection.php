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
                        <time>2019-08-18</time>
                        <h1>設定反白（selection）的樣式</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>雖然 <em>div</em> 幾乎取代 <em>table</em> 標籤，成為 HTML 最主流的原始碼標籤，但是在模擬表格呈現上，並不若傳統 <em>table</em> 來的方便，例如要讓多個並排的 <em>div</em> 高度等高，所幸在 <em>display</em> 屬性中，有個 <em>table</em> 屬性可以模擬傳統 <em>table</em> 標籤的功用。</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div::selection { 
    background: value;
    color: value;
    text-shadow: value;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="wogqeE" data-default-tab="css,result" data-user="itrong" data-embed-version="2" data-pen-title="css-selection" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/wogqeE/">css-selection</a> by Trong (<a href="http://codepen.io/itrong">@itrong</a>) on <a href="http://codepen.io">CodePen</a>.</p>
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