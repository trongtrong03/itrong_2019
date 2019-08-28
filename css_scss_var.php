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
                        <h1>SCSS：變數（$）宣告與使用</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>想要用 Sass / SCSS 編寫 CSS，那學習變數的宣告及其使用方式可謂基本功，同時也是為什麼現在大多數的開發者都在使用 Sass / SCSS，因為它們可以大大提升工作效率。</p>
<br>
<p>假設今天撰寫樣式表過程中，有一些參數值（可能是顏色，抑或者數字，甚至是字串）會不斷地被重複使用，如果未來該值需要更改，則需要挑出各選擇器裡的屬性逐一修改，如此將耗費不少時間，且說不定會有遺漏。若是透過宣告的變數來管理，修改時只需要編輯變數的值，那麼所有套用變數的屬性都會一起編譯更改後的數值，相對逐筆手動修改的方式輕鬆便捷且有效率地多。</p>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">$自定義名稱: 顏色值 or 數值;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="scss">// 色彩
$color01: #900;
$color02: #333;

// 尺寸
$width: 60rem;

// 行高
$line-height: 2;

// 字型
$font-family: '微軟正黑體';
$font-large-size: 2rem;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>具體的引用方式：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area03" class="code-text"><code class="scss">.wrap {
    width: $width;
    font-family: $font-family;
    color: $color01;
    background: $color02;
}

.text01 {
    line-height: $line-height;
    color: $color01;
    font-size: $font-large-size;
}

.text02 {
    color: $color02;
    font-size: $font-large-size;
}</code></pre>
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