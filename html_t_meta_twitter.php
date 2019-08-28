<!doctype html>
<html class="pages html view">
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
                        <time>2016-12-10</time>
                        <h1>寫給 Twitter 看的 SEO 標籤</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;meta name="twitter:card" content="卡片圖片的類型"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>類型有：summary、summary_large_image、app...等。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;meta name="twitter:site" content="@名稱"&gt;
&lt;meta name="twitter:title" content="網頁標題"&gt;
&lt;meta name="twitter:description" content="少於200字的描述"&gt;
&lt;meta name="twitter:creator" content="@作者"&gt;
&lt;meta name="twitter:image:src" content="影像網址"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>要注意的是，顯示的影像圖片尺寸至少要 280px。</p>
<p>欲知詳情：<a href="https://dev.twitter.com/cards/types" target="_blank">Twitter Developer Documentation</a></p>
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