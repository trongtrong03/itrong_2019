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
                        <time>2019-08-15</time>
                        <h1>顏色屬性（hsl 與 hsla）</h1>
                    </hgroup>
                </div>
                <!-- 文章內容 -->
                <div class="inside-edit">
<!-- start -->
<p>他是一種和 rgba 色彩表示方式相同，一種特別的顏色格式。</p>

<h3 class="css"></h3>
<div class="code-area">
<pre id="area01" class="code-text"><code class="css">.color {
    background-color: hsl(hue, saturation, lightness);
    background-color: hsla(hue, saturation, lightness, opacity);
}</code></pre>
    <button class="copy-btn" data-clipboard-target="#area01">
        <span>COPY</span>
    </button>
</div>

<h2>參數一覽：</h2>
<div class="t-form">
    <div class="t-head">
        <span class="t-flex1">英文</span>
        <span class="t-flex1">中文</span>
        <span class="t-flex6">說明</span>
    </div>
    <div class="t-row">
        <span class="t-flex1">hue</span>
        <span class="t-flex1">色相</span>
        <span class="t-flex6">
            為整數的角度值 0 ~ 360<br>
            0、360 -> 紅色<br>
            60 -> 黃色<br>
            240 -> 藍色<br>
            ※ 即便是負值（如 -10），也會被轉換為正值（350）。 
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">saturation</span>
        <span class="t-flex1">飽合度</span>
        <span class="t-flex6">
            0% -> 灰色調<br>
            100% -> 最大飽合度 
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">lightness</span>
        <span class="t-flex1">亮度</span>
        <span class="t-flex6">
            以 50% 為正常亮度為分界<br>
            0% -> 黑色<br>
            100% -> 白色 
        </span>
    </div>
    <div class="t-row">
        <span class="t-flex1">alpha</span>
        <span class="t-flex1">不透明度</span>
        <span class="t-flex6">0 ~ 1</span>
    </div>
</div>

<h3 class="demo"></h3>
<code>
    <p data-height="480" data-theme-id="0" data-slug-hash="ENXOxW" data-default-tab="css,result" data-user="itrong" data-embed-version="2" data-pen-title="CSS-hsl與hsla" class="codepen">See the Pen <a href="http://codepen.io/itrong/pen/ENXOxW/">CSS-hsl與hsla</a> by Trong (<a href="http://codepen.io/itrong">@itrong</a>) on <a href="http://codepen.io">CodePen</a>.</p>
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