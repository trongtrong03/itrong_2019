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
                        <time>2019-08-12</time>
                        <h1>iOS 行動裝置 iframe 無法向下滾動的解決方法（-webkit-overflow-scrolling）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>目前使用 iOS 系統的行動裝置瀏覽網頁時，若網頁有內嵌一個 <em>iframe</em>，且 <em>iframe</em> 內嵌的內容多於畫面的高度，將會遇到頁面無法向下滾動的情形，經網路搜尋，得出以下解答：</p>

<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">div {
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>範例：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">.main {
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

iframe {
    width: 100%;
    height: 100%;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="css">&lt;div class="main"&gt;
    &lt;iframe src="網址" frameborder="0" scrolling="yes"&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
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