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
                        <time>2017-07-11</time>
                        <h1>簡易跑馬燈語法（&lt;marquee&gt;）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>除了基本的參數設置外，同時加入了滑鼠移入停留及挪開繼續移動的效果（在 Codepen 檢視可能無效）。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;marquee scrollamount="2" scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start();"&gt;
    &lt;a href="#0"&gt;文字文字文字文字文字文字文字文字文字文字文字文字...&lt;/a&gt;
&lt;/marquee&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="OgaaBX" data-default-tab="html,result" data-user="itrong" data-embed-version="2" data-pen-title="html-marquee-2" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/OgaaBX/">html-marquee-2</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
    <script async src="https://production-assets.codepen.io/assets/embed/ei.js"></script>
</code>
<p>有關 <em>&lt;marquee&gt;</em> 標籤更詳細的介紹，可以閱讀此篇：<a href="html-tag-marquee.php" target="_blank">跑馬燈（&lt;marquee&gt;）</a></p>
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