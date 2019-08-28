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
                        <time>2016-12-01</time>
                        <h1>SCSS：import 資料夾內的 sass 檔（@import）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<div class="inside-edit">
<!-- start -->
<p>透過 <em>@import</em> 載入檔案的方式，我們得以實現「利用 SCSS 或 Sass 撰寫 CSS，視需要將不同頁面或不同功能的 CSS 獨立出來撰寫，以便日後方便查看及維護。」之想法，具體的操作方式為下：</p>
<p class="step">
    <span>Step01. 建立 Sass 檔案，檔名需以「_」開頭。</span>
</p>
<br>
<p class="step">
    <span>Step02. 在主 Sass 檔加上 <em>@import</em> 但不包含「_」的檔名。</span>
</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">@import "檔案路徑";</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="scss">@import "reset.css";</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>P.S. 對 Sass 同樣也適用。</p>
<br>
<h2>同場加映：</h2>
<p>一支一支引入很麻煩？是否有一次 <em>@import</em> 資料夾所有的檔案？有的！</p>
<p>如果有安裝 <em>sass-globbing</em> 的話，可以直接 <em>@import</em> 整個資料夾所有的 Sass 檔案，但是 Sass 和 SCSS 引入的語法有些不一樣。</p>

<h3 class="sass"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="scss">@import "資料夾路徑/*"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<h3 class="scss"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="scss">@import "資料夾路徑/**/*"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>或是</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="scss">@import "資料夾路徑/*.*"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<p>※有關 <em>sass-globbing</em> 的使用及安裝方式，可參考此篇：<a href="css_compass_sass_globbing.php">import 資料夾內所有 sass 檔（sass-globbing）</a></p>
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