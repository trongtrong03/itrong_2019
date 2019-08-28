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
                        <time>2016-11-30</time>
                        <h1>Compass：config.rb 的配置介紹</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">gem install sass
gem install compass</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>


<p><em>config.rb</em> 是編譯 Sass 不可或缺的重要文件，內容包含一些編譯參數，並且可依開發者需求逕行更改。</p>
<p>一份經由 Compass 創立專案資料夾內的 config.rb 文件，基本內容會是長這樣：</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="bash">require 'compass/import-once/activate'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "stylesheets"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "javascripts"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
# relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false


# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p><em>#</em> 代表註解的意思，以下介紹這份文件的參數設定。</p>
<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="bash">require 'compass/import-once/activate'</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>當重複引用某 Sass 檔案時，只輸出一次編譯效果。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="bash">http_path = "/"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>專案根目錄位置。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="bash">css_dir = "stylesheets"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>CSS 的目錄位置與名稱。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="bash">sass_dir = "sass"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>Sass 的目錄位置與名稱。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="bash">images_dir = "images"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>
<p>圖片的目錄位置與名稱。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area07" class="code-text"><code class="bash">javascripts_dir = "javascripts"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>
<p>Javascripts 的目錄位置與名稱。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area08" class="code-text"><code class="bash">cache = false</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>
<p>每次編譯時，根目錄會產生「<em>.saa-cache</em>」的緩存資料夾，此設置可阻止其生成。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area09" class="code-text"><code class="bash">sourcemap = true</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<p>可在 CSS 目錄產生「<em>.map</em>」的文件，若瀏覽器有設定 sourcemap 的識別功能，即可在瀏覽器瀏覽、測試 Sass 語法。</p>
<br>

<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area10" class="code-text"><code class="bash">output_style = :compressed</code></pre>
    <button class="copy-btn" data-clipboard-target="#area10">
        <span>COPY</span>
    </button>
</div>
<p>編譯代碼輸出的風格，有以下四種設定：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">屬性</span>
        <span class="t-flex6">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">:expanded</span>
        <span class="t-flex6">預設值，保持原格式。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">:nested</span>
        <span class="t-flex6">有縮進，較好閱讀。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">:compact</span>
        <span class="t-flex6">簡潔格式，匯出來的 CSS 檔案大小比上面兩個還小。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">:compressed</span>
        <span class="t-flex6">所有格式壓縮為一行表示。</span>
    </div>
</div>
<br>


<h3 class="bash"></h3>
<div class="code-area mb-0">
<pre id="area11" class="code-text"><code class="bash">line_comments = false</code></pre>
    <button class="copy-btn" data-clipboard-target="#area11">
        <span>COPY</span>
    </button>
</div>
<p>可取消 CSS 編譯後產生的註解。</p>
<p>詳細介紹：<a href="http://www.sassplus.com/sass/152.html" target="_blank">Sassplus</a></p>
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