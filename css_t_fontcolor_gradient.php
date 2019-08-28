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
                        <time>2019-08-12</time>
                        <h1>製作文字色彩漸層</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">h1 {
    background-image: -webkit-gradient(value);
    background-image: gradient(value);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="gQOWey" data-default-tab="css,result" data-user="itrong" data-pen-title="text-color-gradient" class="codepen">See the Pen <a href="https://codepen.io/itrong/pen/gQOWey/">text-color-gradient</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>) on <a href="https://codepen.io">CodePen</a>.</p>
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