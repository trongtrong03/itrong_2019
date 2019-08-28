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
                        <time>2017-01-23</time>
                        <h1>SCSS：迴圈的用法（@for）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>有兩種公式與法。</p>
<h2>第一種方式：</h2>
<h3 class="scss"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="scss">@for $var from through {}; /* CSS 輸出結果包含 through 的 end 值 */
@for $var from to {}; /* CSS 輸出結果不包含 to 的 end 值 */</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h3 class="ex"></h3>
<div class="code-area">
<pre id="area02" class="code-text"><code class="scss">@for $num from 1 through 5 {
    .div-#{$num} { width: 2rem * $num; }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>輸出 CSS：</p>
<h3 class="css"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="css">.div-1 { width: 2rem; }
.div-2 { width: 4rem; }
.div-3 { width: 6rem; }
.div-4 { width: 8rem; }
.div-5 { width: 10rem; }</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>第一個例子，代表 <em>@for</em> 會執行五次迴圈，<em>$num</em> 代表變數名稱(可自行命名)。</p>
<br>

<h2>第二種方式：</h2>
<p>範例：</p>
<h3 class="ex"></h3>
<div class="code-area">
<pre id="area04" class="code-text"><code class="scss">$num: 5;
$width: 4rem;
$padding: 2rem;
%div-common {
    height: 3rem;
    padding: 0 $padding/2;
}
@for $i from 1 through $num {
    .div-#{$i} {
        @extend %div-common;
        width:($width + $padding) * $i - $padding;
    }
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>

<p>輸出 CSS：</p>
<h3 class="css"></h3>
<div class="code-area mb-0">
<pre id="area05" class="code-text"><code class="css">.div-1, .div-2, .div-3, .div-4, .div-5 {
    height: 3rem;
    padding: 0 1rem;
}
.div-1 { width: 4rem; }    /* (4 + 2) * 1 - 2 = 4 */
.div-2 { width: 10rem; }    /* (4 + 2) * 2 - 2 = 10 */
.div-3 { width: 16rem; }    /* (4 + 2) * 3 - 2 = 16 */
.div-4 { width: 22rem; }    /* (4 + 2) * 4 - 2 = 22 */
.div-5 { width: 28rem; }    /* (4 + 2) * 5 - 2 = 28 */</code></pre>
    <button class="copy-btn" data-clipboard-target="#area05">
        <span>COPY</span>
    </button>
</div>
<p>第二個例子，可以導入各種公式，連 <em>@extend</em> 或 <em>@mixin</em> 都能使用，在模組化作業上堪稱如虎添翼。</p>
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