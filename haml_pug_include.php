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
                        <time>2019-10-23</time>
                        <h1>Lesson07-- 包含（Include）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>PHP 和 ASP 都有 <em>include</em> 語法允許網頁插入其他網頁的內容，然而 HTML 本身卻沒有這樣方便的一個語法，所幸 Pug 有提供 <em>include</em> 方法，讓我們在製作網頁樣板時可以更輕鬆進行開發與管理。</p>
<br>
<h2>使用流程：</h2>
<p class="step">
    <span>Step01. 建立 <em>.pug</em> 內容。</span>
</p>
<p>首先，我們至少要創建兩個以上的 <em>.pug</em> 文件，分別是包含以及被包含的文件。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">//- header.pug
header
    a.logo(href='index.html') LOGO
    nav
        ul
            li
                a(href='###') Link01
            li
                a(href='###') Link02
            li
                a(href='###') Link03</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="pug"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="yaml">//- footer.pug
footer
    p copyright @ 2019</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p><em>header.pug</em> 與 <em>footer.pug</em> 是我們要用來給其他頁面包含的內容文件，接著我們再新增一個 <em>.pug</em> 檔案，取名為 <em>index</em>。</p>
<br>

<p class="step">
    <span>Step02. 插入 <em>include</em> 語法。</span>
</p>
<p>Include 的使用語法就和純文本使用元素標籤的方法一樣簡單，僅需在行首宣告 <em>include</em>，空格後添加要包含的 <em>.pug</em> 檔案路徑及名稱即可。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="yaml">// 同資料夾層級
include filename.pug

// 如果包含的檔案在其他資料夾內
include path/filename.pug</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>以 <em>index.pug</em> 為例：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">doctype html
html
  head
    title Pug Demo

  body
    include header.pug
    main
        p hello!
    include footer.pug</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Pug Demo&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;header&gt;&lt;a class="logo" href="index.html"&gt;LOGO&lt;/a&gt;
      &lt;nav&gt;
        &lt;ul&gt;
          &lt;li&gt;&lt;a href="###"&gt;Link01&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="###"&gt;Link02&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="###"&gt;Link03&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/nav&gt;
    &lt;/header&gt;
    &lt;main&gt;
      &lt;p&gt;hello!&lt;/p&gt;
    &lt;/main&gt;
    &lt;footer&gt;
      &lt;p&gt;copyright @ 2019&lt;/p&gt;
    &lt;/footer&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>包含純文本：</h2>
<p>被包含的文件如果不是 <em>.pug</em> 文件，而是像樣式表（<em>.css</em>）或 Javascript 腳本（<em>.js</em>）之類的檔案，則會被視作純文字內容來引入。</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="css">//- style.css
body {
    margin: 0;
    padding: 0;
}

header {
    background: #000;
}
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<h3 class="js"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="javascript">//- script.js
console.log("hello!");</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<h3 class="pug"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="yaml">//- index.pug
doctype html
html
  head
    title Pug Demo
    style 
        include style.css 

  body
    main 
        p hello!
    script 
        include script.js</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Pug Demo&lt;/title&gt;
        &lt;style&gt;
            body {
                margin: 0;
                padding: 0;
            }
            header {
                background: #000;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;main&gt; 
            &lt;p&gt;hello!&lt;/p&gt;
        &lt;/main&gt;
        &lt;script&gt;
            console.log("hello!");
        &lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<br>

<h2>過濾包含的文本內容：</h2>
<p>如果包含引用的文件是其他模板語言，例如 Markdown，Pug 有提供將其過濾轉譯成正確 HTML 格式的 <em>include</em> 語法。</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area10" class="code-text"><code class="yaml">include:markdown-it filename.md</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>

<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/api/getting-started.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/api/getting-started.html" target="_blank">Pug 中文文档</a></li>
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