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
                        <time>2019-06-24</time>
                        <h1>文字翻轉特效（Content Flipper）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Plugin 來源：<a href="http://www.onextrapixel.com/examples/adjector-content-flipper/index4.html" target="_blank">Adjector.js</a></p>
<p><a href="http://www.onextrapixel.com/examples/adjector-content-flipper/index4.html" target="_blank">Adjector.js</a> 是一款可以將文字區域透過 3D 翻轉的方式達到切換內容的動態特效套件。</p>
<br>
<h3>引用：</h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;script src="http://www.onextrapixel.com/examples/adjector-content-flipper/js/adjector.js"&gt;&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;div class="text-container"&gt;
    &lt;div class="text-adject"&gt;
        &lt;p&gt;內文1&lt;/p&gt;
        |
        &lt;p&gt;內文2&lt;/p&gt;
        |
        &lt;p&gt;內文...&lt;/p&gt;
    &lt;/div>
&lt;/div&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="html">&lt;script&gt;
    $(function() {
        $(".text-container .text-adject").adjector({
            sep: "|",
            stay: 3000,
            trans: 850,
            arm: 0
        });
    });
&lt;/script&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p><em>sep</em> 屬性代表用來區別文字區域依次翻轉的符號，可以改成別的，例如：「/」、「~」...等。</p>

<h3 class="demo"></h3>
<code>
    <p class="codepen" data-height="480" data-theme-id="0" data-default-tab="result" data-user="itrong" data-slug-hash="OeQzeP" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="jq-plugin: adjector">
    <span>See the Pen <a href="https://codepen.io/itrong/pen/OeQzeP/">
    jq-plugin: adjector</a> by Trong (<a href="https://codepen.io/itrong">@itrong</a>)
    on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</code>
<br>
<p>比較可惜的是翻轉的內文區域內其他元素標籤都會被取消，故無法作太多樣式的變化，算是本款套件一個小小的缺憾。</p>
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