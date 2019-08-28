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
                        <time>2019-08-17</time>
                        <h1>客製化按鈕核選方塊（checkbox）樣式</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<h3 class="html"></h3>
<div class="code-area mb-0">
<pre id="area01" class="code-text"><code class="css">&lt;input type="checkbox" id="c1" name="cc" /&gt;
&lt;label for="c1"&gt;&lt;span&gt;&lt;/span&gt;Check Box 1&lt;/label&gt;</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>
<p>1. 使用 <em>label</em> 可讓點擊的範圍更大。<br>2. 直接在 <em>span</em> 加上背景圖。</p>
<br>

<h3 class="css"></h3>
<p>將原生的 <em>checkbox</em> 樣式隱藏起來：</p>
<div class="code-area">
<pre id="area02" class="code-text"><code class="css">input[type="checkbox"] {
　　display: none;
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area02">
        <span>COPY</span>
    </button>
</div>

<p>將自定義的格式如背景圖、尺寸、顏色...等設置到 <em>span</em> 裡：</p>
<h3 class="css"></h3>
<div class="code-area mb-0">
<pre id="area03" class="code-text"><code class="css">input[type="checkbox"] + label span { /* CSS */ }</code></pre>
    <button class="copy-btn" data-clipboard-target="#area03">
        <span>COPY</span>
    </button>
</div>
<p>此設定為尚未選取的狀態。</p>

<h3 class="css"></h3>
<div class="code-area mb-0">
<pre id="area04" class="code-text"><code class="css">input[type="checkbox"]:checked + label span { /* CSS */ }</code></pre>
    <button class="copy-btn" data-clipboard-target="#area04">
        <span>COPY</span>
    </button>
</div>
<p>此設定為選取後的狀態。</p>
<br>
<p>最後來看看範例：</p>
<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="gLWXBa" data-default-tab="css,result" data-user="itrong" data-embed-version="2" data-pen-title="CSS-checkbox-select style" class="codepen">See the Pen <a href="http://codepen.io/itrong/pen/gLWXBa/">CSS-checkbox-select style</a> by Trong (<a href="http://codepen.io/itrong">@itrong</a>) on <a href="http://codepen.io">CodePen</a>.</p>
</code>
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