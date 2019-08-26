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
                        <time>2016-12-18</time>
                        <h1>SCSS：定義參數（@mixin）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">@mixin 參數名稱;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>定義好後，在要置入參數的 class 下加入：</p>
<div class="code-area mb-0">
<pre id="area02" class="code-text"><code class="scss">@include 參數名稱;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>
<p>對應的 css 就會自動代入定義之參數內容。</p>
<p>範例：</p>
<h2>直接定義：</h2>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="scss">/* 定義 */
@mixin transition {
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    -ms-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}

/* 引用 */
@include transition;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>


<h2>設置變數：</h2>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="scss">/* 定義 */
@mixin border-radius($x) {
    border-radius: $x;
    moz-border-radius: $x;
    webkit-border-radius: $x;
}

/* 引用 */
@include border-radius(5px);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>


<h2>設置多樣變數：</h2>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="scss">/* 定義 */
@mixin maxW($width, $maxWidth) {
    width: $width;
    max-width: $maxWidth;
}

/* 引用 */
@include maxW(100%, 1000px);</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
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