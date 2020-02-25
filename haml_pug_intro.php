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
                        <time>2019-10-19</time>
                        <h1>Notes01-- 什麼是 Pug？</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h2>基本介紹：</h2>
<p>或許不少人（包括我在內）初見 Pug 的時候還以為又是新誕生的 HTML 模板語言，但其實 Pug 就是 Jade，因為名稱版權的緣故，Jade 於 2018 年前後易名為 Pug，如同其 LOGO 標誌，取自巴哥犬的意思。</p>
<figure>
    <img src="images/pic/html/pug-intro-01.jpg">
    <figcaption>Pug 的官方 <a href="https://github.com/pugjs/pug" target="_blank">Github</a></figcaption>
</figure>

<p>以下是 Pug 簡單的程式碼範例：</p>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="yaml">doctype html
html(lang="en")
  head
    title= pageTitle
    script(type='text/javascript').
      if (foo) bar(1 + 5)
  body
    h1 Pug - node template engine
    #container.col
      if youAreUsingPug
        p You are amazing
      else
        p Get on it!
      p.
        Pug is a terse and simple templating language with a
        strong focus on performance and powerful features.</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>經過編譯後，它產生的 HTML 結果為：</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Pug&lt;/title&gt;
        &lt;script type="text/javascript"&gt;
            if (foo) bar(1 + 5)
        &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;Pug - node template engine&lt;/h1&gt;
        &lt;div id="container" class="col"&gt;
            &lt;p&gt;You are amazing&lt;/p&gt;
            &lt;p&gt;Pug is a terse and simple templating language with a strong focus on performance and powerful features.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>由範例可知 Pug 是一套可以將 HTML 大為簡化進而提升開發效率的模板引擎，既然說是模板引擎，意味著 Pug 可以將一些網頁內容（例如多個頁面的共同內容）獨立製作成模板，利用 Pug 的特定指令，讓其他頁面可以繼承或套用模板內容。除此之外，Pug 省略掉 HTML 標籤前後的尖括號（<em>&lt;&gt;</em>），標籤結束時也不需要結尾標籤，免去了漏寫結尾標籤導致網頁排版錯亂而產生的困擾。至於大量簡化程式碼結構的 Pug 有沒有比傳統 HTML 來的好讀，就像有些人喜歡 Sass 的簡潔，有些人仍喜歡保留嵌套符號的 SCSS 一樣，屬於見仁見智沒有標準答案的問題。</p>
<br>

<h2>如何使用：</h2>
<p class="step">
    <span>Step01. 安裝 Node.js。</span>
</p>
<p>要使用 Pug，則必須先安裝 Node.js。</p>
<figure class="mb-0">
    <img src="images/pic/frontend/gulp-install-01.jpg">
    <figcaption>Node.js 的<a href="https://nodejs.org/en/" target="_blank">官網網站</a>。</figcaption>
</figure>
<p>它有兩個下載連結，左邊是目前最多使用者推薦的版本，右邊則是當前最新的版本，下載完程式後執行安裝，安裝過程一直選擇下一步即可。</p>
<br>

<p class="step">
    <span>Step02. 安裝 Pug。</span>
</p>
<p>開啟命令提示字元，輸入以下指令：</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="dos">npm install pug-cli -g</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p class="step">
    <span>Step03. 編輯器安裝支援 Pug 格式的套件。</span>
</p>
<p>如果開發使用的編輯器沒有支援 Pug 語法格式識別，寫程式時會相當不易辨別且也無法進行編譯，以 Sublime Text 為例，要撰寫 Pug 之前，必須先安裝其相關資源包，才可進行 <em>.pug</em> 轉譯 <em>.html</em> 的動作。</p>
<p>首先同時按下 <em>Ctrl</em> + <em>Shift</em> + <em>P</em> 鍵組合，於指令框輸入「Install Package」，查找「Pug」並進行安裝即可。</p>
<figure>
    <img src="images/pic/html/pug-intro-02.jpg">
</figure>

<p>我們馬上來嘗試一下，假設已經創建了一個 <em>.pug</em> 文件，並輸入以下內容：</p>
<figure>
    <img src="images/pic/html/pug-intro-03.jpg">
</figure>
<h3 class="pug"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="yaml">doctype html
html
  head
    title Pug Demo
    meta(charset="utf-8")
    meta(name="viewport", content="width=device-width", initial-scale="1")
    link(rel="stylesheet", href="css/style.css")
  
  body
    .container
      p  hello!</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>當我們要進行編譯時，僅需按下 <em>Ctrl</em> + <em>B</em> 的按鍵組合，Sublime Text 就會立即進行編譯，生成 <em>.html</em> 格式的檔案。</p>
<figure>
    <img src="images/pic/html/pug-intro-04.jpg">
    <figcaption>按下 Ctrl + B。</figcaption>
</figure>

<p>以下是編譯的結果：</p>
<figure>
    <img src="images/pic/html/pug-intro-05.jpg">
</figure>

<p>目前尚未找到 Sublime Text 能執行 Pug 持續監聽執行編譯的相關資料，倘若有這方面需求，可能需要朝 Gulp、Webpack 此類自動化工具的方向尋求輔助。</p>
<br>

<h2>小結：</h2>
<ol class="decimal">
    <li>可建立模板，方便維護。</li>
    <li>簡化程式碼，強制縮進程式碼，增加易讀性。</li>
    <li>省略標籤結尾，可避免排版出錯。</li>
    <li>標籤寫法類似 CSS。</li>
</ol>
<!-- 參考資料 -->
<ul class="refer">
    <li><a href="https://pugjs.org/api/getting-started.html" target="_blank">pug</a></li>
    <li><a href="https://pug.bootcss.com/api/getting-started.html" target="_blank">Pug 中文文档</a></li>
    <li><a href="http://www.vialley.com/378/%E7%AD%86%E8%A8%98%EF%BC%9Ajade%E6%A8%A1%E6%9D%BF%E5%BC%95%E6%93%8E%E8%AA%9E%E8%A8%80" target="_blank">筆記：Pug(Jade)模板引擎語言</a></li>
    <li><a href="https://pjchender.github.io/2017/09/25/note-pug-%E5%AD%B8%E7%BF%92%E7%AD%86%E8%A8%98%EF%BC%88learn-to-use-pug%EF%BC%89/" target="_blank">[Note] PUG 學習筆記（Learn to Use PUG）</a></li>
    <li><a href="https://www.litreily.top/2018/08/31/pug-synax/" target="_blank">网页模板pug基本语法</a></li>
    <li><a href="https://medium.com/@NorthBei/%E5%A6%82%E6%9E%9C%E4%BD%A0%E6%98%AF%E5%B8%B8%E5%88%87%E7%89%88%E7%9A%84%E5%89%8D%E7%AB%AF%E5%B7%A5%E7%A8%8B%E5%B8%AB-%E4%BD%A0%E4%B8%80%E5%AE%9A%E8%A6%81%E7%9F%A5%E9%81%93pug-8b2cbc0a784c" target="_blank">如果你是常切版的前端工程師，你一定要知道pug!</a></li>
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