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
                        <time>2016-11-28</time>
                        <h1>SCSS vs. Sass</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>兩者在編寫上大體而言可說是大同小異，但既然說是大同小「異」，意味著彼此還是有一些不同之處，以下簡單做個比較。</p>
<p>SCSS 語法編譯需要有括號、分號。</p>
<p>Sass 屬縮排語法，不需要括號、分號。</p>
<br>
<p>比較：</p>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">SCSS</span>
        <span class="t-flex1">Sass</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">易上手</span>
        <span class="t-flex1">較難入門</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">要括號、結尾分號，程式碼較繁瑣。</span>
        <span class="t-flex1">不用括號、結尾分號，程式碼非常簡潔。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">可直接兼容 CSS 格式。</span>
        <span class="t-flex1">無法兼容 CSS 格式。</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">對空白格判讀較不嚴謹。</span>
        <span class="t-flex1">講究空白格的使用。</span>
    </div>
</div>

<p>範例：</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">div {
    width: 100%;
    height: 100%;
    @include mixin;
    p {
        font-size: 1rem;
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="sass"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">div
    width: 100%
    height: 100%
    +mixin
    p
        font-size: 1rem
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>如果有安裝 sass-convert 命令行工具，就可以將這兩種語法互相轉換為另一個格式。</p>
<h3 class="bash"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="bash"># 將 Sass 轉換為 SCSS
$ sass-convert style.sass style.scss

# 將 SCSS 轉換為 Sass
$ sass-convert style.scss style.sass
</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
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