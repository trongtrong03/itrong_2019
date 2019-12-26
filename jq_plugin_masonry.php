<!doctype html>
<html class="pages js view">
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
                        <time>2019-07-01</time>
                        <h1>瀑布流（Masonry Grid）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="https://masonry.desandro.com/layout.html" target="_blank">Masonry</a></p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="grid-wrap"&gt;
    &lt;div class="grid-item"&gt;
        &lt;img src="img01"&gt;
    &lt;/div&gt;
    &lt;div class="grid-item"&gt;
        &lt;img src="img02"&gt;
    &lt;/div&gt;
    &lt;div class="grid-item"&gt;
        &lt;img src="img..."&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $('.grid-wrap').masonry({
            itemSelector: '.grid-item',
            // columnWidth: 160,
            gutter: 8       // 項目間距
        });
        $('.grid-item').each(function(i){
            setTimeout(function(){
                $('.grid-item').eq(i).addClass('is-visible');
            }, 200 * i);
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="MMGRVg" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: masonry">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/MMGRVg/">
    jq-plugin: masonry</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
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