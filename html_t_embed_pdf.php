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
                        <time>2017-07-24</time>
                        <h1>將 PDF 文件內嵌於網頁（&lt;embed&gt;）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;embed width="100%" height="768" src="Path/name.pdf"&gt;&lt;/embed&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>範例：</p>
<embed width="100%" height="768" src="http://www.pdf995.com/samples/pdf.pdf"></embed>
<br>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="MvWYqM" data-default-tab="html,result" data-user="itrong" data-embed-version="2" data-pen-title="html-tool-embed-pdf" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/MvWYqM/">html-tool-embed-pdf</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
</code>
<p>在手機或一些其他媒介可能會無法生效。</p>
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