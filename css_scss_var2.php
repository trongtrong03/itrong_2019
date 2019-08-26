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
                        <time>2016-12-01</time>
                        <h1>SCSS：於選擇器、字串使用變數（$）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>前一篇文章（<a href="css_scss_var.php">SCSS：變數（$）宣告與使用</a>）已經展示如何宣告變數，並在樣式裡調用它們的方式，其實除了直接代入屬性後方的參數值外，也可以透過字串的形式，使用在選擇器名稱或是路徑之類的地方。
</p>
<p>使用方式很簡單，只要用 <em>#{}</em> 將變數名稱包覆在裡面即可。</p>
<h2>格式範例：</h2>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">$path: '../images/';

.bg {
    background: url(#{$path}bg.png);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>編譯成 CSS 後：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">.bg {
    background: url(../images/bg.png);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<h2>演例：</h2>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="scss">$button-color: red;

.#{$button-color}-button {
    background: $button-color;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>編譯成 CSS 後：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="css">.red-button {
    background: red;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
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