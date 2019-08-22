<?php require_once 'include/_viewhead.php' ?>
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
                        <time>2019-08-22</time>
                        <h1>&lt;meta&gt; 的 name 屬性</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>HTML 的 &lt;meta&gt; 標籤有很多妙用，在「搜尋」這塊領域亦有相當份量的權重，它被用於敘述網頁資訊，例如重要關鍵字、網頁描述、作者、發佈時間...等，&lt;meta&gt; 標籤並不會顯示在網頁前端提供瀏覽者閱讀，而是幫助瀏覽器搜尋引擎更能有效率地搜尋到網站。</p>

<h3 class="html"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="html">&lt;meta name="項目名稱" content="資訊內容"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>以下說明各屬性用途：</p>
<p>description：用來寫網頁的簡短描述，常用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="html">&lt;meta name="description" content="網頁簡短描述"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>keywords：設定網頁關鍵字，可鍵入多組字詞，各關鍵字詞間用半形逗號區隔，常用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="html">&lt;meta name="keywords" content="網頁關鍵字"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>author：記錄網頁的作者名稱。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="html">&lt;meta name="author" content="作者姓名"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>generator：用來記錄網頁編輯器名稱。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="html">&lt;meta name="generator" content="編輯器名稱"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<p>copyright：宣告網頁版權，但 HTML5 已不在列，不建議使用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area06" class="code-text"><code class="html">&lt;meta name="copyright" content="網頁版權"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<p>distribution：宣告網頁發佈地區，但 HTML5 已不在列，不建議使用。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="html">&lt;meta name="distribution" content="網頁發佈地區"&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<p>google：關閉 Google 搜尋引擎上「翻譯這個網頁」的選項。</p>
<h3 class="html"></h3>
<div class="code-area">
<pre id="area08" class="code-text"><code class="html">&lt;meta name="google" content="notranslate" /&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>

<figure>
    <img src="images/pic/html/meta-notranslate.png">
</figure>
<br>
<p>在 HTML5 裡，許多 <em>meta name</em> 標籤已不在列，像是 <em>copyright</em>、<em>distribution</em> 等，至於哪些仍在使用，或是新增的標籤，可參考以下幾篇：</p>
<p><a href="http://www.w3schools.com/tags/tag_meta.asp" target="_blank">HTML &lt;meta&gt; Tag</a></p>
<p><a href="https://developer.mozilla.org/zh-TW/docs/Web_%E9%96%8B%E7%99%BC/Historical_artifacts_to_avoid" target="_blank">應該避免的過時語法</a></p>
<br>
<p><em>meta robots</em>（中繼標記）：</p>
<p>定義瀏覽器搜尋引擎的索引方式，若想深入了解，可讀下面幾篇文章：</p>
<p><a href="http://www.yesharris.com/crawl-and-index/" target="_blank">SEO 基礎課程：認識抓取（Crawl）與索引（Index）</a></p>
<p><a href="http://www.yesharris.com/meta-robots-and-robots-txt/" target="_blank">三分鐘搞懂 SEO 的《meta robots、robots.txt》</a></p>
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