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
                        <time>2016-11-29</time>
                        <h1>SCSS：基礎寫法規則</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>SCSS 採階梯式的書寫模式，它允許將一個 CSS 樣式「嵌套」進另一個樣式中，被嵌套進的樣式僅會在其父階層的樣式範圍內才會生效。</p>
<p>範例：</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">#wrap {
    width: 100%;
    height: 100%;
    .main {
        width: 50%;
        margin: 0 auto;
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<p>實際編譯出來的 CSS 結果將會是：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">#wrap {
    width: 100%;
    height: 100%;
}
#wrap .main {
    width: 50%;
    margin: 0 auto;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>不難看出用 SCSS 編寫樣式屬性，遠比純用 CSS 書寫快速且節省行數很多。</p>
<p>雖然不清楚上限多少，但嵌套的階層數可以很多，例如：</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="scss">#wrap {
    width: 100%;
    height: 100%;
    .main {
        width: 50%;
        margin: 0 auto;
        div {
            background: #CCC
            p {
                font-size: 1rem;
                color: #FFF;
                span {
                    display: block;
                }
            }
        }
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>

<p>然而，過於繁瑣的階層包覆恐不利閱讀維護，建議還是適當地使用較妥當。</p>
<p>另外有關偽類屬性（例如：<em>:hover</em>、<em>:active</em>...）指定父選擇器的用法，SCSS 透過「&」字符來操作，以下有幾種使用方式：</p>
<p>1. 偽類操作：</p>
<h3 class="scss"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="scss">a {
    &:hover,
    &:active {
        color: #000;
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>編譯 CSS 結果：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area05" class="code-text"><code class="css">a:hover,
a:active {
    color: #000;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>

<p>2. 承襲父階層選擇器名稱：</p>
<h3 class="scss"></h3>
<div class="code-area mb-0">
<pre id="area06" class="code-text"><code class="scss">.wrap {
    background: #000;
    padding: 1rem;
    &-main {
        background: #CCC;
    }
    &-content {
        width: 1000px;
        margin: 0 auto;
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area06">
        <span>COPY</span>
    </button>
</div>

<p>編譯 CSS 結果：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area07" class="code-text"><code class="css">.wrap {
    background: #000;
    padding: 1rem;
}
.wrap-main {
    background: #CCC;
}
.wrap-content {
    width: 1000px;
    margin: 0 auto;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area07">
        <span>COPY</span>
    </button>
</div>

<p>3. 以父階層選擇器包覆屬性：</p>
<h3 class="scss"></h3>
<div class="code-area mb-0">
<pre id="area08" class="code-text"><code class="scss">a {
    color: #000;
    .wrap & {
        font-weight: bold;
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area08">
        <span>COPY</span>
    </button>
</div>

<p>編譯 CSS 結果：</p>
<h3 class="css"></h3>
<div class="code-area">
<pre id="area09" class="code-text"><code class="css">a {
    color: #000;
}
.wrap a {
    font-weight: bold;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area09">
        <span>COPY</span>
    </button>
</div>
<p>以上，是不是很簡單呢？</p>
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