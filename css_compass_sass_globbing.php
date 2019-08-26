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
                        <time>2017-01-03</time>
                        <h1>import 資料夾內所有 Sass/SCSS 檔（sass-globbing）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p class="step">
    <span>Step01. Ruby 安裝：<em>gem install sass-globbing</em></span>
</p>
<br>
<p class="step">
    <span>Step02. 於 <em>config.rb</em> 文件添加 <em>require 'sass-globbing'</em></span>
</p>
<br>
<p>SCSS 與 Scss 的引用指令不太一樣，看你使用哪一種樣式語言。</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="bash">@import "路徑/*.*";</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="bash">@import mixin/*.*;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>如果是使用 Sass 的話，語法則略有不同，如下：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="bash">@import "mixin/*"</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>有關 <em>@import</em> 的用法上若有不了解之處，可參考此篇：<a href="css_scss_import.php" target="_blank">import 資料夾內的 sass 檔（@import）</a>。</p>
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