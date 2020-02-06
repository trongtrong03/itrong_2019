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
                        <time>2019-08-23</time>
                        <h1>［HTML5］&lt;meta&gt; 之 charset 屬性</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>過去我們在設定網頁編碼的時候是這樣寫：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>如今在 HTML5，我們可以改寫成這樣：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;meta charset="UTF-8" /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>舊版本的瀏覽器也適用此語法，故以後直接採用 HTML5 的標準寫法即可。</p>
<p>「UTF-8」是萬國碼，強烈建議網站使用此編碼，盡量不要使用大五碼「Big-5」（繁中最常用的字元標準）。</p>
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