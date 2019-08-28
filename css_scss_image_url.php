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
                        <time>2017-01-29</time>
                        <h1>SCSS：自動尋找影像路徑（image-url）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>在使用本語法之前，我們在 CSS 樣式裡引用影像通常是這樣寫：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">.logo {
    background-image: url(../images/logo.png);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>透過 <em>image-url</em> 語法，不再需要書寫前面的路徑，僅需填入圖片名稱即可，當然，必須設定一些前置步驟，方能真正使用。</p>
<br>
<h2>流程：</h2>
<p class="step mb-0">
    <span>Step01. 修改 config.rb 文件的 <em>http_path</em>。</span>
    <span>config.rb：</span>
</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="bash"># Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "js"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>通常 config.rb 裡的 <em>http_path</em> 一行裡，其預設參數為 <em>"/"</em>，我們要將它修改層級到上一層。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="bash">http_path = "../"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p class="step mb-0">
    <span>Step02. 在 scss 裡使用 <em>image-url</em>。</span>
</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="scss">background-image: image-url(影像路徑);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>舉例來說：</p>
<h3 class="ex"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="scss">.logo {
    background-image: image-url(logo.png);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>轉譯後的 CSS 會自動在影像路徑前加上完整的路徑了。</p>
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