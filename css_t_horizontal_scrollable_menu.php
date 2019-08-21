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
                        <time>2019-08-28</time>
                        <h1>水平延伸式的滾軸選單</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>如何實現「在固定寬度的區域內有不定數量的項目，項目總寬度則外部出現滾軸」這個問題其實困擾了我好一陣子，長久以來一直以為這樣的功能應該會需要動用到 Javascript 技術，後來才發現只需要簡單幾個 CSS 參數就能實現。</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">.wrap {
    white-space: nowrap;
    overflow-x: auto;
}

.item {
    display: inline-block;
    vertical-align: top;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>這是利用 <em>white-space: nowrap</em> 文本不斷行的特性，將其子階層內 <em>display: inline-block;</em> 的元素持續水平排序，由於父階層設有 <em>overflow-x: auto;</em> 屬性，所以當子元素項目累加寬度超過父階層寬度時，外部會產生水平捲軸。</p>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="yPxQVx" data-default-tab="html,result" data-user="itrong" data-embed-version="2" data-pen-title="CSS-水平延伸式的滾軸選單" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/yPxQVx/">CSS-水平延伸式的滾軸選單</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>

<br>
<h3>參考資料</h3>
<ol>
    <li><a href="https://www.w3schools.com/howto/howto_css_menu_horizontal_scroll.asp" target="_blank">How TO - Horizontal Scroll Menu</a></li>
</ol>
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