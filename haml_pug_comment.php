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
                        <time>2019-10-27</time>
                        <h1>Notes15-- 註解（Comment）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>Pug 的註解模式有兩種，一種是會輸出給 HTML 文件的，另一種則是單純存在於 Pug 文件的註解，不會被編譯出去。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">// 我是註解，我會被編譯輸出
//- 我是註解，我不會被編譯輸出</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;!-- 我是註解，我會被編譯輸出--&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>多行註解：</h2>
<p>如果要註解的內容很多行，也就是一個區塊形式，它的正確寫法應該要是這樣：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">// 
    我是第一行註解
    我是第二行註解
    我會被編譯輸出

//- 
    我是第一行註解
    我是第二行註解
    我不會被編譯輸出</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;!--
我是第一行註解
我是第二行註解
我會被編譯輸出
--&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>條件註解：</h2>
<p>HTML 有些看起來是註解，實際上是用作 Internet Explorer 瀏覽器新舊版本識別的特殊標註，例如：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;!--[if IE 9]&gt;
IE 瀏覽器版本 9
&lt;![endif]--&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>這類型的標記在 Pug 沒有特殊的語法，直接用 HTML 格式書寫即可。</p>

<br>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/language/comments.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/language/comments.html" target="_blank">Pug 中文文档</a></li>
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