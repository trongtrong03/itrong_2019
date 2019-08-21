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
                        <time>2019-08-09</time>
                        <h1>word-break V.S. word-wrap</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>我們很常看到別人或是自己用 CSS 處理文章斷句是這樣寫的：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="css">article {
    word-break: break-all;
    word-wrap: break-word;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>這兩個屬性在說明文件上的說明頗為相似，都可以針對長單字在文本中進行斷行的操作，以下我們透過實例操作，直接比較這兩者端倪之處。</p>

<h3 class="demo"></h3>
<code class="mb-0">
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="JgBMbJ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="css: word-break vs word-wrap ">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/JgBMbJ/">
    css: word-break vs word-wrap </a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<p>由範例中不難看出，對於長單字接觸到元素右側，且無法行單字塞進去情況下，<em>word-wrap: break-word</em> 會將其整個換行重頭開始排列；而 <em>word-break: break-all</em> 則直接將塞不進去的剩餘長單字字串換行。</p>
<p>兩者各自有適合使用時機，比如說不希望單字被強制斷句，那就使用 <em>word-wrap: break-word</em>；倘若不喜歡長單字因為換行導致殘留過多空白，或許 <em>word-break: break-all</em> 會較符合需求。</p>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://www.cnblogs.com/2050/archive/2012/08/10/2632256.html" target="_blank">你真的了解word-wrap和word-break的区别吗？</a></li>
</ul>
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