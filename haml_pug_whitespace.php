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
                        <time>2019-10-20</time>
                        <h1>Lesson04-- 空白控制（Whitespace Control）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>眼尖的朋友或許有發現到上一篇中，個人對於空白字元（以下簡稱空格）在 Pug 的明確使用方式矢口不提，由於 Pug 階層縮進的寫法並沒有大（花）括號的區隔，所以空格就成為寫 Pug 時很重要的識別方式，釐清編譯時哪些空格會被保留、哪些會被刪除即是本篇將要學習的目標。</p>
<p>根據官方文件的說明，當 Pug 編譯成 HTML 文件時，屬於以下條件的空格將會被刪除：</p>
<ol class="decimal">
    <li>縮進的空格（indentation）</li>
    <li>元素間的空格（whitespace）</li>
</ol>
<p>1. 縮進的空格：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">p 1111
    b 2222</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;p&gt;1111&lt;b&gt;2222&lt;/b&gt;&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>2. 元素間的空格：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">p
    | These are
    a link1
    a link2
    | items.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;p&gt;These are&lt;a&gt;link1&lt;/a&gt;&lt;a&gt;link2&lt;/a&gt;items.&lt;/p&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>要讓元素之間或與純文本之間有空格，假設直接在元素前後添加空白字元，如下圖所示：</p>
<figure>
    <img src="images/pic/html/pug-whitespace-01.jpg">
</figure>
<p>儘管 Sublime Text 編譯出來的結果確實行得通，然而 Pug 官方並不推薦這麼做，此乃考量可能有些編輯器預設操作環境下，編譯時會自動移除行尾的多餘空格。假設我們要採取這種方式，就必須先確保所使用的編輯器不會自動移除行尾空格才行，但不管怎樣，充其量也只是治標不治本的方法而已。Pug 官方則另外提出一個推薦方案，那就是使用更多管道 <em>|</em> 符號，加入在要分隔的目標元素前後，即可達到元素間添加空格的目的。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="yaml">p
    | These are
    |
    a link1
    |
    |
    a link2
    |
    | items.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>結果畫面：</p>
<figure>
    <img src="images/pic/html/pug-whitespace-02.jpg">
</figure>
<br>
<p>前面已說完空格會被刪除的情況，接下來再說說哪些條件下的空格不會被刪除：</p>
<ol class="decimal">
    <li>元素內純文本的空格</li>
    <li>區塊或管道符號（|）文本行間的換行</li>
    <li>區塊純文本的縮進</li>
    <li>行末的空格</li>
</ol>
<p>其中，行末空格稍早已有提到依據不同的編輯器預設環境，會有編譯時直接刪除的可能。</p>



<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/api/getting-started.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/api/getting-started.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="https://pjchender.github.io/2017/09/25/note-pug-%E5%AD%B8%E7%BF%92%E7%AD%86%E8%A8%98%EF%BC%88learn-to-use-pug%EF%BC%89/" target="_blank">[Note] PUG 學習筆記（Learn to Use PUG）</a></li>
    <li><a href="https://www.litreily.top/2018/08/31/pug-synax/" target="_blank">网页模板pug基本语法</a></li>
    <li><a href="https://codertw.com/%E5%89%8D%E7%AB%AF%E9%96%8B%E7%99%BC/49527/" target="_blank">程式前沿: html 模板 pug</a></li>
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